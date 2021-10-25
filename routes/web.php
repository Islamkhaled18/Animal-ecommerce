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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Auth::routes();

        Route::get('/', function () {
            return view('site.welcome');
        });

        Route::group(['middleware' => 'auth'], function () {
            
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/aboutus', function () {
                return view('site.aboutus.aboutus');
            });
            Route::get('/gallaryphotos', function () {
                return view('site.gallaryphotos.gallaryphotos');
            });
            Route::get('/contactus', function () {
                return view('site.contact.contact');
            });
            Route::post('sendMessage', 'Dashboard\ContactController@store')->name('sendMessage');

            //////////////////////////blogs/////////////////////////////////////////
            Route::get('/blogs', function () {
                return view('site.blogs.blogs');
            });
            Route::get('/allBlogs', function () {
                return view('site.blogs.allBlogs');
            });
            Route::get('/singleBlog/{id}', 'Site\SingleBlogController@showSingleBlog')->name('singleBlog');
            Route::post('/sendComment', 'Dashboard\CommentController@store');
            Route::post('/sendReply', 'Dashboard\ReplyController@store');

          /////////////////////////////////////// categories //////////////////////// 
        //   Route::get('/categories/{id}','Site\CategoryController@productsById')->name('categories');
          Route::get('/AllCategories', 'Site\CategoryController@index')->name('AllCategories');
          
            //////////////////////////blogs/////////////////////////////////////////////
            Route::get('/privacyPolicy', function () {
                return view('site.privacypolicy.privacypolicy');
            });

            /////////////////////////////products / /////////////////
            Route::get('product/{id}','Site\ProductController@getProduct')->name('products');

            //////////////////////////////////favouritelist //////////////////////////////////
            Route::post('favouritelist','Site\FavouritelistController@store')->name('favourite.store');
            Route::delete('faouritelist', 'Site\FavouritelistController@destroy')->name('favourite.destroy');
            Route::get('favouritelist/products','Site\FavouritelistController@index')->name('favouritelist.product.index');
            Route::get('count-fav-prod','Site\FavouritelistController@countFav');

            //////////////////////////////////Cart //////////////////////////////////////////////////////

            Route::get('add-to-cart','Site\CartController@addProduct');
            Route::get('cart','Site\CartController@viewCart')->name('cart');
            Route::get('delete-cart-item','Site\CartController@deleteProduct');
            Route::get('update-cart','Site\CartController@updateCart');
            Route::get('/confirm-personal-data', 'Dashboard\CartController@store');

            Route::post('payment', 'Site\CartController@payOrder')-> name('payment.payOrder');
            Route::get('callBack', function(){
                return 'success';
            });
            Route::get('error', function(){
                return 'error';
            });

            Route::get('load-cart-data','Site\CartController@cartCount');

            /////////////////////////////////////// coupon //////////////////////////////////////////
            Route::post('/coupon', 'Site\CouponController@store')->name('coupon.store');
            Route::delete('/coupon', 'Site\CouponController@destroy')->name('coupon.destroy');

            ///////////////////// profile ///////////////////////////////////
            Route::get('site/profile/{id}','Site\ProfileController@index')->name('profile.user');
            Route::get('site/profile/edit/{id}', 'Site\ProfileController@edit')->name('site.profile.user.edit');

            Route::post('site/profile/update/', 'Site\ProfileController@update')->name('site.profile.user.update');

            Route::get('/confirm-personal-address', 'Site\ShippingAddressController@store');

            //////////////////////////////////////////////////// service ///////////////////
            Route::get('/services' , 'Site\ServiceController@index')->name('site.services');

            ///////////////////////////////////////////// search //////////////////////////////
            Route::post('/search-result','Site\SearchController@get')->name('search');

            /////////////////////// LogOut ///////////////////////////////
            Route::get('/logout' , 'Auth\LoginController@logout')->name('logout');


        });

        Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function (){
            Route::get('/site', 'SiteController@home')->name('site');
        });
    },
);



