<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;
use File;

//model
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Category;
use App\Language;
use Modules\Blog\Entities\PostTrans;
use DB;

//request
use Modules\Blog\Http\Requests\EditPostRequest;

class EditPostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($post_id)
    {
        $postEdit = Post::findOrFail($post_id)->toArray();
        $postEditTrans = PostTrans::
                                where('post_id', $post_id)
                                ->first();
        $categories = Category::select('cate_id', 'title')
                                ->whereNotIn('cate_id', [$postEdit['cate_id']])
                                ->get();
        // get name cate curent
        $cateCurent = Category::select('cate_id', 'title')
                                ->where('cate_id', $postEdit['cate_id'])
                                ->first();

        return view('blog::edit', compact('postEdit', 'categories', 'postEditTrans', 'cateCurent'));
    }

    // sửa bài viết
    public function postEditPost(EditPostRequest $request, $post_id)
    {
        try{
            $post = Post::find($post_id);
            $post->title = $request->titleVi;

            // kiển tra hình ảnh hiện tại và kiểm tra có thêm mới hay ko
            if(($request->file('inputImages')) != null)
            {
                // lấy đuôi hình ảnh
                $fileExtension =  $request->file('inputImages')->getClientOriginalExtension(); 
                $fileName = str_slug($request->titleVi).'-'.str_random(10).'.'.$fileExtension;
                // lưu ảnh
                $request->file('inputImages')->move(public_path()."/files/images/",$fileName);
                $post->thumbnail = $fileName;
            }else {
                $imgCurrent = $request->thumbnailEdit;
                $post->thumbnail = $imgCurrent;
            }

            $post->content          = $request->contentVi;
            $post->slug             = str_slug($request->slug);
            $post->status           = $request->status;
            $post->cate_id          = $request->selectCate;
            $post->meta_description = $request->metakeyVi;
            $post->meta_keyword     = $request->keywordVi;
            $post->user_id          = 1;
            $post->save();

            // update bảng dịch
            $postTrans = PostTrans::where('post_id', $post_id)
                        ->update([
                            'title'            => $request->titleEn,
                            'content'          => $request->contentEn,
                            'meta_description' => $request->metakeyEn,
                            'post_id'          => $post_id,
                            'meta_keyword'     => $request->keywordEn
                        ]);
        }catch (\Exception $e) {
            return redirect()->back()->withInput()->with('failed','Lỗi cập nhật bài viết, xin thử lại.');
            // dd($e);
        }
        
        return redirect()->route('admin::blog::lists')->with('success','Cập nhật bài viết thành công!');
    }
}
