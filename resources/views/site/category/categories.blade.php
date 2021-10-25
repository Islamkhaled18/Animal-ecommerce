@extends('layouts.app')

@section('content')


    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{ asset('uploads/about_us/hero.png') }})">
            <div class="container">
                <h3>{{ trans('dashboard.categories') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                    </li>
                    <li>
                    <li>{{ trans('dashboard.categories') }} </li>
                    </li>

                </ul>
            </div>
        </div>
        <div class="categ-wrap col-xs-12">
            <div class="container">
                <div class="cat-box col-md-9 col-xs-12">
                    <div class="cat-toolbar col-xs-12">
                        <select class="form-control nice-select">
                            <option>ترتيب حسب</option>
                            <option>ترتيب حسب</option>
                            <option>ترتيب حسب</option>
                            <option>ترتيب حسب</option>
                        </select>
                        <div>
                            <button type="button" class="btn grid-view active">
                                <i class="la la-th"></i>
                            </button>
                            <button type="button" class="btn list-view">
                                <i class="la la-list"></i>
                            </button>
                        </div>
                    </div>
                    <div class="search-wrap col-xs-12 grid__">
                        @foreach ($products as $product)
                            <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <div class="product-card">
                                    <div class="p-inner">
                                        <div class="p-img">
                                            <div class="p-actions">
                                                <a href="#" class="addToCartBtn" data-tool="tooltip" title="اضف للسلة"
                                                    data-placement="right" data-product-id="{{ $product->id }}">
                                                    <i class="las la-shopping-bag"></i>
                                                </a>
                                                <a href="#" class="addToFavouriteList" data-tool="tooltip"
                                                    title="اضف للمفضلة" data-placement="right"
                                                    data-product-id="{{ $product->id }}">
                                                    <i class="addToFavouriteList las la-heart"></i>
                                                </a>
                                                <a href="#" class="quick-view hidden-sm-down" data-tool="tooltip"
                                                    title="عرض سريع" data-placement="right"
                                                    data-product-id="{{ $product->id }}">
                                                    <i class="las la-search"></i>
                                                </a>
                                                <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                                    <i class="las la-sync"></i>
                                                </a>
                                            </div>
                                            <img src="{{ $product->images[0]->photo }}" alt="">
                                        </div>
                                        <div class="p-data">
                                            <a
                                                href="{{ route('products', $product->id) }}">{{ $product->product_name }}</a>
                                            <p class="desc">
                                                {!! $product->short_description !!}
                                            </p>
                                            <p>
                                                <span>{{ $product->special_price }}</span>
                                                <span class="old-price">{{ $product->price }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @include('site.includes.product-details',$product)
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="cat-sidebar col-md-3 col-xs-12">
                    <div class="c-widget">
                        <h4>اقسام المنتجات</h4>
                        <div class="w-bdy">
                            <div class="w-deps">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#db1">الكلاب</a>
                                        </div>
                                        <div id="db1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">الاكسسورات</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">الطعام</a>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#db2">القطط</a>
                                        </div>
                                        <div id="db2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">الاكسسورات</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">الطعام</a>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#db3">الحيوانات الصغيرة</a>
                                        </div>
                                        <div id="db3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">الاكسسورات</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">الطعام</a>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#db4">الطيور</a>
                                        </div>
                                        <div id="db4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">الاكسسورات</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">الطعام</a>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#db5">الزواحف</a>
                                        </div>
                                        <div id="db5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">الاكسسورات</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">الطعام</a>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="c-widget">
                        <h4>السعر</h4>
                        <div class="w-bdy">
                            <div class="price-wrap">
                                <div id="slider-range"></div>
                                <input type="text" id="amount" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="c-widget">
                        <div class="c-adds">
                            <img src="images/ads-banner.png" alt="">
                            <div class="ads-cap">
                                <h5>
                                    توفير اكثر من <b>25%</b>
                                </h5>
                                <p>طعام واكسسورات الحيوانات</p>
                                <a href="#" class="btn">تسوق الان</a>
                            </div>
                        </div>
                    </div>

                    <div class="c-widget">
                        <h4>منتجات مميزة</h4>
                        <div class="w-bdy">
                            <div class="sp-products">
                                <ul>
                                    <li>
                                        <div class="sp-img">
                                            <img src="images/products/1.png" alt="">
                                            <a href="#"></a>
                                        </div>
                                        <div class="sp-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                            </p>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">170 ريال</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sp-img">
                                            <img src="images/products/2.png" alt="">
                                            <a href="#"></a>
                                        </div>
                                        <div class="sp-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                            </p>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">170 ريال</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sp-img">
                                            <img src="images/products/3.png" alt="">
                                            <a href="#"></a>
                                        </div>
                                        <div class="sp-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                            </p>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">170 ريال</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sp-img">
                                            <img src="images/products/4.png" alt="">
                                            <a href="#"></a>
                                        </div>
                                        <div class="sp-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                            </p>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">170 ريال</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sp-img">
                                            <img src="images/products/1.png" alt="">
                                            <a href="#"></a>
                                        </div>
                                        <div class="sp-data">
                                            <a href="#">اسم المنتج يكتب هنا كاملا</a>
                                            <p>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                                <i class="la la-star active"></i>
                                            </p>
                                            <p>
                                                <span>130 ريال</span>
                                                <span class="old-price">170 ريال</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="container">
                <div class="part-slider owl-carousel">
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
                    <div class="itm">
                        <img src="images/1.png" alt="">
                    </div>
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

    $(document).on("change", ".form-control", function() {
        var sortingMethod = $(this).val();

        if (sortingMethod == 'l2h') {
            sortProductsPriceAscending();
        } else if (sortingMethod == 'h2l') {
            sortProductsPriceDescending();
        }
    });


    function sortProductsPriceAscending() {
        var gridItems = $('.grid-item');

        gridItems.sort(function(a, b) {
            return $('.product-card', a).data("price") - $('.product-card', b).data("price");
        });

        $(".isotope-grid").append(gridItems);
    }

    function sortProductsPriceDescending() {
        var gridItems = $('.grid-item');

        gridItems.sort(function(a, b) {
            return $('.product-card', b).data("price") - $('.product-card', a).data("price");
        });

        $(".isotope-grid").append(gridItems);
    }

    $(document).ready(function() {

        $('.addToCartBtn').click(function(e) {
            e.preventDefault();
            var token = $('input[name=_token]');
            var product_id = $(this).closest('.product_data').find('.product_id').val();
            var product_quantity = $(this).closest('.product_data').find('.qty-btn').val();

            $.ajax({
                method: 'GET',
                url: '/add-to-cart',
                data: {
                    'product_id': product_id,
                    'product_quantity': product_quantity,
                },
                headers: {
                    'X-CSRF-TOKEN': token.val()
                },
                success: function(response) {

                }
            });
        });
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
