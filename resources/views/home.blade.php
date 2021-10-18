@extends('layouts.app')

@section('content')
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
                                <a href="{{route('site.services')}}" >احجز الان</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-6 col-xs-12"   data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="inner">
                            <img src="{{asset('assets/front/images/services/2.png')}}" alt="">
                            <div class="i-cap">
                                <span>خدمة الفندقة</span>
                                <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                                <a href="{{route('site.services')}}">احجز الان</a>
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
@endsection
