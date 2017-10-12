<?php

namespace Modules\Blog\Http\Controllers;

use Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Blog\Entities\Post;

use Modules\Blog\Entities\LogAdmin;
use DB;
use Auth;

class DeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index( $post_id )
    {
        try{
            // log admin action
            $log              = new LogAdmin;
            $log->user_id     = Auth::user()->id;
            $log->email       = Auth::user()->email;
            $log->action      = 'Deleted';
            $log->ip          = Request::getClientIp(true);
            $log->description = 'Delete Blog';
            $log->type        = 'normal';
            $log->save();

            // xóa bài viết
            $postDelete = Post::find($post_id);
            $postDelete->delete($post_id);

        }catch (\Exception $e) {
            return redirect()->route('admin::blog::lists')->with('failed','Lỗi xóa bài viết, xin thử lại.');
        }

        return redirect()->route('admin::blog::lists')->with('success', 'Xóa bài viết thành công !');
    }

    
}
