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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'A1uniform'], function(){
    Route::group(
        [
            'prefix' => 'admin',
            'middleware' => ['manual.auth']
        ],
        function (){
        //Route Admin
        //index page
        Route::get('', [
            'uses' => 'A1uniformAdminController@index',
            'as' => 'A1uniform.index'
        ]);
        //admin manager
        Route::get('admin_manager', [
            'uses' => 'A1uniformAdminController@admin_manager',
            'as' => 'A1uniform.admin_manager'
        ]);
        //admin details
        Route::get('showAdmin/{ad_id}', [
            'uses' => 'A1uniformAdminController@showAdmin',
            'as' => 'A1uniform.showAdmin'
        ]);
        //update admin
        Route::get('updateAdmin/{ad_id}',[
            'uses' => 'A1uniformAdminController@editAdmin',
            'as' => 'A1uniform.editAdmin'
        ]);
        Route::post('updateAdmin/{ad_id}', [
            'uses' => 'A1uniformAdminController@updateAdmin',
            'as' => 'A1uniform.updateAdmin'
        ]);
        //delete admin
        Route::get('deleteAdmin/{ad_id}', [
            'uses' => 'A1uniformAdminController@confirmAdmin',
            'as' => 'A1uniform.confirmAdmin'
        ]);
        Route::post('deleteAdmin/{ad_id}', [
            'uses' => 'A1uniformAdminController@destroyAdmin',
            'as' => 'A1uniform.destroyAdmin'
        ]);
        //End route admin

        //Route Customer
        // customer manager
        Route::get('customer_manager', [
            'uses' => 'A1uniformCustomerController@customer_manager',
            'as' => 'A1uniform.customer_manager'
        ]);
        // customer details
        Route::get('showCustomer/{cus_id}',[
            'uses' => 'A1uniformCustomerController@showCustomer',
            'as' => 'A1uniform.showCustomer'
        ]);
        // update customer
        Route::get('updateCustomer/{cus_id}',[
            'uses' => 'A1uniformCustomerController@editCustomer',
            'as' => 'A1uniform.editCustomer'
        ]);
        Route::post('updateCustomer/{cus_id}',[
            'uses' => 'A1uniformCustomerController@updateCustomer',
            'as' => 'A1uniform.updateCustomer'
        ]);
        //delete customer
        Route::get('deleteCustomer/{cus_id}', [
            'uses' => 'A1uniformCustomerController@confirmCustomer',
            'as' => 'A1uniform.confirmCustomer'
        ]);
        Route::post('deleteCustomer/{cus_id}', [
            'uses' => 'A1uniformCustomerController@destroyCustomer',
            'as' => 'A1uniform.destroyCustomer'
        ]);
        //End Customer

        //Route Category
            // category manager
            Route::get('category_manager', [
                'uses' => 'A1uniformCategoryController@category_manager',
                'as' => 'A1uniform.category_manager'
            ]);
            // category details
            Route::get('showCategory/{cat_id}', [
                'uses' => 'A1uniformCategoryController@showCategory',
                'as' => 'A1uniform.showCategory'
            ]);
            // add category
            Route::get('createCategory', [
                'uses' => 'A1uniformCategoryController@createCategory',
                'as' => 'A1uniform.createCategory'
            ]);
            Route::post('createCategory',[
                'uses' => 'A1uniformCategoryController@storeCategory',
                'as' => 'A1uniform.storeCategory'
            ]);
            // update category
            Route::get('updateCategory/{cat_id}', [
                'uses' => 'A1uniformCategoryController@editCategory',
                'as' => 'A1uniform.editCategory'
            ]);
            Route::post('updateCategory/{cat_id}', [
                'uses' => 'A1uniformCategoryController@updateCategory',
                'as' => 'A1uniform.updateCategory'
            ]);
            //delete category
            Route::get('deleteCategory/{cat_id}', [
                'uses' => 'A1uniformCategoryController@confirmCategory',
                'as' => 'A1uniform.confirmCategory'
            ]);
            Route::post('deleteCategory/{cat_id}', [
                'uses' => 'A1uniformCategoryController@destroyCategory',
                'as' => 'A1uniform.destroyCategory'
            ]);
         //End Route Category

         // Route Product
            // category manager
            Route::get('uniform_manager', [
                'uses' => 'A1uniformUniformController@uniform_manager',
                'as' => 'A1uniform.uniform_manager'
            ]);
            // category details
            Route::get('showUniform/{uni_id}', [
                'uses' => 'A1uniformUniformController@showUniform',
                'as' => 'A1uniform.showUniform'
            ]);
            // add category
            Route::get('createUniform', [
                'uses' => 'A1uniformUniformController@createUniform',
                'as' => 'A1uniform.createUniform'
            ]);
            Route::post('createUniform',[
                'uses' => 'A1uniformUniformController@storeUniform',
                'as' => 'A1uniform.storeUniform'
            ]);
            // update category
            Route::get('updateUniform/{uni_id}', [
                'uses' => 'A1uniformUniformController@editUniform',
                'as' => 'A1uniform.editUniform'
            ]);
            Route::post('updateUniform/{uni_id}', [
                'uses' => 'A1uniformUniformController@updateUniform',
                'as' => 'A1uniform.updateUniform'
            ]);
            //delete category
            Route::get('deleteUniform/{uni_id}', [
                'uses' => 'A1uniformUniformController@confirmUniform',
                'as' => 'A1uniform.confirmUniform'
            ]);
            Route::post('deleteUniform/{uni_id}', [
                'uses' => 'A1uniformUniformController@destroyUniform',
                'as' => 'A1uniform.destroyUniform'
            ]);
            //End Route Product
        });

    // Homepage
    Route::get('', [
        'uses' => 'A1uniformHomepageController@homepage',
        'as' => 'A1uniform.homepage'
    ]);

    Route::post('search',[
        'uses' => 'A1uniformHomepageController@search',
        'as' => 'A1uniform.search'
    ]);

    //Detail
    Route::get('detailUniform/{uni_id}', [
        'uses' => 'A1uniformUniformController@detailUniform',
        'as' => 'A1uniform.detailUniform'
    ]);

    //Register
    Route::get('registerCustomer', [
        'uses' => 'A1uniformCustomerController@registerCustomer',
        'as' => 'A1uniform.registerCustomer'
    ]);
    Route::post('registerCustomer',[
        'uses' => 'A1uniformCustomerController@storeCustomer',
        'as' => 'A1uniform.storeCustomer'
    ]);
});

    // Login/logout
Route::group(['prefix' => 'auth'], function (){
    Route::get('login',[
        'uses' => 'ManualAuthController@ask',
        'as' => 'auth.ask'
    ]);

    Route::post('login',[
        'uses' => 'ManualAuthController@signin',
        'as' => 'auth.signin'
    ]);

    Route::get('logout',[
        'uses' => 'ManualAuthController@signout',
        'as' => 'auth.signout'
    ]);
});
