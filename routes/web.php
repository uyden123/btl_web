<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function (){
    return App\Category::with('categoryChildren')->where('category_parent_id',0)->get();
});
//Front end
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
Route::get('/cua-hang-cafe', 'HomeController@index1');
Route::get('/blog', 'HomeController@blog');
//danh muc san pham trang chu
Route::get('/cua-hang-cafe/{category_id}', 'CategoryProductController@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}', 'BrandProductController@show_brand_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@details_product');

//Backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');

//category product
Route::get('/add-category-product', 'CategoryProductController@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProductController@delete_category_product');

Route::get('/all-category-product', 'CategoryProductController@all_category_product');

Route::get('/unactive-category-product/{category_product_id}', 'CategoryProductController@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProductController@active_category_product');

Route::post('/save-category-product', 'CategoryProductController@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProductController@update_category_product');

//product
Route::get('/add-product', 'ProductController@add_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

Route::get('/all-product', 'ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');


//Blog
Route::get('/blog_post', 'BlogController@admin_post');
Route::get('/blog_tag', 'BlogController@admin_blog_tag');
Route::get('/blog_category', 'BlogController@admin_blog_category');
Route::get('/blog_post/add_post', 'BlogController@admin_add_post');
Route::get('/blog_tag/add_blog_tag', 'BlogController@admin_add_blog_tag');
Route::get('/blog_category/add_blog_category', 'BlogController@admin_add_blog_category');
Route::post('/blog_post/add_post', 'BlogController@add_post');
Route::post('/blog_tag/add_blog_tag', 'BlogController@add_blog_tag');
Route::post('/blog_category/add_blog_category', 'BlogController@add_blog_category');

Route::get('/blog_post/{id}/delete', 'BlogController@delete_blog_post');
Route::get('/blog_post/{id}/edit', 'BlogController@edit_blog_post');
Route::post('/blog_post/{id}/update', 'BlogController@update_blog_post');

Route::get('/blog_tag/{id}/delete', 'BlogController@delete_blog_tag');
Route::get('/blog_tag/{id}/edit', 'BlogController@edit_blog_tag');
Route::post('/blog_tag/{id}/update', 'BlogController@update_blog_tag');

Route::get('/blog_category/{id}/delete', 'BlogController@delete_blog_category');
Route::get('/blog_category/{id}/edit', 'BlogController@edit_blog_category');
Route::post('/blog_category/{id}/update', 'BlogController@update_blog_category');

Route::get('blog-details/{post}', 'BlogController@blog_details')->name('blog-details');
Route::get('/blog/tag/{tag}', 'BlogController@tag');
Route::get('/blog/category/{category}', 'BlogController@category');
Route::get('/blog/search/', 'BlogController@search')->name('search');