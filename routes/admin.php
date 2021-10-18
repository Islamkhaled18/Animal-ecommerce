<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
    {   
        // Route::group(['namespace'=>'Dashboard','prefix'=>'admin'],function(){

            

        // });

        Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin' , 'prefix'=>'admin'],function(){

            Route::get('/', 'DashboardController@index')->name('admin.dashboard');  
            Route::get('/index','CategoryController@index')->name('admin.categories');

            /////////////////////////////// Categories /////////////////////////////////////////////////
          
            Route::get('create','CategoryController@create')->name('admin.categories.create');
            Route::post('store','CategoryController@store')->name('admin.categories.store');
            Route::get('edit/{id}', 'CategoryController@edit')->name('admin.categories.edit');
            Route::post('update/{id}', 'CategoryController@update')->name('admin.categories.update');
            Route::get('delete/{id}', 'CategoryController@destroy')->name('admin.categories.delete');            
            /////////////////////////////// Categories /////////////////////////////////////////////////

            
            /////////////////////////////// About us /////////////////////////////////////////////////
            Route::get('/about_us',
            [
                'uses'=> 'About_usController@index',
                'as'=> 'about_us'
            ]);

            Route::post('/about_us/update',[

                'uses'=> 'About_usController@update',
                'as'=> 'about_us.update'
            ]);          
            /////////////////////////////// About us  /////////////////////////////////////////////////

            /////////////////////////////// Service /////////////////////////////////////////////////
            Route::get('/service',
            [
                'uses'=> 'ServiceController@index',
                'as'=> 'service'
            ]);

            Route::post('/service/update',[

                'uses'=> 'ServiceController@update',
                'as'=> 'service.update'
            ]);          
            /////////////////////////////// Services  /////////////////////////////////////////////////


            /////////////////////////////// contact us /////////////////////////////////////////////////
            Route::get('/contact',
            [
                'uses'=> 'ContactController@index',
                'as'=> 'contact'
            ]);

            Route::post('/contact/update',[

                'uses'=> 'ContactController@update',
                'as'=> 'contact.update'
            ]);

            Route::get('contactus/{id}','ContactController@read')->name('messages');
            Route::get('allMessages','ContactController@get')->name('messages.index');


            /////////////////////////////// contact us  /////////////////////////////////////////////////


            ///////////////////////////////  policy /////////////////////////////////////////////////
            Route::get('/policy',
            [
                'uses'=> 'PrivacyPolicyController@index',
                'as'=> 'policy'
            ]);

            Route::post('/policy/update',[

                'uses'=> 'PrivacyPolicyController@update',
                'as'=> 'policy.update'
            ]);          
            ///////////////////////////////  policy  /////////////////////////////////////////////////
            ///////////////////////////////  opinion /////////////////////////////////////////////////
            Route::get('/opinions',
            [
                'uses'=> 'OpinionController@index',
                'as'=> 'opinions'
            ]);
            Route::post('/opinions/update',[

                'uses'=> 'OpinionController@update',
                'as'=> 'opinions.update'
            ]);          
            ///////////////////////////////  opinion  /////////////////////////////////////////////////
            /////////////////////////////////// follower    ///////////////////////////////////////////
            Route::resource('/followers','FollowerController')->except(['show']);
            /////////////////////////////////// follower    ///////////////////////////////////////////

            /////////////////////////////////// gallary photos    ///////////////////////////////////////////
            Route::get('/gallary'  , 'GallaryphotosController@addImages')->name('admin.gallary.create');
            Route::post('images', 'GallaryphotosController@saveGallaryImages')->name('admin.gallary.images.store');
            Route::post('images/db', 'GallaryphotosController@saveGallaryImagesDB')->name('admin.gallary.images.store.db');
            /////////////////////////////////// gallary photos     ///////////////////////////////////////////
            ///////////////////////// products ////////////////////////////////////

            Route::group(['prefix'=>'products'] , function(){

                Route::get('/','ProductController@index')->name('admin.products');
                Route::get('general-products','ProductController@create')->name('admin.products.general.create');
                Route::post('store-general-products','ProductController@store')->name('admin.products.general.store');
                Route::get('edit-general-products','ProductController@edit')->name('admin.products.general.edit');
                Route::post('updated-general-products','ProductController@update')->name('admin.products.general.update');
                Route::get('delete/{id}', 'ProductController@destroy')->name('admin.products.general.delete'); 
                
                Route::get('price/{id}', 'ProductController@getPrice')->name('admin.products.price');
                Route::post('price', 'ProductController@saveProductPrice')->name('admin.products.price.store');

                Route::get('stock/{id}', 'ProductController@getStock')->name('admin.products.stock');
                Route::post('stock', 'ProductController@saveProductStock')->name('admin.products.stock.store');

                Route::get('images/{id}', 'ProductController@addImages')->name('admin.products.images');
                Route::post('images', 'ProductController@saveProductImages')->name('admin.products.images.store');
                Route::post('images/db', 'ProductController@saveProductImagesDB')->name('admin.products.images.store.db');


            });

            /////////////////////////// products ///////////////////////////////////////////////

            /////////////////////////// attributes ///////////////////////////////////////////////
                Route::group(['prefix'=>'attributes'],function(){

                    Route::get('/','AttributeController@index')->name('admin.attributes');
                    Route::get('create','AttributeController@create')->name('admin.attributes.create');
                    Route::post('store','AttributeController@store')->name('admin.attributes.store');
                    Route::get('edit/{id}', 'AttributeController@edit')->name('admin.attributes.edit');
                    Route::post('update/{id}', 'AttributeController@update')->name('admin.attributes.update');
                    Route::get('delete/{id}', 'AttributeController@destroy')->name('admin.attributes.delete'); 

                });
            /////////////////////////// attributes ///////////////////////////////////////////////

            ################################## brands options ######################################
            Route::group(['prefix' => 'options'], function () {
            Route::get('/', 'OptionController@index')->name('admin.options');
            Route::get('create', 'OptionController@create')->name('admin.options.create');
            Route::post('store', 'OptionController@store')->name('admin.options.store');
            Route::get('delete/{id}','OptionController@destroy')->name('admin.options.delete');
            Route::get('edit/{id}', 'OptionController@edit')->name('admin.options.edit');
            Route::post('update/{id}', 'OptionController@update')->name('admin.options.update');
        });
        ################################## end options    #######################################

        ################################## brands blogs ######################################
        Route::group(['prefix' => 'blogs'], function () {
            Route::get('/', 'BlogController@index')->name('admin.blogs');
            Route::get('create', 'BlogController@create')->name('admin.blogs.create');
            Route::post('store', 'BlogController@store')->name('admin.blogs.store');
            Route::get('delete/{id}','BlogController@destroy')->name('admin.blogs.delete');
            Route::get('edit/{id}', 'BlogController@edit')->name('admin.blogs.edit');
            Route::post('update/{id}', 'BlogController@update')->name('admin.blogs.update');
        });
        ################################## end blogs    #######################################


        ################################## start comments    #######################################

            Route::group(['prefix' => 'comments'], function () {

                Route::get('/allComments','CommentController@index')->name('comment.index');
                Route::get('delete/{id}','CommentController@destroy')->name('admin.comments.delete');

            });
        ################################## start comments    #######################################

        ################################## start replies    #######################################

        Route::group(['prefix' => 'replies'], function () {

            Route::get('/allReplies','ReplyController@index')->name('reply.index');
            Route::get('delete/{id}','ReplyController@destroy')->name('admin.replies.delete');

        });
    ################################## start replies    #######################################


        ################################## start advertises ######################################
        Route::group(['prefix' => 'advertises'], function () {
            Route::get('/advertise',
            [
                'uses'=> 'AdvertiseController@index',
                'as'=> 'advertise'
            ]);

            Route::post('/advertise/update',[

                'uses'=> 'AdvertiseController@update',
                'as'=> 'advertise.update'
            ]);   
        });
        ################################## end advertises    #######################################

        ################################## brands blogs ######################################
        Route::group(['prefix' => 'coupons'], function () {
            Route::get('/', 'CouponController@index')->name('admin.coupons');
            Route::get('create', 'CouponController@create')->name('admin.coupons.create');
            Route::post('store', 'CouponController@store')->name('admin.coupons.store');
            Route::get('delete/{id}','CouponController@destroy')->name('admin.coupons.delete');
            Route::get('edit/{id}', 'CouponController@edit')->name('admin.coupons.edit');
            Route::post('update/{id}', 'CouponController@update')->name('admin.coupons.update');
        });
        ################################## end blogs    #######################################

         /////////////////////////////////// cart    ///////////////////////////////////////////
         Route::resource('/carts','CartController')->except(['show']);
         /////////////////////////////////// cart    ///////////////////////////////////////////
        

         ///////////////////////////////// reservations //////////////////////////////////////////

         Route::resource('/reservations','ReservationController')->except(['show']);

                  ///////////////////////////////// reservations //////////////////////////////////////////

















         
        });



        Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {

            Route::get('login', 'LoginController@login')->name('admin.login');
            Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
    
        });




        // Route::get('test',function(){

        //     return view('layouts.admin');

        // });

    });

