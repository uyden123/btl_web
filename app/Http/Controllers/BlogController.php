<?php

namespace App\Http\Controllers;

use App\blog_category;
use App\blog_post;
use App\blog_tag;
use Illuminate\Http\Request;
use Session;

session_start();

class BlogController extends Controller
{
    public function blog_details(blog_post $post)
    {
        $tags = blog_tag::all();
        $available_posts = blog_post::where("status", 1);
        $lastest_posts = $available_posts->orderBy('created_at', 'DESC')->take(4)->get();
        $categories = blog_category::all();
        return view('blog.components.blog_details', compact('post', 'tags', 'lastest_posts', 'categories'));
    }

    public function admin_post()
    {
        $posts = blog_post::all()->sortByDesc('created_at');
        return view('admin.blog.show', compact('posts'));
    }

    public function admin_add_post()
    {
        $tags = blog_tag::all();
        $categories = blog_category::all();
        return view('admin.blog.post', compact('tags', 'categories'));
    }

    public function admin_blog_tag()
    {
        $tags = blog_tag::all();
        return view('admin.blog.tag.show', compact('tags'));
    }

    public function admin_blog_category()
    {
        $categories = blog_category::all();
        return view('admin.blog.category.show', compact('categories'));
    }

    public function admin_add_blog_tag()
    {
        return view('admin.blog.tag.tag');
    }

    public function admin_add_blog_category()
    {
        return view('admin.blog.category.category');
    }


    public function add_post(Request $request)
    {
        $this->validate($request, [
            "blog_title" => "required|unique:blog_posts,title",
            "blog_description" => "required|unique:blog_posts,description",
            "blog_slug" => "required|unique:blog_posts,slug",
            "blog_thumbnails" => "required",
            "blog_content" => "required"
        ]);

        $post = new blog_post;
        if ($request->hasFile('blog_thumbnails')) {
            $imageName = $request->file('blog_thumbnails');
            $get_name_image = $imageName->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $imageName->getClientOriginalExtension();
            $path = $imageName->move('public/upload/blog_thumbnails', $new_image);
            $post->image = $path;
        }
        $post->title = $request->blog_title;
        $post->description = $request->blog_description;
        $post->slug = $request->blog_slug;
        $post->content = $request->blog_content;
        $post->status = $request->status == 1 ? $request->status : 0;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        Session::flash('message', 'Đã thêm bài viết thành công!');
        return redirect("/admin/blog_post/add_post");
    }

    public function add_blog_tag(Request $request)
    {
        $this->validate($request, [
            "tag_name" => "required|unique:blog_tags,name",
            "tag_slug" => "required|unique:blog_tags,slug",
        ]);

        $tag = new blog_tag;
        $tag->name = $request->tag_name;
        $tag->slug = $request->tag_slug;
        $tag->save();
        Session::flash('message', 'Đã thêm TAG thành công!');
        return redirect("/admin/blog_tag/add_blog_tag");
    }

    public function add_blog_category(Request $request)
    {
        $this->validate($request, [
            "category_name" => "required|unique:blog_categories,name",
            "category_slug" => "required|unique:blog_categories,slug",
        ]);

        $tag = new blog_category;
        $tag->name = $request->category_name;
        $tag->slug = $request->category_slug;
        $tag->save();
        Session::flash('message', 'Đã thêm danh mục thành công!');
        return redirect("/admin/blog_category/add_blog_category");
    }

    public function delete_blog_post($id)
    {
        blog_post::where('id', $id)->delete();
        return redirect("/admin/blog_post");
    }

    public function edit_blog_post($id)
    {
        $post = blog_post::with('tags', 'categories')->where('id', $id)->first();
        $tags = blog_tag::all();
        $categories = blog_category::all();
        return view('admin.blog.edit', compact('post', 'tags', 'categories'));
    }

    public function update_blog_post(Request $request, $id)
    {
        $this->validate($request, [
            "blog_title" => "required",
            "blog_description" => "required",
            "blog_slug" => "required",
            "blog_content" => "required"
        ]);


        $post = blog_post::where('id', $id)->first();
        if ($request->hasFile('blog_thumbnails')) {
            $imageName = $request->file('blog_thumbnails');
            $get_name_image = $imageName->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $imageName->getClientOriginalExtension();
            $path = $imageName->move('public/upload/blog_thumbnails', $new_image);
            $post->image = $path;
        }
        $post->title = $request->blog_title;
        $post->description = $request->blog_description;
        $post->slug = $request->blog_slug;
        $post->content = $request->blog_content;
        $post->status = $request->status == 1 ? $request->status : 0;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect()->back()->with('message', 'Đã cập nhật bài viết thành công!');
    }

    public function delete_blog_tag($id)
    {
        blog_tag::where('id', $id)->delete();
        return redirect("/admin/blog_tag");
    }

    public function edit_blog_tag($id)
    {
        $tag = blog_tag::where('id', $id)->first();
        return view('admin.blog.tag.edit', compact('tag'));
    }

    public function update_blog_tag(Request $request, $id)
    {
        $this->validate($request, [
            "tag_name" => "required",
            "tag_slug" => "required",
        ]);
        $tag = blog_tag::where('id', $id)->first();
        $tag->name = $request->tag_name;
        $tag->slug = $request->tag_slug;
        $tag->save();
        return redirect()->back()->with('message', 'Đã cập nhật TAG thành công!');
    }

    public function delete_blog_category($id)
    {
        blog_category::where('id', $id)->delete();
        return redirect("/admin/blog_category");
    }

    public function edit_blog_category($id)
    {
        $category = blog_category::where('id', $id)->first();
        return view('admin.blog.category.edit', compact('category'));
    }

    public function update_blog_category(Request $request, $id)
    {
        $this->validate($request, [
            "category_name" => "required",
            "category_slug" => "required",
        ]);
        $category = blog_category::where('id', $id)->first();
        $category->name = $request->category_name;
        $category->slug = $request->category_slug;
        $category->save();
        return redirect()->back()->with('message', 'Đã cập nhật danh mục thành công!');
    }

    public function tag(blog_tag $tag)
    {
        $posts = $tag->posts();
        $available_posts = blog_post::where("status", 1);
        $lastest_posts = $available_posts->orderBy('created_at', 'DESC')->take(4)->get();
        $tags = blog_tag::all();
        $categories = blog_category::all();
        return view('blog.blog', compact('posts', 'tags', 'lastest_posts', 'categories'));
    }

    public function category(blog_category $category)
    {
        $posts = $category->posts();
        $available_posts = blog_post::where("status", 1);
        $lastest_posts = $available_posts->orderBy('created_at', 'DESC')->take(4)->get();
        $tags = blog_tag::all();
        $categories = blog_category::all();
        return view('blog.blog', compact('posts', 'tags', 'lastest_posts', 'categories'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $posts = blog_post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->paginate(2);
        $available_posts = blog_post::where("status", 1);
        $lastest_posts = $available_posts->orderBy('created_at', 'DESC')->take(4)->get();
        $tags = blog_tag::all();
        $categories = blog_category::all();
        return view('blog.blog', compact('posts', 'tags', 'lastest_posts', 'categories'));
    }
}