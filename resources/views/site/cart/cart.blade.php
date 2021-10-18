@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{ asset('uploads/about_us/hero.png') }})">
            <div class="container">
                <h3>{{ trans('front.puchase_basket') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                    </li>
                    <li>{{ trans('front.puchase_basket') }}</li>
                </ul>
            </div>
        </div>
        @include('dashboard.includes.alerts.success')
        @include('dashboard.includes.alerts.errors')
        <div class="cart-wrap col-xs-12">
            <div class="container">
                <ul class="nav-tabs col-xs-12">
                    <li class="s1 active">
                        <a href="#" data-toggle="tab" data-target="#t1">
                            <i class="la la-check"></i>
                            {{ trans('front.puchase_basket') }}
                        </a>
                    </li>
                    <li class="s2 disabled">
                        <a href="#" data-toggle="tab" data-target="#t2">
                            <i class="la la-check"></i>
                            {{ trans('dashboard.address') }}
                        </a>
                    </li>
                    <li class="s3 disabled">
                        <a href="#" data-toggle="tab" id="#t3">
                            <i class="la la-check"></i>
                            الدفع
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-xs-12 product_data">
                    <div class="tab-pane fade active in" id="t1">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ trans('dashboard.details') }}</th>
                                        <th>{{ trans('dashboard.quantity') }}</th>
                                        <th>{{ trans('dashboard.price') }}</th>
                                        <th>{{ trans('front.remove') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0; @endphp
                                    @foreach ($cartItems as $item)
                                        <div class="tab-content col-xs-12 product_data">
                                            <tr>
                                                <td>
                                                    <div class="t-product">
                                                        <div class="t-img">
                                                            <img src="{{ $item->products->images[0]->photo }}" alt="">
                                                            <a href="{{ route('products', $item->products->id) }}"></a>
                                                        </div>
                                                        <div class="t-data">
                                                            <a
                                                                href="{{ route('products', $item->products->id) }}">{{ $item->products->product_name }}</a>
                                                            <p>{{ $item->products->price }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="hidden" class="product_id"
                                                        value="{{ $item->product_id }}">
                                                    <div class="number">
                                                        <button
                                                            class="inc qtybutton waves-effect changQuantity increment-btn">+</button>
                                                        <input type="text" value="{{ $item->product_quantity }}"
                                                            name="qtybutton" class="plus-minus-box qty-btn">
                                                        <button
                                                            class="dec qtybutton waves-effect changQuantity decrement-btn">-</button>
                                                    </div>
                                                </td>
                                                <td>{{ $item->products->special_price }}</td>
                                                <td>
                                                    <button class="t-remove delete-cart-item">
                                                        <i class="la la-trash "></i>
                                                    </button>
                                                </td>
                                            </tr>

                                        </div>
                                        <div class="table-extra">
                                            <div class="total-list col-md-4 col-xs-12">
                                                <ul>
                                                    <li>
                                                        {{ trans('dashboard.total') }}
                                                        <span>
                                                            {{ $total += $item->products->special_price * $item->product_quantity }}
                                                        </span>
                                                    </li>
                                                    @if (session()->get('coupon_code'))
                                                        <li>
                                                            {{ trans('front.discount') }}
                                                            ({{ session()->get('coupon_code') }})

                                                            <form action="{{ route('coupon.destroy') }}" method="POST"
                                                                style="color: green">
                                                                @csrf
                                                                {{ method_field('delete') }}
                                                                <button type="submit"
                                                                    style="color: rgb(24, 20, 20)">Remove</button>
                                                            </form>
                                                    @endif
                                                    @if (session()->has('coupon_value'))

                                                        <span>
                                                            @php
                                                                $new_total = $total * session()->get('coupon_value');
                                                                
                                                            @endphp

                                                        </span>
                                                    @else
                                                        <span>

                                                        </span>
                                                        </li>
                                                    @endif

                                                    <li>
                                                        {{ trans('front.tax') }}

                                                        @if (session()->has('coupon_code', 'coupon_value'))

                                                            {{ $new_tax = $new_total * 0.14 }}

                                                        @else

                                                            <span>{{ $tax = $total * 0.14 }}</span>

                                                        @endif

                                                    </li>
                                                    <li>
                                                        {{ trans('front.final_cost') }}

                                                        @if (session()->has('coupon_code', 'coupon_value'))

                                                            {{ $new_final_total = $new_total - $new_tax }}

                                                        @else

                                                            <span>{{ $final_cost = $total - $tax }}</span>

                                                        @endif

                                                    </li>
                                                </ul>
                                                <a href="#"
                                                    class="btn next-step address">{{ trans('front.continue') }}</a>
                                            </div>
                                            @if (!session()->has('coupon_code', 'coupon_value'))
                                                <div class="discount-wrap col-md-4 col-xs-12">
                                                    <h4>
                                                        <img src="{{ asset('assets/images/sale.svg') }}" alt="">
                                                        {{ trans('front.discount') }} / {{ trans('front.promocode') }}
                                                    </h4>

                                                    <div class="form-group">
                                                        <form action="{{ route('coupon.store') }}" method="POST">
                                                            @csrf
                                                            <input type="text" class="form-control"
                                                                placeholder="اكتب الكود" name="coupon_code"
                                                                id="coupon_code">

                                                            <button type="submit"
                                                                class="btn">{{ trans('front.apply') }}</button>
                                                        </form>
                                                    </div>

                                                </div>

                                            @endif

                                        </div>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="t2">
                        <div class="row">
                            <div class="address-form col-md-8 col-xs-12">
                                <div class="inner col-xs-12">
                                    <form action="" method="post">
                                        @csrf
                                        @method('PUT')

                                        <input hidden value="1" type="text" id="product_id">

                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> <i>*</i> {{ trans('dashboard.first_name') }}</h4>
                                            <input type="text" class="form-control" name="first_name" id="first_name">
                                        </div>

                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> <i>*</i> {{ trans('dashboard.last_name') }}</h4>
                                            <input type="text" class="form-control" name="last_name" id="last_name">
                                        </div>

                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> <i>*</i> {{ trans('dashboard.city') }}</h4>
                                            <input type="text" class="form-control" name="city" id="city">
                                        </div>

                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> <i>*</i> {{ trans('dashboard.Governorate') }}</h4>
                                            <input type="text" class="form-control" name="Governorate" id="Governorate">
                                        </div>
                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> <i>*</i> {{ trans('dashboard.country') }}</h4>
                                            <input type="text" class="form-control" name="country" id="country">
                                        </div>

                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> <i>*</i>{{ trans('dashboard.post_address') }}</h4>
                                            <input type="text" class="form-control" name="post_address" id="post_address">
                                        </div>

                                        <div class="form-group col-md-12 col-xs-12">
                                            <h4> <i>*</i> {{ trans('dashboard.address') }}</h4>
                                            <input type="text" class="form-control" name="address" id="address">
                                        </div>
                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> <i>*</i> {{ trans('dashboard.phone') }} </h4>
                                            <input type="number" class="form-control" name="phone" id="phone">
                                        </div>
                                        <div class="form-group col-md-6 col-xs-12">
                                            <h4> {{ trans('dashboard.email') }}</h4>
                                            <input type="email" class="form-control" name="email_address"
                                                id="email_address">
                                        </div>

                                        <div class="form-group col-md-12 col-xs-12">
                                            <div class="ship-address" name="shipping_method">
                                                <h5>{{ trans('dashboard.shipping_method') }}</h5>
                                                <ul>
                                                    <li>
                                                        <label>
                                                            <input type="radio" name="shipping_method" value="1">
                                                            <span>
                                                                <img src="images/truck.svg" alt="">
                                                                <div>
                                                                    <span>{{ trans('dashboard.delivery') }}
                                                                        <b>({{ trans('dashboard.free') }})</b></span>
                                                                    <p>{{ trans('dashboard.you will have a message with details .. soon !!') }}
                                                                    </p>
                                                                </div>
                                                            </span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="radio" name="shipping_method"
                                                                id="shipping_method=radio" value="2">
                                                            <span>
                                                                <img src="images/home.svg" alt="">
                                                                <div>
                                                                    <span>{{ trans('dashboard.Have it from Out store') }}
                                                                        <a href="{{ url('contactus') }}">
                                                                            {{ trans('dashboard.get_directions') }}
                                                                        </a></span>
                                                                    <p>{{ trans('dashboard.you will have a message with details .. soon !!') }}
                                                                    </p>
                                                                </div>
                                                            </span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="btn next-step confirm">{{ trans('dashboard.confirm') }}</button>
                                    </form>
                                </div>

                            </div>
                            {{-- <div class="prods-list col-md-4 col-xs-12">
                                <h4>{{ trans('dashboard.products') }}</h4>
                                <ul class="p-list">
                                    @php $total = 0; @endphp
                                    @foreach ($cartItems as $item)

                                        <li>
                                            <img src="{{ $item->products->images[0]->photo }}" alt="">
                                            <div>
                                                <span>{{ $item->product_name }}</span>
                                                <b>{{ $item->products->special_price }}</b>
                                            </div>
                                        </li>
                                    @endforeach
                                   
                                    
                                   
                                </ul>
                                {{-- <ul class="ex-list">

                                    <li>
                                        {{ trans('dashboard.total') }}
                                        @if (session()->get('coupon_code', 'coupon_value'))

                                        {{$new_final_total = $new_total - $new_tax}}

                                        @else
                                        <span>{{ $final_cost = $total - $tax }}</span>
                                            
                                        @endif
                                    </li>

                                    <li>
                                        {{ trans('dashboard.delivery') }}
                                        
                                        <span> 20 </span>
                                    </li>
                                    <li>
                                        {{ trans('front.tax') }}

                                        @if (session()->get('coupon_code', 'coupon_value'))

                                        {{$new_tax = $new_total - $new_tax}}

                                        @else
                                        <span>{{ $final_cost = $total - $tax }}</span>
                                            
                                        @endif

                                        <span>.14</span>
                                    </li>
                                    <li>
                                        {{trans('dashboard.total')}}
                                        @if (session()->get('coupon_code', 'coupon_value'))
                                        <span>{{$new_final_total - 2}}</span>

                                    </li>
                                </ul> --}}
                            {{-- </div> --}}
                        </div>
                    </div>

                    <div class="tab-pane fade" id="t3">
                        <div class="row">
                            <div class="address-form col-md-8 col-xs-12">
                                <div class="pay-inner col-xs-12">

                                    <div class="pay-meth">
                                        <h3>إختيار طريقة الدفع</h3>
                                        <form action="{{ route('payment.payOrder') }}" method="post"
                                            class="needs_validation">

                                            @csrf
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="rad1">
                                                        <span>
                                                            <img src="images/cashe.svg" alt="">
                                                            الدفع عند التوصيل
                                                        </span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="rad1">
                                                        <span>
                                                            <img src="images/payo.svg" alt="">
                                                            بطاقة الائتمان / الخصم
                                                        </span>
                                                    </label>
                                                    <div class="d-block my-3">
                                                        <div class="custom-radio">
                                                            <input name="PaymentMethodId" type="radio" value="2"
                                                                class="" checked="" required="">
                                                            <label class="custom-control-label" for="credit">Visa</label>
                                                        </div>
                                                        <div class="custom-radio">
                                                            <input name="PaymentMethodId" type="radio" value="2"
                                                                class="" required="">
                                                            <label class="custom-control-label" for="debit">Master
                                                                Card</label>
                                                        </div>
                                                        <div class="custom-radio">
                                                            <input name="PaymentMethodId" type="radio" value="6"
                                                                class="" required="">
                                                            <label class="custom-control-label" for="paypal">Mada</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-xs-12">
                                                            <h4>الاسم كما هو مكتوب فى البطاقة</h4>
                                                            <input type="text" class="form-control"
                                                                placeholder="الاسم كما هو مكتوب فى البطاقة">
                                                        </div>
                                                        <div class="form-group col-md-6 col-xs-12">
                                                            <h4><i>*</i>رقم البطاقة</h4>
                                                            <input type="text" class="form-control ccFormatMonitor"
                                                                placeholder="رقم البطاقة" maxlength='19'>
                                                        </div>
                                                        <div class="form-group col-md-6 col-xs-12">
                                                            <h4> (MM / YY) <i>*</i>انتهاء الصلاحية</h4>
                                                            <input type="text" class="form-control" id="inputExpDate"
                                                                placeholder="MM / YY" maxlength='7'>
                                                        </div>
                                                        <div class="form-group col-md-6 col-xs-12">
                                                            <h4><i>*</i>CVV</h4>
                                                            <input type="password" class="form-control cvv"
                                                                placeholder="***" maxlength='3'>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                        <!-- Set up a container element for the button -->
                                                        <div id="paypal-button-container"></div>

                                                        <!-- Include the PayPal JavaScript SDK -->
                                                        <script src="https://www.paypal.com/sdk/js?client-id={{config('services.paypal.client_id')}}"></script>

                                                        <script>
                                                            // Render the PayPal button into #paypal-button-container
                                                            paypal.Buttons({
                                                                // Call your server to set up the transaction
                                                                createOrder: function(data, actions) {
                                                                    return fetch('/api/paypal/order/create', {
                                                                        method: 'POST',
                                                                        body: JSON.stringify({
                                                                            'course_id': "{{ $course->id }}",
                                                                            'user_id': "{{ auth()->user()->id }}",
                                                                            'amount': $("#paypalAmount").val(),
                                                                        })
                                                                    }).then(function(res) {
                                                                        //res.json();
                                                                        return res.json();
                                                                    }).then(function(orderData) {
                                                                        //console.log(orderData);
                                                                        return orderData.id;
                                                                    });
                                                                },

                                                                // Call your server to finalize the transaction
                                                                onApprove: function(data, actions) {
                                                                    return fetch('/api/paypal/order/capture', {
                                                                        method: 'POST',
                                                                        body: JSON.stringify({
                                                                            orderId: data.orderID,
                                                                            payment_gateway_id: $("#payapalId").val(),
                                                                            user_id: "{{ auth()->user()->id }}",
                                                                        })
                                                                    }).then(function(res) {
                                                                        // console.log(res.json());
                                                                        return res.json();
                                                                    }).then(function(orderData) {

                                                                        // Successful capture! For demo purposes:
                                                                        //  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                                                        var transaction = orderData.purchase_units[0].payments.captures[0];
                                                                        iziToast.success({
                                                                            title: 'Success',
                                                                            message: 'Payment completed',
                                                                            position: 'topRight'
                                                                        });
                                                                    });
                                                                }

                                                            }).render('#paypal-button-container');
                                                        </script>

                                                    </div> --}}
                                                </li>
                                            </ul>
                                            <button type="submit" class="btn" data-toggle="modal"
                                                data-target="#reserv_pop">ادفع 200 ر.س</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="prods-list col-md-4 col-xs-12">
                                <h4>المنتجات</h4>
                                <ul class="p-list">
                                    <li>
                                        <img src="images/products/1.png" alt="">
                                        <div>
                                            <span>اسم المنتج x 1</span>
                                            <b>130 ر.س</b>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/products/2.png" alt="">
                                        <div>
                                            <span>اسم المنتج x 1</span>
                                            <b>130 ر.س</b>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/products/3.png" alt="">
                                        <div>
                                            <span>اسم المنتج x 1</span>
                                            <b>130 ر.س</b>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/products/4.png" alt="">
                                        <div>
                                            <span>اسم المنتج x 1</span>
                                            <b>130 ر.س</b>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="ex-list">
                                    <li>
                                        الاجمالى
                                        <span>120 ر.س</span>
                                    </li>
                                    <li>
                                        التوصيل
                                        <span>120 ر.س</span>
                                    </li>
                                    <li>
                                        الضريبة
                                        <span>120 ر.س</span>
                                    </li>
                                    <li>
                                        الاجمالى
                                        <span>600 ر.س</span>
                                    </li>
                                </ul>
                            </div> --}}
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
        $(".address").click(function(e) {
            e.preventDefault();
            $(".s1").removeClass("active");
            $(".s2").removeClass("disabled");
            $(".s1").addClass("disabled");
            $(".s2").addClass("active");
            $("#t1").removeClass("active in");
            $("#t2").addClass("active in");
        });

        $(".confirm").click(function(e) {
            e.preventDefault();
            $(".s2").removeClass("active");
            $(".s3").removeClass("disabled");
            $(".s2").addClass("disabled");
            $(".s3").addClass("active");
            $("#t2").removeClass("active in");
            $("#t3").addClass("active in");

            var token = $('input[name=_token]');
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let city = $('#city').val();
            let Governorate = $('#Governorate').val();
            let country = $('#country').val();
            let post_address = $('#post_address').val();
            let address = $('#address').val();
            let phone = $('#phone').val();
            let email_address = $('#email_address').val();
            let shipping_method = $("input[name='shipping_method']:checked").val();
            let product_id = $('#product_id').val();
            let product_quantity = $('#product_quantity').val();

            if (!$('#first_name').val() &
                !$('#last_name').val() &
                !$('#city').val() &
                !$('#Governorate').val() &
                !$('#country').val() &
                !$('#post_address').val() &
                !$('#address').val() &
                !$('#phone').val() &
                !$('#email_address').val() &
                !$('#shipping_method').val()) {
                $('#error').html('write the field');
            } else {
                $.ajax({
                    type: 'GET',
                    url: '/confirm-personal-data',
                    data: {
                        first_name: first_name,
                        last_name: last_name,
                        Governorate: Governorate,
                        country: country,
                        post_address: post_address,
                        address: address,
                        phone: phone,
                        city: city,
                        email_address: email_address,
                        shipping_method: shipping_method,
                        product_id: product_id,
                        product_quantity: product_quantity
                    },
                    headers: {
                        'X-CSRF-TOKEN': token.val()
                    },
                    success: function(response) {
                        //location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

            }



        });
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
        $('.increment-btn').click(function(e) {

            e.preventDefault();

            var inc_value = $(this).closest('.product_data').find('.qty-btn').val();

            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;

                $(this).closest('.product_data').find('.qty-btn').val(value);
            }
        });

        $('.decrement-btn').click(function(e) {

            e.preventDefault();

            var dec_value = $(this).closest('.product_data').find('.qty-btn').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;

                dec_value = $(this).closest('.product_data').find('.qty-btn').val(value);
            }
        });
    });


    $(document).ready(function() {
        $('.delete-cart-item').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.product_id').val();
            $.ajax({
                method: 'GET',
                url: '/delete-cart-item',
                data: {
                    'product_id': product_id,
                },
                success: function(response) {
                    location.reload();
                }
            });
        });
    });

    $(document).ready(function() {
        $('.changQuantity').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.product_id').val();
            var product_quantity = $(this).closest('.product_data').find('.qty-btn').val();
            data = {
                'product_id': product_id,
                'product_quantity': product_quantity,
            }
            $.ajax({
                method: 'GET',
                url: '/update-cart',
                data: data,
                success: function(response) {
                    location.reload();
                }
            });
        });
    });
</script>
