<?php
//http://localhost/crudUpload-laravel/public/backend/
Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::resource('frontend', 'FrontendController');

    Route::get('/article', 'ArticleController@index');
    Route::get('/article/get_datatable', 'ArticleController@get_datatable');
});
