<?php

namespace Modules\Version1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Socialite;
use Auth;
// model
use Modules\Version1\Entities\User;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the facebook authentication page.
     * @return Response
     */

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->scopes(['public_profile', 'user_friends'])->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        // ko thể login bằng cái $user, vì giá trị trả về nó khác với thằng authUser.
        try{
            $user = Socialite::driver('facebook')->user();  
        }catch(Exception $e) {
            return redirect()->back()->with('failed', 'Lỗi đăng nhập, xin thử lại.');
        }

        $authUser = $this->findOrCreateUser($user);
        //login
        Auth::login($authUser, true);

        return redirect('/');
    }

    /**
     * @return $facebookUser
     */
    public function findOrCreateUser($facebookUser) {
        $authUser = User::where('email', $facebookUser->getEmail())->first();
        // $authUser = User::where('facebook_id', $facebookUser->getId())->first();

        if($authUser) {
            return $authUser;
        }
        return User::create([
                    'facebook_id'    => $facebookUser->getId(),
                    'firstname'      => $facebookUser->getName(),
                    'lastname'      => null,
                    'email'          => $facebookUser->getEmail(),
                    'avatar'         => $facebookUser->getAvatar(),
                    'remember_token' => $facebookUser->token,
                    'status'         => 1,
                    'password'       => 'aaaa'
                ]);
    }

    // logout fb
    public function logoutFB() {
        Auth::logout();
        return redirect()->back();
    }


}
