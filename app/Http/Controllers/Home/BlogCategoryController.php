<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory()
    {
        return view('admin.blog_category.blog_category_all');
    }

    public function StoreBlogCategory(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'The Name is Required!'
        ]);

        BlogCategory::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->back()->with($notification);

    }

    public function EditBlogCategory($id)
    {
        $categoryEdit = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_all', compact('categoryEdit'));
    }

    public function UpdateBlogCategory(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'The Name is Required!'
        ]);

        BlogCategory::findOrFail($request->id)->update([
            'name' => $request->name
        ]);

        $notification = array(
            'message' => 'Category Update Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->route('all.blog.category')->with($notification);

    }

    public function DeleteBlogCategory($id)
    {
        BlogCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->route('all.blog.category')->with($notification);

    }
}