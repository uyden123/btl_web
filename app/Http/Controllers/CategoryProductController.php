<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProductController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        return view('shop.components.product')->with('category',$cate_product)->with('all_product',$all_product);
    }

    public function add_category_product(){
        $category = Category::where('category_parent_id',0)->orderby('category_id','desc')->get();
        return view('admin.add_category_product')->with(compact('category'));
    }

    public function all_category_product(){
        $category_product = Category::where('category_parent_id',0)->orderby('category_id','desc')->get();
        $all_category_product = DB::table('tbl_category_product')->get();
        $manageer_category_product = view('admin.all_category_product')->with('all_category_product', $all_category_product)->with('category_product',$category_product);
        return view('admin_layout')->with('admin.all_category_product', $manageer_category_product);
    }

    public function save_category_product(Request $request){
        $this->validate($request, [
            "category_product_name" => "required|unique:tbl_category_product,category_name",
            "category_product_desc" => "required|unique:tbl_category_product,category_desc",
            "slug_category_product" => "required|unique:tbl_category_product,slug_category_product",
        ]);

        $data=array();
        $data['category_name'] = $request->category_product_name;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_parent_id'] = $request->category_parent;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::flash('message','Thêm danh mục sản phẩm thành công!');
        return Redirect::to('add-category-product');
    }

    public function edit_category_product($category_product_id){
        $category = Category::where('category_parent_id',0)->orderby('category_id','desc')->get();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        $manageer_category_product = view('admin.edit_category_product')->with('edit_category_product', $edit_category_product)
            ->with('category',$category);
        return view('admin_layout')->with('admin.edit_category_product', $manageer_category_product);
    }

    public function update_category_product(Request $request,$category_product_id){
        $this->validate($request, [
            "category_product_name" => "required",
            "category_product_desc" => "required",
            "slug_category_product" => "required",
        ]);
        $data=array();
        $data['category_name'] = $request->category_product_name;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_parent_id'] = $request->category_parent;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        return Redirect::to('all-category-product');
    }

    public function delete_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::flash('message','Xoá thành công');
        return Redirect::to('all-category-product');
    }

    public function show_category_home($category_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $category_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $category_by_id = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->where('tbl_product.category_id', $category_id)->get();
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
        return view('shop.components.product')->with('category',$cate_product)->with('category',$category_product)
            ->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }
}
