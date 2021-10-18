@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{ asset('uploads/about_us/hero.png') }})">
            <div class="container">
                <h3>{{ trans('dashboard.products') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                    </li>
                    <li>{{ trans('dashboard.products') }}</li>
                </ul>
            </div>
        </div>
        <div class="product-wrap col-xs-12 product_data">
            <div class="container">
                <div class="single-img col-md-5 col-xs-12">
                    {{-- <div class="all">
                        <div class="slider">
                            <div class="owl-carousel owl-theme one">
                                @foreach ($product->images as $image)
                                    <div class="item-box">
                                        <img src="{{$image->photo}}" alt="">
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="slider-two">
                            <div class="owl-carousel owl-theme two">
                                @foreach ($product->images as $image)
                                    <div class="item-box">
                                        <img src="{{$image->photo}}" alt="">
                                    </div>
                                @endforeach
                               
                            </div>
                            <div class="left-t nonl-t">
                                <i class="la la-angle-left"></i>
                            </div>
                            <div class="right-t">
                                <i class="la la-angle-right"></i>
                            </div>
                        </div>
                    </div> --}}
                    <div class="all">
                        <div class="slider">
                            <div class="owl-carousel owl-theme one">
                                <div class="item-box">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item-box">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="slider-two">
                            <div class="owl-carousel owl-theme two">
                                <div class="item active">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/products/1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="left-t nonl-t">
                                <i class="la la-angle-left"></i>
                            </div>
                            <div class="right-t">
                                <i class="la la-angle-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="sec-share">
                        <span>مشاركة هذا المنتج</span>
                        <div>
                            <a href="#" class="telg">
                                <i class="la la-telegram"></i>
                            </a>
                            <a href="#" class="twit">
                                <i class="la la-twitter"></i>
                            </a>
                            <a href="#" class="faceb">
                                <i class="la la-facebook"></i>
                            </a>
                            <a href="#" class="insta">
                                <i class="la la-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="single-data col-md-7 col-xs-12">
                    <div class="sec-item">


                        <b>{{ $product->code }}</b>
                    </div>
                    <div class="sec-info">
                        <h1>{{ $product->product_name }}</h1>
                        <div class="Stars" style="--rating: 2.3;"></div>
                        <p>
                            {{ trans('dashboard.price') }}
                            <span>{{ $product->special_price }}</span>
                            <span class="old-price">{{ $product->price }}</span>
                        </p>
                        <p class="desc">
                            {{ $product->description }}
                        </p>
                    </div>
                    <div class="sec-actions">
                        <input type="hidden" value="{{ $product->id }}" class="product_id">
                        <span>{{ trans('dashboard.quantity') }}</span>
                        <div class="number">
                            <button class="inc qtybutton waves-effect increment-btn">+</button>
                            <input type="text" value="1" name="qtybutton" class="plus-minus-box qty-btn">
                            <button class="dec qtybutton waves-effect decrement-btn">-</button>
                        </div>


                        <button type="button" class="addToFavouriteList" data-product-id="{{ $product->id }}">
                            <i class="la la-heart"></i>
                        </button>
                        <b>
                            {{ trans('dashboard.availability') }}
                            <i class="la la-check-circle"></i>
                        </b>
                        <button type="button" class="btn addToCartBtn">اضف للسلة</button>
                    </div>
                </div>



                <div class="single-extra col-xs-12">
                    <ul class="nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" data-target="#p_desc">{{ trans('dashboard.description') }}</a>
                        </li>
                        <li>
                            <a data-toggle="tab" data-target="#p_rate">التقييم</a>
                        </li>
                        <li>
                            <a data-toggle="tab" data-target="#p_shippment">معلومات الشحن</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="p_desc">
                            <p>
                                sdfd
                            </p>
                            <ul>
                                <li>
                                    dsfdsf
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="p_rate">
                            <div class="clinic-reviews">
                                <div class="rev-side">
                                    <div class="rev-list">
                                        <ul>
                                            <li>
                                                <div class="Stars" style="--rating: 2.3;"></div>
                                                <b>1 في 29 يونيو 2020user-MQRAWA بواسطة
                                                </b>
                                                <p>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل
                                                    كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا
                                                    علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.</p>
                                            </li>
                                            <li>
                                                <div class="Stars" style="--rating: 2.3;"></div>
                                                <b>1 في 29 يونيو 2020user-MQRAWA بواسطة
                                                </b>
                                                <p>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل
                                                    كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا
                                                    علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.</p>
                                            </li>
                                            <li>
                                                <div class="Stars" style="--rating: 2.3;"></div>
                                                <b>1 في 29 يونيو 2020user-MQRAWA بواسطة
                                                </b>
                                                <p>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل
                                                    كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا
                                                    علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <form action="#" method="get">
                                        <div class="form-group">
                                            <div>
                                                <span>اضف تقييم</span>
                                                <div id="rateYo"></div>
                                                <div class="rating"></div>
                                            </div>
                                            <h4>اضف تعليق</h4>
                                            <textarea class="form-control"></textarea>
                                            <button type="submit" class="btn">ارسال</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="p_shippment">
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،
                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي
                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال
                            </p>
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،
                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي
                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال
                            </p>
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                                إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،
                                هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي
                                وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال
                            </p>
                        </div>
                    </div>
                </div>
                <div class="single-related col-xs-12">
                    <div class="products-s col-xs-12">
                        <div class="g-head col-xs-12">
                            <h3>منتجات ذات صلة</h3>
                        </div>
                        <div class="g-body col-xs-12">
                            <div class="products-slider owl-carousel">
                                @if (isset($related_products) && count($related_products) > 0)
                                    @foreach ($related_products as $related)
                                        <div class="item">
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
                                                            <a href="#" data-tool="tooltip" title="اضف للمقارنة"
                                                                data-placement="right">
                                                                <i class="las la-sync"></i>
                                                            </a>
                                                        </div>
                                                        <img src="{{ $related->images[0]->photo }}" alt="">
                                                    </div>
                                                    <div class="p-data">
                                                        <a
                                                            href="{{ route('products', $product->id) }}">{{ $related->product_name }}</a>
                                                        <p>
                                                            <span>{{ $related->special_price }} </span>
                                                            <span class="old-price">{{ $related->price }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
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

    @include('site.includes.not-logged')
    @include('site.includes.alert')
    @include('site.includes.alert2')

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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


    $(document).ready(function() {
        $('.increment-btn').click(function(e) {

            e.preventDefault();
            var inc_value = $('.qty-btn').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $('.qty-btn').val(value);
            }
        });

        $('.decrement-btn').click(function(e) {

            e.preventDefault();
            var dec_value = $('.qty-btn').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $('.qty-btn').val(value);
            }
        });


    });
</script>
