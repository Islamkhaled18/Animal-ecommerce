<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\About_us;
use App\Models\Gallaryphoto;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Opinion;
use App\Models\PrivacyPolicy;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Advertise;
use App\Models\Product;
use App\Models\Service;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //////////////////////////////////////// About_us ///////////////////////////////////////////////////////////////
        $about_us = About_us::first();
        view()->share('main_title_ar', $about_us->getTranslation('main_title', 'ar'));
        view()->share('main_title_en', $about_us->getTranslation('main_title', 'en'));
        view()->share('main_text_ar', $about_us->getTranslation('main_text', 'ar'));
        view()->share('main_text_en', $about_us->getTranslation('main_text', 'en'));
        view()->share('sub_title_ar', $about_us->getTranslation('sub_title', 'ar'));
        view()->share('sub_title_en', $about_us->getTranslation('sub_title', 'en'));
        view()->share('sub_text_ar', $about_us->getTranslation('sub_text', 'ar'));
        view()->share('sub_text_en', $about_us->getTranslation('sub_text', 'en'));
        view()->share('main_photo', asset($about_us->main_photo));
        view()->share('sub_photo', asset($about_us->sub_photo));
        view()->share('youtube', $about_us->youtube);
        /////////////////////////////////////// Gallaryphoto ////////////////////////////////////////////////////////////////
        $photos = Gallaryphoto::paginate(4);
        View::composer('*', function ($view) {
            $photos = Gallaryphoto::get(['photo']);

            $view->with([
                'photos' => $photos,
            ]);
        });
        /////////////////////////////////////////// Category ////////////////////////////////////////////////////////////
        View::composer(['*'], function ($view) {
            $categories = Category::where('parent_id', null)->select('id', 'category_name', 'slug')
                ->with(['childrens' => function ($q) {
                    $q->select('id', 'category_name', 'parent_id', 'slug');
                    $q->with(['childrens' => function ($qq) {
                        $qq->select('id', 'parent_id', 'category_name', 'slug');
                    }]);
                }])->get();
            $view->with('categories', $categories);
        });

        ////////////////////////////////////Contact us//////////////////////////////////////////////////////////
        $contactus = Contact::first();
        view()->share('address_ar', $contactus->getTranslation('address', 'ar'));
        view()->share('address_en', $contactus->getTranslation('address', 'en'));
        view()->share('phone_one', $contactus->phone_one);
        view()->share('phone_two', $contactus->phone_two);
        view()->share('email_one', $contactus->email_one);
        view()->share('email_two', $contactus->email_two);
        view()->share('map', $contactus->map);
        view()->share('contact_photo', asset($contactus->photo));

        //////////////////////////////////// Opinions //////////////////////////////////////////////////////////
        $opinions = Opinion::first();
        view()->share('customer_one_name', $opinions->customer_one_name);
        view()->share('customer_one_job', $opinions->customer_one_job);
        view()->share('customer_one_opinion', $opinions->customer_one_opinion);
        view()->share('customer_two_name', $opinions->customer_two_name);
        view()->share('customer_two_job', $opinions->customer_two_job);
        view()->share('customer_two_opinion', $opinions->customer_two_opinion);
        /////////////////////////////////////privacy policy ////////////////////////////////////////////////////

        $policy = PrivacyPolicy::first();
        view()->share('main_text_ar', $policy->getTranslation('main_text', 'ar'));
        view()->share('main_text_en', $policy->getTranslation('main_text', 'en'));
        view()->share('text_one_ar', $policy->getTranslation('text_one', 'ar'));
        view()->share('text_one_en', $policy->getTranslation('text_one', 'en'));
        view()->share('text_two_ar', $policy->getTranslation('text_two', 'ar'));
        view()->share('text_two_en', $policy->getTranslation('text_two', 'en'));
        view()->share('text_three_ar', $policy->getTranslation('text_three', 'ar'));
        view()->share('text_three_en', $policy->getTranslation('text_three', 'en'));
        view()->share('text_four_ar', $policy->getTranslation('text_four', 'ar'));
        view()->share('text_four_en', $policy->getTranslation('text_four', 'en'));
        view()->share('text_five_ar', $policy->getTranslation('text_five', 'ar'));
        view()->share('text_five_en', $policy->getTranslation('text_five', 'en'));
        view()->share('text_six_ar', $policy->getTranslation('text_six', 'ar'));
        view()->share('text_six_en', $policy->getTranslation('text_six', 'en'));
        view()->share('text_seven_ar', $policy->getTranslation('text_seven', 'ar'));
        view()->share('text_seven_en', $policy->getTranslation('text_seven', 'en'));
        view()->share('text_eight_ar', $policy->getTranslation('text_eight', 'ar'));
        view()->share('text_eight_en', $policy->getTranslation('text_eight', 'en'));

        ///////////////////////////////blogs/////////////////////////////////////////////////////

        View::composer(['*'], function ($view) {
            $blogs = Blog::all();
            $view->with('blogs', $blogs);
        });

        $blog = Blog::first();
        view()->share('blog_title_ar', $blog->getTranslation('blog_title', 'ar'));
        view()->share('blog_title_en', $blog->getTranslation('blog_title', 'en'));
        view()->share('short_description_ar', $blog->getTranslation('short_description', 'ar'));
        view()->share('short_description_en', $blog->getTranslation('short_description', 'en'));
        view()->share('long_description_ar', $blog->getTranslation('long_description', 'ar'));
        view()->share('long_description_en', $blog->getTranslation('long_description', 'en'));
        view()->share('blog_video', $blog->blog_video);
        view()->share('blog_photo', $blog->blog_photo);

        //////////////////////////////////////// comment  //////////////////////////////////////////////////

        $comment = Comment::first();
        view()->share('user_name', $comment->user_name);
        view()->share('user_comment', $comment->user_comment);
        ////////////////////////////////////// advertises /////////////////////////////////
        //////////////////////////////////////// comment  //////////////////////////////////////////////////

        $adv = Advertise::first();
        view()->share('adv_one', $adv->adv_one);
        view()->share('adv_two', $adv->adv_two);
        ////////////////////////////////////////// Service ///////////////////////////////////////////////////////////

    }
}
