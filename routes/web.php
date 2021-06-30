 <?php

use Illuminate\Support\Facades\Route;

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
//trangchu
Route::get('/','App\Http\Controllers\HomeController@index');

//gioithieu
Route::get('/gioi-thieu','App\Http\Controllers\AboutController@about');


//admin
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');

//backend + Category
Route::get('/add-category','App\Http\Controllers\CategoryController@add_category');
Route::get('/all-category','App\Http\Controllers\CategoryController@all_category');
Route::get('/edit-category/{category_id}','App\Http\Controllers\CategoryController@edit_category');
Route::post('/save-category','App\Http\Controllers\CategoryController@save_category');
Route::post('/update-category/{category_id}','App\Http\Controllers\CategoryController@update_category');
Route::get('/delete-category/{category_id}','App\Http\Controllers\CategoryController@delete_category');


Route::get('/unactive-category/{category_id}','App\Http\Controllers\CategoryController@unactive_category');
Route::get('/active-category/{category_id}','App\Http\Controllers\CategoryController@active_category');


//backend + Brand
Route::get('/add-brand','App\Http\Controllers\BrandController@add_brand');
Route::get('/all-brand','App\Http\Controllers\BrandController@all_brand');
Route::get('/edit-brand/{brand_id}','App\Http\Controllers\BrandController@edit_brand');
Route::post('/save-brand','App\Http\Controllers\BrandController@save_brand');
Route::post('/update-brand/{brand_id}','App\Http\Controllers\BrandController@update_brand');
Route::get('/delete-brand/{brand_id}','App\Http\Controllers\BrandController@delete_brand');

Route::get('/unactive-brand/{brand_id}','App\Http\Controllers\BrandController@unactive_brand');
Route::get('/active-brand/{brand_id}','App\Http\Controllers\BrandController@active_brand');





//backend + data_service
Route::get('/add-data-service','App\Http\Controllers\DataServiceController@add_data_service');
Route::get('/all-data-service','App\Http\Controllers\DataServiceController@all_data_service');
Route::get('/edit-data-service/{data_service_id}','App\Http\Controllers\DataServiceController@edit_data_service');
Route::post('/save-data-service','App\Http\Controllers\DataServiceController@save_data_service');
Route::post('/update-data-service/{data_service_id}','App\Http\Controllers\DataServiceController@update_data_service');
Route::get('/delete-data-service/{data_service_id}','App\Http\Controllers\DataServiceController@delete_data_service');

Route::get('/unactive-data-service/{data_service_id}','App\Http\Controllers\DataServiceController@unactive_data_service');
Route::get('/active-data-service/{data_service_id}','App\Http\Controllers\DataServiceController@active_data_service');


//backend + call_service
Route::get('/add-call-service','App\Http\Controllers\CallServiceController@add_call_service');
Route::get('/all-call-service','App\Http\Controllers\CallServiceController@all_call_service');
Route::get('/edit-call-service/{call_service_id}','App\Http\Controllers\CallServiceController@edit_call_service');
Route::post('/save-call-service','App\Http\Controllers\CallServiceController@save_call_service');
Route::post('/update-call-service/{call_service_id}','App\Http\Controllers\CallServiceController@update_call_service');
Route::get('/delete-call-service/{call_service_id}','App\Http\Controllers\CallServiceController@delete_call_service');

Route::get('/unactive-call-service/{call_service_id}','App\Http\Controllers\CallServiceController@unactive_call_service');
Route::get('/active-call-service/{call_service_id}','App\Http\Controllers\CallServiceController@active_call_service');

