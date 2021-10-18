<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>صوت الطبيعة | Nature Sound</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Amir Nageh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Files -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
<!--    <link href="css/style-en.css" rel="stylesheet">-->
    <link href="{{asset('assets/front/css/style-res.css')}}" rel="stylesheet">
    

    <!-- lavicons -->
    <link rel="shortcut icon" href="{{asset('assets/front/images/faveicon.png')}}">


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
                            @guest
                            <li class="menu-item-has-children">
                                <a href="javascript;">
                                    <i class="la la-user"></i>
                                    {{ trans('dashboard.login') }} / {{ trans('dashboard.register') }}
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#login_pop">{{ trans('dashboard.login') }}</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#register_pop">{{ trans('dashboard.register') }}</a>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                           
                            <li class="menu-item-has-children">
                                <a href="javascript;">
                                    <i class="la la-globe"></i>
                                    عربي
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">عربي</a>
                                    </li>
                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                </ul>
                            </li>
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
                            <img src="{{asset('assets/front/images/logo.png')}}" alt="">
                            
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li>
                                <a href="#">الرئيسية</a>
                            </li>
                            <li>
                                <a href="#">من نحن</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">{{ trans('front.store') }}</a>
                                {{-- <ul class="sub-menu">
                                    @foreach ($categories as $category )
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">{{$category->category_name}}</a>
                                        <ul class="sub-menu">
                                            <li>
                                                @foreach ( $category ->childrens as $children )
                                                <a href="#">{{$childern ->name}}</a>
                                                <ul class="sub-menu">
                                                    @foreach($children ->childrens  as $_children)
                                                    <li>
                                                        <a href="#">{{$_children ->name}}</a>
                                                    </li>
                                                    @endforeach
                                                   
                                                </ul>
                                                @endforeach
                                                
                                            </li>
                                        </ul>
                                    </li>
                                        
                                    @endforeach
                                    
                                </ul> --}}
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
                                <a href="#">تواصل معنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bl-extra">
                        <a href="#" data-toggle="modal" data-target="#search_pop">
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
                                                        <img src="{{asset('assets/front/images/ex1.png')}}" alt="">
                                                        
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
                                                        <img src="{{asset('assets/front/images/ex2.png')}}" alt="">
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
                                                        <img src="{{asset('assets/front/images/ex1.png')}}" alt="">
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
                                                        <img src="{{asset('assets/front/images/ex2.png')}}" alt="">
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
                                                        <img src="{{asset('assets/front/images/ex1.png')}}" alt="">
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
                        <a href="{{route('favouritelist.product.index')}}">
                            <b class="badgo countFavProd">0</b>
                            <i class="la la-heart"></i>
                        </a>
                        <a href="{{route('cart')}}">
                            <b class="badgo">0</b>
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
                            <img src="{{asset('assets/front/images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <form action="#" method="get">
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
                                <a href="#">الرئيسية</a>
                            </li>
                            <li>
                                <a href="#">من نحن</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">المتجر</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">الكلاب</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">الاكسسورات</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0)">الطعام</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="#">طعام جاف</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">طعام رطب</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">التدريب والتنظيف</a>
                                            </li>
                                            <li>
                                                <a href="#">الصحة والجمال</a>
                                            </li>
                                            <li>
                                                <a href="#">مستلزمات الطعام</a>
                                            </li>
                                            <li>
                                                <a href="#">مكافأت ومكملات</a>
                                            </li>
                                            <li>
                                                <a href="#">الالعاب</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">القطط</a>
                                    </li>
                                    <li>
                                        <a href="#">الحيوانات الصغيرة</a>
                                    </li>
                                    <li>
                                        <a href="#">الطيور</a>
                                    </li>
                                    <li>
                                        <a href="#">الزواحف</a>
                                    </li>
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
                                <a href="#">تواصل معنا</a>
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
        <main class="main-content col-xs-12">
            <div class="heros col-xs-12">
                <div class="hero-slider owl-carousel">
                    <div class="item">
                        <img src="{{asset('assets/front/images/hero-section/hero.png')}}" alt="">
                       


                        <div class="h-cap">
                            <p>متجر صوت الطبيعة والحيوانات الاليفة</p>
                            <h3>حيوانك الاليف صديقنا</h3>
                            <p>كل ما يحتاجة واكثر</p>
                            <a href="#" class="btn">اكتشف المزيد</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/hero-section/hero.png')}}" alt="">
                        <div class="h-cap">
                            <p>متجر صوت الطبيعة والحيوانات الاليفة</p>
                            <h3>حيوانك الاليف صديقنا</h3>
                            <p>كل ما يحتاجة واكثر</p>
                            <a href="#" class="btn">اكتشف المزيد</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('assets/front/images/hero-section/hero.png')}}" alt="">
                        <div class="h-cap">
                            <p>متجر صوت الطبيعة والحيوانات الاليفة</p>
                            <h3>حيوانك الاليف صديقنا</h3>
                            <p>كل ما يحتاجة واكثر</p>
                            <a href="#" class="btn">اكتشف المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-widgets col-xs-12">
                <div class="container">
                    <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <a href="#">
                            <img src="{{asset('assets/front/images/hero-section/1.png')}}" alt="">
                            
                            <h4>زواحف</h4>
                        </a>
                    </div>
                    <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <a href="#">
                            <img src="{{asset('assets/front/images/hero-section/2.png')}}" alt="">
                            
                            <h4>الاسماك</h4>
                        </a>
                    </div>
                    <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <a href="#">
                            <img src="{{asset('assets/front/images/hero-section/3.png')}}" alt="">
                            
                            <h4>الارانب</h4>
                        </a>
                    </div>
                    <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <a href="#">
                            <img src="{{asset('assets/front/images/hero-section/4.png')}}" alt="">
                            
                            <h4>الطيور</h4>
                        </a>
                    </div>
                    <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <a href="#">
                            <img src="{{asset('assets/front/images/hero-section/5.png')}}" alt="">
                            <h4>القطط</h4>
                        </a>
                    </div>
                    <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                        <a href="#">
                            <img src="{{asset('assets/front/images/hero-section/6.png')}}" alt="">
                            <h4>الكلاب</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="products col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>الأفضل مبيعا</span>
                        <h3>افضل المنتجات الحصرية</h3>
                    </div>
                    <div class="g-body col-xs-12"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="pr-slider owl-carousel">
                            <div class="item">
                                <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <img src="{{asset('assets/front/images/products/1.png')}}" alt="">
                                            
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <img src="{{asset('assets/front/images/products/3.png')}}" alt="">
                                            
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <img src="{{asset('assets/front/images/products/1.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <img src="{{asset('assets/front/images/products/2.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <img src="{{asset('assets/front/images/products/4.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services col-xs-12" style="background-image: url(images/services/bg.png)">
                <div class="container">
                    <div class="g-head col-xs-12"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>خدماتنا</span>
                        <h3>افضل الخدمات على ايدى متخصصين </h3>
                    </div>
                    <div class="g-body col-xs-12">
                        <div class="block col-md-6 col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="inner">
                                <img src="{{asset('assets/front/images/services/1.png')}}" alt="">
                                
                                <div class="i-cap">
                                    <span>عيادات متطورة</span>
                                    <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                                    <a href="{{url('/services')}}" class="btn">احجز الان</a>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-6 col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="inner">
                                <img src="{{asset('assets/front/images/services/2.png')}}" alt="">
                                <div class="i-cap">
                                    <span>خدمة الفندقة</span>
                                    <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                                    <a href="{{url('/services')}}" class="btn">احجز الان</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="best-sels col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>الأعلى تقييم</span>
                        <h3>اعلى المنتجات</h3>
                    </div>
                    <div class="g-body col-xs-12">
                        <ul class="nav-tabs col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <li class="active">
                                <a href="#" data-toggle="tab" data-target="#t1">منتجات مميزة</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tab" data-target="#t2">وصل حديثا</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tab" data-target="#t3">الأكثر مبيعا</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="tab-pane fade active in" id="t1">
                                <div class="row">
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/1.png')}}" alt="">
                                            
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/2.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/3.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/4.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="g-more">
                                    <a href="#" class="btn"> المزيد</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t2">
                                <div class="row">
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/1.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/2.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/3.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/4.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="g-more">
                                    <a href="#" class="btn"> المزيد</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t3">
                                <div class="row">
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/1.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/2.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/3.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                                    <i class="las la-heart"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <span>20% خصم</span>
                                            <img src="{{asset('assets/front/images/products/4.png')}}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">150 ريال</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="g-more">
                                    <a href="#" class="btn"> المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ex-prods col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="block col-md-6 col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="inner">
                                <img src="{{asset('assets/front/images/ex1.png')}}" alt="">
                                
                                <div class="ex-cap">
                                    <h3>منتجات <br>الزواحف</h3>
                                    <p>%احصل على خصم 30</p>
                                    <a href="#" class="btn">تسوق الان</a>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-6 col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="inner">
                                <img src="{{asset('assets/front/images/ex2.png')}}" alt="">
                                <div class="ex-cap">
                                    <h3>لوازم <br>الطيور</h3>
                                    <p>%احصل على خصم 30</p>
                                    <a href="#" class="btn">تسوق الان</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="acces col-xs-12" style="background-image: url(images/services/bg.png)">
                <div class="container">
                    <span   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">%خصم 15</span>
                    <h3   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">اكسسورات حيوانك الاليف عندنا</h3>
                    <p   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                    <a href="#" class="btn"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">تسوق الان</a>
                </div>
            </div>
            <div class="blogs col-xs-12">
                <div class="g-head col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="container">
                            <span>المدونة</span>
                            <h3>كل ما تريد معرفتة عن حيوانك الاليف
                                <a href="#">مشاهدة الكل</a>
                            </h3>
                        </div>
                    </div>
                <div class="g-body col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="blog-slider owl-carousel">
                            <div class="item">
                                <div class="blog-card">
                                    <div class="b-img">
                                        <img src="{{asset('assets/front/images/blog.png')}}" alt="">
                                        
                                        <a href="#"></a>
                                    </div>
                                    <div class="b-data">
                                        <a href="#" class="title">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو </a>
                                        <p> هذا النص يمكن أن يتم تركيبه على أي تصميم
                                            دون مشكلة فلن يبدو وكأنه نص منسوخ، غير
                                            منظم، غير منسق، أو حتى غير مفهوم. لأنه
                                            .مازال نصاً بديلاً ومؤقتاً</p>
                                        <p>
                                            <a href="#">
                                                التفاصيل
                                                <i class="la la-angle-left"></i>
                                            </a>
                                            <b>2020-6-20</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-card">
                                    <div class="b-img">
                                        <img src="{{asset('assets/front/images/blog.png')}}" alt="">
                                        
                                        <a href="#"></a>
                                    </div>
                                    <div class="b-data">
                                        <a href="#" class="title">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو </a>
                                        <p> هذا النص يمكن أن يتم تركيبه على أي تصميم
                                            دون مشكلة فلن يبدو وكأنه نص منسوخ، غير
                                            منظم، غير منسق، أو حتى غير مفهوم. لأنه
                                            .مازال نصاً بديلاً ومؤقتاً</p>
                                        <p>
                                            <a href="#">
                                                التفاصيل
                                                <i class="la la-angle-left"></i>
                                            </a>
                                            <b>2020-6-20</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-card">
                                    <div class="b-img">
                                        <img src="{{asset('assets/front/images/blog.png')}}" alt="">
                                        <a href="#"></a>
                                    </div>
                                    <div class="b-data">
                                        <a href="#" class="title">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو </a>
                                        <p> هذا النص يمكن أن يتم تركيبه على أي تصميم
                                            دون مشكلة فلن يبدو وكأنه نص منسوخ، غير
                                            منظم، غير منسق، أو حتى غير مفهوم. لأنه
                                            .مازال نصاً بديلاً ومؤقتاً</p>
                                        <p>
                                            <a href="#">
                                                التفاصيل
                                                <i class="la la-angle-left"></i>
                                            </a>
                                            <b>2020-6-20</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-card">
                                    <div class="b-img">
                                        <img src="{{asset('assets/front/images/blog.png')}}" alt="">
                                        <a href="#"></a>
                                    </div>
                                    <div class="b-data">
                                        <a href="#" class="title">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو </a>
                                        <p> هذا النص يمكن أن يتم تركيبه على أي تصميم
                                            دون مشكلة فلن يبدو وكأنه نص منسوخ، غير
                                            منظم، غير منسق، أو حتى غير مفهوم. لأنه
                                            .مازال نصاً بديلاً ومؤقتاً</p>
                                        <p>
                                            <a href="#">
                                                التفاصيل
                                                <i class="la la-angle-left"></i>
                                            </a>
                                            <b>2020-6-20</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-card">
                                    <div class="b-img">
                                        <img src="{{asset('assets/front/images/blog.png')}}" alt="">
                                        <a href="#"></a>
                                    </div>
                                    <div class="b-data">
                                        <a href="#" class="title">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو </a>
                                        <p> هذا النص يمكن أن يتم تركيبه على أي تصميم
                                            دون مشكلة فلن يبدو وكأنه نص منسوخ، غير
                                            منظم، غير منسق، أو حتى غير مفهوم. لأنه
                                            .مازال نصاً بديلاً ومؤقتاً</p>
                                        <p>
                                            <a href="#">
                                                التفاصيل
                                                <i class="la la-angle-left"></i>
                                            </a>
                                            <b>2020-6-20</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="testominals col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>اراء العملاء</span>
                        <h3>كل ما قيل عنا</h3>
                    </div>
                    <div class="g-body col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="teso-slider owl-carousel">
                            <div class="item">
                                <p>ذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                </p>
                                <h4>محمد ابراهيم</h4>
                                <span>مصمم جرافيك</span>
                            </div>
                            <div class="item">
                                <p>ذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                </p>
                                <h4>محمد ابراهيم</h4>
                                <span>مصمم جرافيك</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partners col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="container">
                    <div class="part-slider owl-carousel">
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                            
                        </div>
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                        </div>
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                        </div>
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                        </div>
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                        </div>
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                        </div>
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                        </div>
                        <div class="itm">
                            <img src="{{asset('assets/front/images/1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
                            <input name="follower_email" type="email" class="form-control" placeholder="{{trans('dashboard.follower_email')}}">
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
                                <a href="#">الرئيسية</a>
                            </li>
                            <li>
                                <a href="#">من نحن</a>
                            </li>
                            <li>
                                <a href="#">المتجر</a>
                            </li>
                            <li>
                                <a href="#">المتجر</a>
                            </li>
                            <li>
                                <a href="{{url('/blogs')}}">{{ trans('dashboard.blogs') }}</a>

                            </li>
                            <li>
                                <a href="#">تواصل معنا</a>
                            </li>
                            <li>
                                <a href="#">سياسة الخصوصية</a>
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
                        <h4>تواصل معنا</h4>
                        <ul class="info-s">
                            <li> -المملكة العربية السعودية - الرياض - اسم الشارع
                                رقم البناية</li>
                            <li>هاتف رقم : +961454684521</li>
                            <li>company@gmail.com : بريد الكترونى</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom col-xs-12">
                <div class="container">
                    <p>جميع الحقوق محفوظة لموقع <span>صوت الطبيعة</span></p>
                    <img src="{{asset('assets/front/images/payment-method.png')}}" alt="">
                    
                    <a href="#">
                        <img src="{{asset('assets/front/images/dev.svg')}}" alt="">
                        
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
                        <form action="#" method="get">
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
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group col-xs-12">
                                    <h4>اهلا بعودتك</h4>
                                    <input type="text" name="mobile" class="form-control" placeholder="رقم الهاتف">
                                    @error('mobile')
                                        <span> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                                    @error('password')
                                        <span> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-xs-12">
                                    <div>
                                        <label>
                                            <input type="checkbox">
                                            <span>تذكرنى</span>
                                        </label>
                                        <a href="#" data-toggle="modal" data-target="#forget_pop" data-dismiss="modal">هل فقدت كلمة المرور؟</a>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 has-btns">
                                    <button type="submit" class="btn">دخول</button>
                                    <button type="reset" class="btn btn-border"  data-dismiss="modal">الغاء</button>
                                </div>
                                <div class="form-group col-xs-12">
                                    <p>
                                        ليس لديك حساب ؟ 
                                        <a href="{{route('register')}}" data-toggle="modal" data-target="#register_pop" data-dismiss="modal">تسجيل جديد</a>
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
                            <form action="{{route('register')}}" method="post">

                                @csrf
                             
                                <div class="form-group col-xs-12">
                                    <h4>اهلا بك</h4>
                                    <input type="text" class="form-control" name="mobile" placeholder="رقم الهاتف">
                                    @error('mobile')
                                        <span> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="password" placeholder="كلمة المرور" id="password-field">
                                    <button type="button" class="show-pass" toggle="#password-field">
                                        <i class="la la-eye-slash"></i>
                                    </button> 
                                    @error('password')
                                        <span> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="كلمة المرور مرة اخرى" id="password-field1">
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
                                        <a href="#" data-toggle="modal" data-target="#login_pop" data-dismiss="modal">تسجيل دخول</a>
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
                                    <input type="password" class="form-control" placeholder="الرقم السرى الجديد مرة اخرى">
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
    <script src="{{asset('assets/front/js/jquery-2.2.2.min.js')}}"></script>
    
    <script src="{{asset('assets/front/js/jquery-ui.js')}}"></script>
    
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('assets/front/js/jquery.fancybox.min.js')}}"></script>
    
    <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
    
    <script src="{{asset('assets/front/js/aos.js')}}"></script>

    <script src="{{asset('assets/front/js/script.js')}}"></script>
    

</body>

</html>