<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>
        صوت الطبيعة | Nature Sound
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Amir Nageh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css Files -->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <!--<link href="css/style-en.css" rel="stylesheet">-->
    <link href="{{ asset('assets/front/css/style-res.css') }}" rel="stylesheet">
    <!-- lavicons -->
    <link rel="shortcut icon" href="{{ asset('assets/front/images/faveicon.png') }}">


</head>

<body>

    <div id="loading">
        <div class="loading">

        </div>
    </div>

    <div class="wrapper col-xs-12">
        <header class="main-head col-xs-12">
            <div class="top-head col-xs-12">
                <div class="container">
                    <div class="tr-extra">
                        <ul>
                            @auth
                                <li class="menu-item-has-children">
                                    <a href="{{ route('profile.user', auth()->user()->id) }}">
                                        <i class="la la-user"></i>
                                        {{ trans('front.my_account') }}
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ route('logout') }}">{{ trans('front.logout') }}</a>
                                        </li>
                                    </ul>

                                </li>

                            @endauth
                            <div class="btn-group mb-1">
                                <button type="button" class="btn btn-light btn-sm dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if (App::getLocale() == 'ar')
                                        {{ LaravelLocalization::getCurrentLocaleName() }}
                                        <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
                                    @else
                                        {{ LaravelLocalization::getCurrentLocaleName() }}
                                        <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                                    @endif
                                </button>
                                <div class="dropdown-menu">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="tl-extra">
                        <div class="t-social">
                            <a href="#">
                                <i class="la la-snapchat-ghost"></i>
                            </a>
                            <a href="#">
                                <i class="la la-youtube"></i>
                            </a>
                            <a href="#">
                                <i class="la la-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="la la-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="la la-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-head col-xs-12">
                <div class="container">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('assets/front/images/logo.png') }}" alt="">

                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li>
                                <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('/aboutus') }}">{{ trans('front.about_us') }}</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('AllCategories') }}">{{ trans('front.store') }}</a>
                                <ul class="sub-menu">

                                    @isset($categories)
                                        @foreach ($categories as $category)
                                            <li class="menu-item-has-children">
                                                <a
                                                    href="{{ route('AllCategories', ['category_id' => $category->id]) }}">{{ $category->category_name }}</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        @isset($category->childrens)
                                                            @foreach ($category->childrens as $children)
                                                                <a
                                                                    href="{{ route('AllCategories', ['category_id' => $category->id]) }}">{{ $children->category_name }}</a>
                                                                <ul class="sub-menu">
                                                                    @isset($children->childrens)
                                                                        @foreach ($children->childrens as $_children)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ route('AllCategories', ['category_id' => $category->id]) }}">{{ $_children->category_name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    @endisset
                                                                </ul>
                                                            @endforeach
                                                        @endisset
                                                    </li>
                                                </ul>

                                            </li>
                                        @endforeach
                                    @endisset

                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('site.services') }}">{{ trans('front.services') }}</a>

                            </li>
                            <li>
                                <a href="{{ url('/blogs') }}">{{ trans('dashboard.blogs') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('contactus') }}">{{ trans('front.contact_us') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bl-extra">
                        <a href="{{ route('search') }}" data-toggle="modal" data-target="#search_pop">
                            <i class="la la-search"></i>
                        </a>
                        <ul class="notification-menu" style="display: none;">
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <i class="la la-bell"></i>
                                    <span class="badgo">3</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <div class="menu-inner">
                                            <div class="menu-top">
                                                <h4>الاشعارات</h4>
                                                <a href="#">
                                                    <i class="la la-bell"></i>
                                                </a>
                                            </div>
                                            <div class="menu-content">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/front/images/ex1.png') }}"
                                                                alt="">

                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/front/images/ex2.png') }}"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/front/images/ex1.png') }}"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/front/images/ex2.png') }}"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{ asset('assets/front/images/ex1.png') }}"
                                                                alt="">
                                                            <div class="a_user">
                                                                <h3>منى فاروق</h3>
                                                                <span>علقت على اعلانك</span>
                                                                <p>المنتج كويس بس ياريت تفاصيل اكتر</p>
                                                                <b>منذ 5 دقائق</b>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a href="{{ route('favouritelist.product.index') }}">
                            <b class="badgo countFavProd">0</b>
                            <i class="la la-heart"></i>
                        </a>
                        <a href="{{ route('cart') }}">
                            <b class="badgo cart-count">0</b>
                            <i class="la la-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <header class="mob-head col-xs-12">
            <div class="m-top col-xs-12">


                <div class="container">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('assets/front/images/logo.png') }}" alt="">
                        </a>
                    </div>


                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <input type="search" class="form-control" placeholder="اكتب بحثك هنا">
                        <button type="submit">
                            <i class="la la-search"></i>
                        </button>
                    </form>

                </div>

            </div>
            <div class="m-mid col-xs-12">
                <a href="javascript:void(0)" class="op-menu">
                    <i class="la la-bars"></i>
                    اكتشف
                </a>
                <a href="javascript:void(0)">
                    <i class="la la-heart"></i>
                    المفضلة
                </a>
                <a href="javascript:void(0)" style="display: none;">
                    <i class="la la-bell"></i>
                    الاشعارات
                    <span class="badgo">3</span>
                </a>
                <a href="javascript:void(0)" class="op-cart">
                    <i class="la la-shopping-cart"></i>
                    السلة
                </a>
            </div>
            <div class="main-sticky">
                <button type="button" class="off-menu">
                    <i class="la la-close"></i>
                </button>
                <ul class="nav-tabs">
                    <li class="active">
                        <a href="#" data-toggle="tab" data-target="#t111">
                            <i class="la la-bars"></i>
                            القائمة
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tab" data-target="#t222">
                            <i class="la la-user"></i>
                            حسابي
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tab" data-target="#t333">
                            <i class="la la-cog"></i>
                            اعدادات
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="t111">
                        <ul>
                            <li>
                                <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('/aboutus') }}">{{ trans('front.about_us') }}</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">{{ trans('front.store') }}</a>
                                <ul class="sub-menu">
                                    @foreach ($categories as $category)
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0)">{{ $category->category_name }}</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    @foreach ($category->childrens as $children)
                                                        <a href="#">{{ $children->category_name }}</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($children->childrens as $_children)
                                                                <li>
                                                                    <a href="#">{{ $_children->category_name }}</a>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    @endforeach

                                                </li>
                                            </ul>
                                        </li>

                                    @endforeach

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">خدماتنا</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">خدمة العيادة</a>
                                    </li>
                                    <li>
                                        <a href="#">خدمة الفندقة</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">المدونة</a>
                            </li>
                            <li>
                                <a href="{{ url('contactus') }}">{{ trans('front.contact_us') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="t222">
                        <ul>
                            <li>
                                <a href="#">حسابي</a>
                            </li>
                            <li>
                                <a href="#">تسجيل خروج</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="t333">
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">
                                    <i class="la la-globe"></i>
                                    اللغة : عربي
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">عربي</a>
                                    </li>
                                    <li>
                                        <a href="#">english</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')


        <footer class="main-footer col-xs-12">
            <div class="footer-top col-xs-12">
                <div class="newsletter col-md-4 col-xs-12" style="background-image: url(images/footer-bg.png)">
                    <div class="nw-head">
                        <i class="las la-envelope-open-text"></i>
                        <div>
                            <h4>{{ trans('front.inbox_list') }}</h4>
                            <p>{{ trans('front.join_us_to_know_updates') }}</p>
                        </div>
                    </div>

                    <form action="{{ route('followers.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input name="follower_email" type="email" class="form-control"
                                placeholder="{{ trans('dashboard.follower_email') }}">
                            <button type="submit">
                                <i class="la la-arrow-left"></i>
                            </button>
                        </div>
                    </form>


                </div>
                <div class="foot-item col-md-8 col-xs-12">
                    <div class="f-item col-md-6 col-xs-12">
                        <h4>اهم الروابط</h4>
                        <ul>
                            <li>
                                <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('/aboutus') }}">{{ trans('front.about_us') }}</a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('AllCategories', ['category_id' => $category->id]) }}">{{ trans('front.store') }}</a>
                            </li>

                            <li>
                                <a href="{{ url('/blogs') }}">{{ trans('dashboard.blogs') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('contactus') }}">{{ trans('front.contact_us') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('/privacyPolicy') }}">{{ trans('front.privacy_policy') }}</a>
                            </li>
                        </ul>
                        <div class="social-s">
                            <a href="#">
                                <i class="la la-snapchat-ghost"></i>
                            </a>
                            <a href="#">
                                <i class="la la-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="la la-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="la la-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="la la-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <div class="f-item col-md-6 col-xs-12">
                        <h4>{{ trans('front.contact_us') }}</h4>
                        <ul class="info-s">
                            <li>
                                @if (app()->getLocale() == 'ar')
                                    {{ $address_ar }}
                                @else
                                    {{ $address_en }}
                                @endif
                            </li>
                            <li>{{ $phone_one }}</li>
                            <li>{{ $email_one }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom col-xs-12">
                <div class="container">
                    <p>جميع الحقوق محفوظة لموقع <span>صوت الطبيعة</span></p>
                    <img src="{{ asset('assets/front/images/payment-method.png') }}" alt="">

                    <a href="#">
                        <img src="{{ asset('assets/front/images/dev.svg') }}" alt="">

                    </a>
                </div>
            </div>
            <div class="toTop">
                <i class="la la-angle-up"></i>
            </div>
        </footer>
        <div class="modal fade" id="search_pop">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="la la-close"></i>
                    </button>
                    <div class="modal-body">

                        <form action="{{ route('search') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="اكتب بحثك هنا">
                                <button type="submit">
                                    <i class="la la-search"></i>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        <div class="modal fade" id="login_pop">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header col-xs-12">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="la la-close"></i>
                        </button>
                        <h4 class="modal-title">تسجيل الدخول</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <div class="form-wrapo col-xs-12">
                            <form action="{{ route('login') }}" method="post">
                                <div class="form-group col-xs-12">
                                    <h4>اهلا بعودتك</h4>
                                    <input type="text" name="mobile" class="form-control" placeholder="رقم الهاتف">
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="كلمة المرور">
                                </div>
                                <div class="form-group col-xs-12">
                                    <div>
                                        <label>
                                            <input type="checkbox">
                                            <span>تذكرنى</span>
                                        </label>
                                        <a href="#" data-toggle="modal" data-target="#forget_pop"
                                            data-dismiss="modal">هل فقدت كلمة المرور؟</a>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 has-btns">
                                    <button type="submit" class="btn">دخول</button>
                                    <button type="reset" class="btn btn-border" data-dismiss="modal">الغاء</button>
                                </div>
                                <div class="form-group col-xs-12">
                                    <p>
                                        ليس لديك حساب ؟
                                        <a href="{{ route('register') }}" data-toggle="modal"
                                            data-target="#register_pop" data-dismiss="modal">تسجيل جديد</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        <div class="modal fade" id="register_pop">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header col-xs-12">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="la la-close"></i>
                        </button>
                        <h4 class="modal-title">تسجيل جديد</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <div class="form-wrapo col-xs-12">
                            <form action="{{ route('register') }}" method="post">

                                @csrf

                                <div class="form-group col-xs-12">
                                    <h4>اهلا بك</h4>
                                    <input type="text" class="form-control" name="mobile" placeholder="رقم الهاتف">
                                    @error('mobile')
                                        <span> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="كلمة المرور" id="password-field">
                                    <button type="button" class="show-pass" toggle="#password-field">
                                        <i class="la la-eye-slash"></i>
                                    </button>
                                    @error('password')
                                        <span> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="كلمة المرور مرة اخرى" id="password-field1">
                                    <button type="button" class="show-pass" toggle="#password-field1">
                                        <i class="la la-eye-slash"></i>
                                    </button>
                                </div>
                                <div class="form-group col-xs-12 has-btns">
                                    <button type="submit" class="btn btn-reg">تسجيل</button>
                                </div>
                                <div class="form-group col-xs-12">
                                    <p>
                                        لدى حساب بالفعل ؟
                                        <a href="#" data-toggle="modal" data-target="#login_pop"
                                            data-dismiss="modal">تسجيل دخول</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->


        <div class="modal fade" id="forget_pop">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header col-xs-12">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="la la-close"></i>
                        </button>
                        <h4 class="modal-title">نسيت كلمة المرور</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <div class="form-wrapo col-xs-12">
                            <form action="#" method="get">
                                <h5>اكتب رقم هاتفك المسجل لدينا وستصلك رسالة
                                    بها كود مكون من أربعة ارقام</h5>
                                <div class="form-group col-xs-12">
                                    <input type="text" class="form-control" placeholder="رقم الهاتف">
                                </div>
                                <div class="form-group col-xs-12 has-btns">
                                    <button type="submit" class="btn btn-reg">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        <div class="modal fade" id="verify_pop">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header col-xs-12">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="la la-close"></i>
                        </button>
                        <h4 class="modal-title">كود التحقق</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <div class="form-wrapo col-xs-12">
                            <form action="#" method="get">
                                <h5>ادخل الكود المكون من أربعة ارقام الذى تم ارسالة
                                    الى هاتفك</h5>
                                <div class="form-group col-xs-12">
                                    <input type="text" class="form-control" placeholder="كود التحقق">
                                </div>
                                <div class="form-group col-xs-12 has-btns">
                                    <button type="submit" class="btn btn-reg">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        <div class="modal fade" id="editPass_pop">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header col-xs-12">
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="la la-close"></i>
                        </button>
                        <h4 class="modal-title">تعديل كلمة السر</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <div class="form-wrapo col-xs-12">
                            <form action="#" method="get">
                                <div class="form-group col-xs-12">
                                    <input type="password" class="form-control" placeholder="تعديل كلمة السر">
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="password" class="form-control"
                                        placeholder="الرقم السرى الجديد مرة اخرى">
                                </div>
                                <div class="form-group col-xs-12 has-btns">
                                    <button type="submit" class="btn btn-reg">حفظ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->
    </div>

    <!-- Javascript Files -->
    <script src="{{ asset('assets/front/js/jquery-2.2.2.min.js') }}"></script>

    <script src="{{ asset('assets/front/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/front/js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/front/js/aos.js') }}"></script>

    <script src="{{ asset('assets/front/js/script.js') }}"></script>


</body>

</html>
