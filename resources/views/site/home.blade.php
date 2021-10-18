@extends('layouts.app')

@section('content')
    <main class="main-content col-xs-12">
        <div class="heros col-xs-12">
            <div class="hero-slider owl-carousel">
                <div class="item">
                    <img src="{{ asset('assets/front/images/hero-section/hero.png') }}" alt="">



                    <div class="h-cap">
                        <p>{{ trans('front.store_of_nature_sound') }}</p>
                        <h3>{{ trans('front.your_animal_is_our_friend') }}</h3>
                        <p>{{ trans('front.all_you_need_and_more') }}</p>
                        <a href="{{ url('/aboutus') }}" class="btn">{{ trans('front.more') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-widgets col-xs-12">
            <div class="container">
                <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <a href="{{route('AllCategories')}}">
                        <img src="{{ asset('assets/front/images/hero-section/1.png') }}" alt="">

                        <h4>{{ trans('front.reptiles') }}</h4>
                    </a>
                </div>
                <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="{{route('AllCategories')}}">
                        <img src="{{ asset('assets/front/images/hero-section/2.png') }}" alt="">

                        <h4>{{ trans('front.fish') }}</h4>
                    </a>
                </div>
                <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400">
                    <a href="{{route('AllCategories')}}">
                        <img src="{{ asset('assets/front/images/hero-section/3.png') }}" alt="">

                        <h4>{{ trans('front.rabbits') }}</h4>
                    </a>
                </div>
                <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="500">
                    <a href="{{route('AllCategories')}}">
                        <img src="{{ asset('assets/front/images/hero-section/4.png') }}" alt="">

                        <h4>{{ trans('front.birds') }}</h4>
                    </a>
                </div>
                <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="600">
                    <a href="{{route('AllCategories')}}">
                        <img src="{{ asset('assets/front/images/hero-section/5.png') }}" alt="">
                        <h4>{{ trans('front.cats') }}</h4>
                    </a>
                </div>
                <div class="block col-md-2 col-sm-4 col-xs-6" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="700">
                    <a href="{{route('AllCategories')}}">
                        <img src="{{ asset('assets/front/images/hero-section/6.png') }}" alt="">
                        <h4>{{ trans('front.dogs') }}</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="products col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span>{{ trans('front.best_sellings') }}</span>
                    <h3>{{ trans('front.best_products') }}</h3>
                </div>
                <div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="pr-slider owl-carousel">
                        @foreach ($best_sellings as $best)

                            <div class="item">
                                <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            {{-- <div class="p-actions">
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
                                            </div> --}}
                                            <img src="{{ $best->images[0]->photo }}" alt="">

                                        </div>
                                        <div class="p-data">
                                            <a href="{{ route('products', $best->id) }}">{{ $best->product_name }}</a>
                                            <p>
                                                <span>{{ $best->special_price }}</span>
                                                <span class="old-price">{{ $best->price }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <div class="services col-xs-12" style="background-image: url({{asset('uploads/services/bg.png')}})">

            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span>{{ trans('front.our_services') }}</span>
                    <h3>{{ trans('front.best_of_service_by_specialists') }} </h3>
                </div>
                <div class="g-body col-xs-12">
                    <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="inner">
                            <img src="{{ asset('assets/front/images/services/1.png') }}" alt="">

                            <div class="i-cap">
                                <span>{{ trans('front.advanced_clinics') }}</span>
                                <p>
                                    {{ trans('front.clinic_des') }}
                                </p>
                                <a href="{{ route('site.services') }}"
                                    class="btn">{{ trans('front.book') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="inner">
                            <img src="{{ asset('assets/front/images/services/2.png') }}" alt="">
                            <div class="i-cap">
                                <span>{{ trans('front.hotel_service') }}</span>
                                <p>{{ trans('front.hotel_des') }}</p>
                                <a href="{{ route('site.services') }}"
                                    class="btn">{{ trans('front.book') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best-sels col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span>{{ trans('front.best_rates') }}</span>
                    
                </div>
                <div class="g-body col-xs-12">
                    <ul class="nav-tabs col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        {{-- <li class="active">
                            <a href="#" data-toggle="tab" data-target="#t1">منتجات مميزة</a>
                        </li> --}}
                        <li class="active">
                            <a href="#" data-toggle="tab" data-target="#t2">{{ trans('front.new_arrivals') }}</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tab" data-target="#t3">{{ trans('front.best_sellings') }}</a>
                        </li>

                    </ul>
                    <div class="tab-content col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        {{-- <div class="tab-pane fade active in" id="t1">
                            <div class="row">
                                <div class="block col-md-3 col-sm-6 col-xs-12">
                                    <div class="product-card">
                                        <div class="p-inner">
                                            <div class="p-img">
                                                <div class="p-actions">
                                                    <a href="#" data-tool="tooltip" title="اضف للسلة"
                                                        data-placement="right">
                                                        <i class="las la-shopping-bag"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمفضلة"
                                                        data-placement="right">
                                                        <i class="las la-heart"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                        <i class="las la-search"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمقارنة"
                                                        data-placement="right">
                                                        <i class="las la-sync"></i>
                                                    </a>
                                                </div>
                                                <span>20% خصم</span>
                                                <img src="{{ asset('assets/front/images/products/1.png') }}" alt="">

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
                                                    <a href="#" data-tool="tooltip" title="اضف للسلة"
                                                        data-placement="right">
                                                        <i class="las la-shopping-bag"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمفضلة"
                                                        data-placement="right">
                                                        <i class="las la-heart"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                        <i class="las la-search"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمقارنة"
                                                        data-placement="right">
                                                        <i class="las la-sync"></i>
                                                    </a>
                                                </div>
                                                <span>20% خصم</span>
                                                <img src="{{ asset('assets/front/images/products/2.png') }}" alt="">
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
                                                    <a href="#" data-tool="tooltip" title="اضف للسلة"
                                                        data-placement="right">
                                                        <i class="las la-shopping-bag"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمفضلة"
                                                        data-placement="right">
                                                        <i class="las la-heart"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                        <i class="las la-search"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمقارنة"
                                                        data-placement="right">
                                                        <i class="las la-sync"></i>
                                                    </a>
                                                </div>
                                                <span>20% خصم</span>
                                                <img src="{{ asset('assets/front/images/products/3.png') }}" alt="">
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
                                                    <a href="#" data-tool="tooltip" title="اضف للسلة"
                                                        data-placement="right">
                                                        <i class="las la-shopping-bag"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمفضلة"
                                                        data-placement="right">
                                                        <i class="las la-heart"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                        <i class="las la-search"></i>
                                                    </a>
                                                    <a href="#" data-tool="tooltip" title="اضف للمقارنة"
                                                        data-placement="right">
                                                        <i class="las la-sync"></i>
                                                    </a>
                                                </div>
                                                <span>20% خصم</span>
                                                <img src="{{ asset('assets/front/images/products/4.png') }}" alt="">
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
                        </div> --}}

                        <div class="tab-pane fade" id="t2">
                            <div class="row">
                                @foreach ($pros as $pro )
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                            <div class="p-inner">
                                                <div class="p-img">
                                                    {{-- <div class="p-actions">
                                                        <a href="#" data-tool="tooltip" title="اضف للسلة"
                                                            data-placement="right">
                                                            <i class="las la-shopping-bag"></i>
                                                        </a>
                                                        <a href="#" data-tool="tooltip" title="اضف للمفضلة"
                                                            data-placement="right">
                                                            <i class="las la-heart"></i>
                                                        </a>
                                                        <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                            <i class="las la-search"></i>
                                                        </a>
                                                        <a href="#" data-tool="tooltip" title="اضف للمقارنة"
                                                            data-placement="right">
                                                            <i class="las la-sync"></i>
                                                        </a>
                                                    </div> --}}
                                                    <span>{{ trans('dashboard.discount') }}</span>
                                                    <img src="{{ $pro->images[0]->photo }}" alt="">
                                                </div>
                                                <div class="p-data">
                                                    <a href="{{ route('products', $pro->id) }}">{{$pro->product_name}}</a>
                                                    <p>
                                                        <span>{{$pro->special_price}}</span>
                                                        <span class="old-price">{{$pro->price}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                @endforeach
                                
                                
                            </div>
                            
                        </div>


                        <div class="tab-pane fade" id="t3">
                            <div class="row">
                                @foreach ($best_sellings as $best)
                                    <div class="block col-md-3 col-sm-6 col-xs-12">
                                        <div class="product-card">
                                            <div class="p-inner">
                                                <div class="p-img">
                                                    {{-- <div class="p-actions">
                                                        <a href="#" data-tool="tooltip" title="اضف للسلة"
                                                            data-placement="right">
                                                            <i class="las la-shopping-bag"></i>
                                                        </a>
                                                        <a href="#" data-tool="tooltip" title="اضف للمفضلة"
                                                            data-placement="right">
                                                            <i class="las la-heart"></i>
                                                        </a>
                                                        <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                                            <i class="las la-search"></i>
                                                        </a>
                                                        <a href="#" data-tool="tooltip" title="اضف للمقارنة"
                                                            data-placement="right">
                                                            <i class="las la-sync"></i>
                                                        </a>
                                                    </div> --}}
                                                    <span>{{ trans('dashboard.discount') }}</span>
                                                    <img src="{{ $best->images[0]->photo }}" alt="">
                                                </div>
                                                <div class="p-data">
                                                    <a href="{{ route('products', $best->id) }}">{{$best->product_name}}</a>
                                                    <p>
                                                        <span>{{$best->special_price}}</span>
                                                        <span class="old-price">{{$best->price}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="g-more">
                        <a href="{{route('AllCategories')}}" class="btn">{{ trans('front.more') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ex-prods col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="inner">
                            <img src="{{ asset('assets/front/images/ex1.png') }}" alt="">

                            <div class="ex-cap">
                                <h3>{{ trans('front.products_of_reptiles') }}</h3>
                                <p>{{ trans('front.you_can_have_discount..!') }}</p>
                                <a href="{{ route('products', $pro->id) }}" class="btn">{{ trans('front.go_to_our_store') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="inner">
                            <img src="{{ asset('assets/front/images/ex2.png') }}" alt="">
                            <div class="ex-cap">
                                <h3>{{ trans('front.products_of_birds') }}</h3>
                                <p>{{ trans('front.you_can_have_discount..!') }}</p>
                                <a href="{{ route('products', $pro->id) }}" class="btn">{{ trans('front.go_to_our_store') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blogs col-xs-12">
            <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="container">
                    <span>{{ trans('dashboard.blogs') }}</span>
                    <h3>{{ trans('front.all_you_need_and_more') }}
                        <a href="{{ url('/allBlogs') }}">{{ trans('front.more') }}</a>
                    </h3>
                </div>
            </div>
            <div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="blog-slider owl-carousel">
                    @isset($blogs)
                        @foreach ($blogs as $index => $blog)
                            @if ($index < 4)

                                <div class="item">
                                    <div class="blog-card">
                                        <div class="b-img">
                                            <img src="{{ asset($blog->blog_photo) }}" alt="">

                                            <a href="{{ route('singleBlog', $blog->id) }}"></a>
                                        </div>
                                        <div class="b-data">
                                            <a href="{{ route('singleBlog', $blog->id) }}" class="title">
                                                @if (app()->getLocale() == 'ar')
                                                    {{ $blog_title_ar }}
                                                @else
                                                    {{ $blog_title_en }}
                                                @endif

                                            </a>
                                            <p>
                                                @if (app()->getLocale() == 'ar')
                                                    {{ $short_description_ar }}
                                                @else
                                                    {{ $short_description_en }}
                                                @endif
                                            </p>
                                            <p>
                                                <a href="{{ route('singleBlog', $blog->id) }}">
                                                    {{ trans('front.details') }}
                                                    <i class="la la-angle-left"></i>
                                                </a>
                                                <b>{{ $blog->created_at }}</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>
        <div class="testominals col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span>{{ trans('front.customers_opinions') }}</span>
                    <h3> {{ trans('front.opinions_about_us') }}</h3>
                </div>
                <div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="teso-slider owl-carousel">
                        <div class="item">
                            <p>
                                {{ $customer_one_opinion }}
                            </p>
                            <h4>{{ $customer_one_name }}</h4>
                            <span>{{ $customer_one_job }}</span>
                        </div>
                        <div class="item">
                            <p>
                                {{ $customer_two_opinion }}
                            </p>
                            <h4>{{ $customer_two_name }}</h4>
                            <span>{{ $customer_two_job }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="container">
                <div class="part-slider owl-carousel">
                    @isset($photos)
                        @foreach ($photos as $index => $photo)
                            @if ($index < 4)

                                <div class="itm">
                                    <img src="{{ asset('assets/images/gallaryphotos/' . $photo->photo) }}" alt="">
                                </div>

                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </main>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {

        countFav();

        function countFav() {
            $.ajax({
                method: 'GET',
                url: '/count-fav-prod',
                success: function(response) {

                    $('.countFavProd').html('');
                    $('.countFavProd').html(response.count);

                }

            });
        }

    });


    $(document).ready(function() {

        loadcart();

        function loadcart() {
            $.ajax({
                method: 'GET',
                url: '/load-cart-data',
                success: function(response) {



                    $('.cart-count').html('');
                    $('.cart-count').html(response.count);

                }

            });
        }

    });


    $(document).ready(function() {
        $(document).on('click', '.quick-view', function() {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display",
                "block");
        });
        $(document).on('click', '.close', function() {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css("display",
                "none");
            $('.not-loggedin-modal').css("display", "none");
            $('.alert-modal').css("display", "none");
            $('.alert-modal2').css("display", "none");
        });
    });

    $(document).on('click', '.addToFavouriteList', function(e) {

        e.preventDefault();
        var token = $('input[name=_token]');

        @guest()
            $('.not-loggedin-modal').css('display','block');
        @endguest

        $.ajax({
            type: 'post',
            url: "{{ Route('favourite.store') }}",
            data: {
                productId: $(this).attr('data-product-id'),

            },
            headers: {
                'X-CSRF-TOKEN': token.val()
            },
            success: function(data) {
                if (data.favourited)
                    $('.alert-modal').css('display', 'block');
                else
                    $('.alert-modal2').css('display', 'block');

                countFav();
            }
        });
    });
</script>
