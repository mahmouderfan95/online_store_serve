<?php
use Illuminate\Support\Facades\Route;
define('PAGINATION_COUNT',10);
/* admin routes */
Route::group(['middleware'=> 'guest:admin'],function(){
	Route::get('/login','loginController@getLogin')->name('get_admin_Login');
    Route::post('/login','loginController@postLogin')->name('post_admin_Login');
});

Route::group(['middleware'=> 'auth:admin'],function(){
    Route::get('/dashbord','dashbordController@index')->name('admin.dashbord');
    Route::get('/logout','loginController@logout')->name('admin.logout');
    /* ################ Begin languges routes ################## */
    Route::group(['prefix'=> 'languges'],function(){
        Route::get('/','langugesController@index')->name('languges.index');
        Route::get('/create','langugesController@create')->name('languges.create');
        Route::post('/store','langugesController@store')->name('languges.store');

        Route::get('/edit/{id}','langugesController@edit')->name('languges.edit');
        Route::put('/update/{id}','langugesController@update')->name('languges.update');

        Route::get('/delete/{id}','langugesController@destroy')->name('languges.delete');

    });
    /* ################ End languges routes ################## */

    /* ################ Begin main Categories routes ################## */
    Route::group(['prefix'=> 'main_Category'],function(){
        Route::get('/','mainCategoryController@index')->name('mainCategory.index');
        Route::get('/create','mainCategoryController@create')->name('mainCategory.create');
        Route::post('/store','mainCategoryController@store')->name('mainCategory.store');

        Route::get('/edit/{id}','mainCategoryController@edit')->name('mainCategory.edit');
        Route::put('/update/{id}','mainCategoryController@update')->name('mainCategory.update');

        Route::get('/delete/{id}','mainCategoryController@destroy')->name('mainCategory.delete');
    });
    /* ################ End main Categories routes ################## */
});

/* admin route */


?>
