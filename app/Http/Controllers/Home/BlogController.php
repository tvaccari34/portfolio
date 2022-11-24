<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;
use Image;

class BlogController extends Controller
{
    public function AllBlog(){
        $blog = Blog::latest()->get();
        return view('admin.blog.blog_all', compact('blog'));
    }

    public function AddBlog(){

        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();

        return view('admin.blog.blog_add', compact('categories'));
    }

    public function StoreBlog(Request $request){
        $request->validate([
            'blog_category_id' => 'required',
            'blog_title' => 'required',
            'blog_tags' => 'required',
            'blog_description' => 'required',
            'blog_image' => 'required',
        ],[
            'blog_category_id.required' => 'Blog category is required',
            'blog_title.required' => 'Blog title is required',
            'blog_tags.required' => 'Blog tags is required',
            'blog_description.required' => 'Blog description is required',
            'blog_image.required' => 'Blog image is required',
        ]);

        $image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(430,327)->save('upload/blog/'.$name_gen);

        $save_url = 'upload/blog/'.$name_gen;

        Blog::insert([
            'blog_category_id' => $request->blog_category_id,
            'blog_title' => $request->blog_title,
            'blog_tags' => $request->blog_tags,
            'blog_description' => $request->blog_description,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog Page Added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog')->with($notification);

    }

    public function EditBlog($id){
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $blog = Blog::findOrFail($id);

        return view('admin.blog.blog_update', compact('blog', 'categories'));
    }

    public function UpdateBlog(Request $request){
        $blog_id = $request->id;

        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(1020,519)->save('upload/blog/'.$name_gen);

            $save_url = 'upload/blog/'.$name_gen;

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Blog updated with image successfully',
                'alert-type' => 'success'
            );


        } else {
            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
            ]);

            $notification = array(
                'message' => 'Blog updated without image successfully',
                'alert-type' => 'success'
            );
        }

        return redirect()->route('all.blog')->with($notification);
    }

    public function DeleteBlog($id){
        $blog = Blog::findOrFail($id);

        unlink($blog->blog_image);

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog has been deleted',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function BlogDetails($id){

        $allBlogs = Blog::latest()->limit(5)->get();
        $blogCategories = BlogCategory::latest()->get();

        $blog = Blog::findOrFail($id);
        return view('frontend.blog_details', compact('blog', 'allBlogs', 'blogCategories'));
    }

    public function CategoryBlog($id){

        $blogPost = Blog::where('blog_category_id', $id)->orderBy('id', 'DESC')->get();

        $allBlogs = Blog::latest()->limit(5)->get();
        $blogCategories = BlogCategory::latest()->get();
        $categoryName = BlogCategory::findOrFail($id);

        return view('frontend.category_blogs', compact('blogPost', 'allBlogs', 'blogCategories', 'categoryName'));
    }
}
