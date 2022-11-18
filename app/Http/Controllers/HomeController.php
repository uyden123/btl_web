<?php

namespace App\Http\Controllers;

use App\blog_category;
use App\blog_post;
use App\blog_tag;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        $lastest_posts = blog_post::where("status", 1)->orderBy('created_at', 'DESC')->take(4)->get();
        return view('home.home')->with('category',$cate_product)->with('all_product',$all_product)->with('lastest_posts', $lastest_posts);
    }

    public function blog(){
        $posts = blog_post::where("status", 1)->orderBy('created_at', 'DESC')->paginate(2);
        $lastest_posts = blog_post::where("status", 1)->orderBy('created_at', 'DESC')->take(4)->get();
        $tags = blog_tag::all();
        $categories = blog_category::all();
        return view('blog.blog', compact('posts', 'tags', 'lastest_posts', 'categories'));
    }

    public function contact(){
        return view('contact.contact');
    }

    public function about(){
        return view('about.about_us');
    }
}
