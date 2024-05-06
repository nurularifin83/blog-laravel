<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class PostController extends Controller
{
    public function AllPost()
    {
        $posts = DB::table('posts')
            ->join('users', 'posts.post_author', '=', 'users.id')
            ->join('blog_categories', 'posts.blog_category_id', '=', 'blog_categories.id')
            ->select('posts.*', 'users.name as user_name', 'blog_categories.name as category_name')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.post.posts_all', compact('posts'));
    }

    public function AddPost()
    {
        return view('admin.post.posts_add');
    }

    public function StorePost(Request $request)
    {

        $request->validate([
            'post_title' => 'required',
            'post_content' => 'required'
        ],[
            'post_title.required' => 'The title is required!',
            'post_content.required' => 'The content is required!'
        ]);

        $image = $request->file('post_image');
        if(empty($image))
        {
            $save_url = NULL;
        } 
        else
        {
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(850,430)->save('upload/post/'.$name_gen);
            $save_url = 'upload/post/'.$name_gen;
        }

        $post_status = '';
        if ($request->has('draft')) {
            $post_status = 'draft';
        }
        else
        {
            $post_status = 'published';
        }

        Post::insert([
            'post_author' => $request->post_author,
            'blog_category_id' => $request->blog_category_id,
            'post_image' => $save_url,
            'post_content' => $request->post_content,
            'post_title' => $request->post_title,
            'post_status' => $post_status,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Post Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

    }

    public function DeletePost($id)
    {
        $post = Post::findOrFail($id);
        if (!empty($post->post_image))
        {
            $img = $post->post_image;
            unlink($img);
        }

        Post::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Post Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);
    }

    public function EditPost($id)
    {
        return view('admin.post.post_edit', [
            'post' => Post::findOrFail($id)
        ]);
    }

    public function UpdatePost(Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'post_content' => 'required'
        ],[
            'post_title.required' => 'The title is required!',
            'post_content.required' => 'The content is required!'
        ]);

        $post_id = $request->id;
        $postData = Post::findOrFail($post_id);

        $image = $request->file('post_image');
        if(empty($image))
        {
            $save_url = $postData->post_image;
        } 
        elseif (!empty($image) && empty($postData->post_image))
        {
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(850,430)->save('upload/post/'.$name_gen);
            $save_url = 'upload/post/'.$name_gen;
        }
        else
        {
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(850,430)->save('upload/post/'.$name_gen);
            unlink($postData->post_image);
            $save_url = 'upload/post/'.$name_gen;
        }

        Post::findOrFail($post_id)->update([
            'post_author' => $request->post_author,
            'blog_category_id' => $request->blog_category_id,
            'post_image' => $save_url,
            'post_content' => $request->post_content,
            'post_title' => $request->post_title,
            'post_status' => $request->post_status,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Post Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function BlogDetails($id)
    {
        $post = DB::table('posts')
            ->join('users', 'posts.post_author', '=', 'users.id')
            ->join('blog_categories', 'posts.blog_category_id', '=', 'blog_categories.id')
            ->select('posts.*', 'users.name as user_name', 'blog_categories.name as category_name')
            ->where('posts.id','=',$id)
            ->first();
        return view('frontend.blog-details', compact('post'));
    }

    public function CategoryBlog($id)
    {
        $posts = DB::table('posts')
        ->join('users', 'posts.post_author', '=', 'users.id')
        ->select('posts.*', 'users.name as user_name', 'users.profile_image as profile_image')
        ->where('blog_category_id','=',$id)
        ->orderBy('id','DESC')
        ->paginate(4);
        $allblogs = Post::orderBy('id','desc')->limit(5)->get();
        $categoryname = BlogCategory::findOrFail($id);
        return view('frontend.cat_blog_details', compact('posts','allblogs','categoryname'));
    }

    public function HomeBlog()
    {
        $posts = DB::table('posts')
        ->join('users', 'posts.post_author', '=', 'users.id')
        ->select('posts.*', 'users.name as user_name', 'users.profile_image as profile_image')
        ->orderBy('id','DESC')
        ->paginate(4);
        $allblogs = Post::orderBy('id','desc')->limit(5)->get();
        return view('frontend.blog', compact('posts','allblogs'));
    }
}