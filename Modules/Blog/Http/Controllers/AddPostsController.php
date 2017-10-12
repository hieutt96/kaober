<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

//model
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Category;
use App\Language;
use Modules\Blog\Entities\PostTrans;
use Modules\Blog\Entities\LogAdmin;
use DB;
use Auth;

//request
use Modules\Blog\Http\Requests\PostRequest;

class AddPostsController extends Controller
{
    /**
     * Display a form add new post.
     * @return Response
     */
    public function index()
    {
    	$categories = Category::select('cate_id', 'title')->get();
        return view('blog::add', compact('categories'));
    }

    // thêm bài viết
    public function postAddPost(PostRequest $request) {

    	DB::beginTransaction();

    	try {
    		
    		$post = new Post;
    		$post->title = $request->titleVi;
    		$post->content = $request->contentVi;
    		$post->slug = str_slug($request->slug);
    		$post->status = $request->status;
    		$post->cate_id = $request->selectCate;
    		$post->meta_description = $request->metakeyVi;
    		$post->meta_keyword = $request->keywordVi;
    		$post->user_id = Auth::id();
            
            // lấy đuôi hình ảnh
    		$fileExtension =  $request->file('inputImages')->getClientOriginalExtension(); 
            $fileName = str_slug($request->titleVi).'-'.str_random(10).'.'.$fileExtension;
            // lưu ảnh
    		$request->file('inputImages')->move(public_path()."/files/images/",$fileName);
    		$post->thumbnail = $fileName;

    		$post->save();

    		// thêm vào bảng dịch
    		$postTrans = new PostTrans;

    		$postTrans->title = $request->titleEn;
    		$postTrans->content = $request->contentEn;
    		$postTrans->post_id = $post->post_id;
    		$postTrans->meta_description = $request->metakeyEn;
    		$postTrans->meta_keyword = $request->keywordEn;

    		//ngôn ngữ
    		$language = Language::select('slug', 'lang_id')->where('slug', 'en')->first();
    		$postTrans->lang_id = $language->lang_id;
    		$postTrans->save();

            // log admin action
            $log              = new LogAdmin;
            $log->user_id     = Auth::user()->id;
            $log->email       = Auth::user()->email;
            $log->action      = 'Created';
            $log->ip          = $request->ip();
            $log->description = 'Created Blog';
            $log->type        = 'normal';
            $log->save();

    	    DB::commit();
    	    // all good
    	} catch (\Exception $e) {
    	    DB::rollback();
    	    return redirect()->back()->withInput()->with('failed','Lỗi thêm bài viết, xin thử lại.');
    	    // dd($e);
    	}
        return redirect()->route('admin::blog::add')->with('success','Thêm bài viết thành công!');
    }
}
