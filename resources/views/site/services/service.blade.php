@extends('layouts.app')

@section('content')


    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image:  url({{asset('uploads/about_us/hero.png')}})">
            <div class="container">
                <h3>{{ trans('dashboard.services') }}</h3>
                <ul>
                    <li>
                        <a href="{{url('/site')}}">{{trans('front.home')}}</a>
                    </li>
                    <li>{{ trans('dashboard.services') }}</li>
                </ul>
            </div>
        </div>
        <div class="clinic-wrap col-xs-12">
            <div class="cl-top col-xs-12">
                <div class="container">
                    <div class="cl-img col-md-3 col-xs-12">
                        <img src="{{asset('uploads/about_us/hero.png')}}" alt="">
                        <ul>
                            <li>
                                <i class="la la-map-marker"></i>
                                <a href="{{url('contactus')}}">{{ trans('front.get_directions') }}</a>
                            </li>
                            <li>
                                <i class="la la-phone-volume"></i>
                                <a href="tel:+966012345678">{{$service->phone}}</a>
                            </li>
                            <li>
                                <i class="la la-envelope"></i>
                                <a href="mailto:admin@domainname.com">{{$service->email}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cl-info col-md-9 col-xs-12">
                        <h3>{{ trans('front.about_services') }}</h3>
                        <p>
                            {{$service->description}}
                                
                            
                        </p>
                        <h3>{{ trans('front.our_services') }}</h3>
                        <ul>
                            <li>
                                {{$service->service_one}}

                            </li>
                            <li>
                                {{$service->service_two}}
                                
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cl-form col-xs-12">
                <div class="cl-form-head col-xs-12">
                    <div class="container">
                        <h3>{{ trans('front.book_aservice') }}</h3>
                    </div>
                </div>
                <div class="cl-form-body col-xs-12">
                    <div class="container">
                        <form action="{{route('reservations.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>{{ trans('front.service_name') }}</h4>
                                    <input type="text" class="form-control" placeholder="" name="service_name">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>{{ trans('front.animal_type') }}</h4>
                                    <input type="text" class="form-control" placeholder="" name="animal_type">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>{{ trans('front.animal_number') }}</h4>
                                    <input type="number" class="form-control" placeholder="" name="animal_number">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>{{ trans('front.reservation_date') }}</h4>
                                    <input type="date" class="form-control date_inp" placeholder="تاريخ الحجز" name="reservation_date">
                                    <i class="la la-calendar"></i>
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4>{{ trans('front.payment_method') }}</h4>
                                    <select class="form-control nice-select" name="payment_method">
                                        <option id="pay_online">{{ trans('front.credit') }}</option>
                                        <option>{{ trans('front.cash') }}</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn" data-toggle="modal" data-target="#reserv_pop">ادفع</button>
                                </div>
                                {{-- <div class="form-group has-pay col-xs-12">
                                    <h4>بطاقة الائتمان / الخصم</h4>
                                    <div class="row">
                                        <div>
                                            <div class="form-group">
                                                <h4>رقم البطاقة <i>*</i></h4>
                                                <input type="text" class="form-control ccFormatMonitor" placeholder="رقم البطاقة" maxlength='19'>
                                            </div>
                                            <div class="form-group">
                                                <h4> اسم صاحب الكارت <i>*</i></h4>
                                                <input type="text" class="form-control" placeholder="اسم صاحب الكارت">
                                            </div>
                                            <div class="form-group">
                                                <h4>  انتهاء الصلاحية <i>*</i></h4>
                                                <input type="text" class="form-control" id="inputExpDate" placeholder="MM / YY" maxlength='7'>
                                            </div>
                                            <div class="form-group">
                                                <h4>CVV <i>*</i></h4>
                                                <input type="password" class="form-control cvv" placeholder="***" maxlength='3'>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <button type="submit" class="btn" data-toggle="modal" data-target="#reserv_pop">ادفع</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ab-gallery col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>الجاليرى</span>
                        <h3>مكتبة الصور</h3>
                    </div>
                    <div class="g-body col-xs-12">
                        <div class="g-slider owl-carousel">
                            <div class="block">
                                <img src="images/blog.png" alt="">
                                <a href="images/blog.png" data-fancybox="images">
                                    <i class="la la-search"></i>
                                </a>
                            </div>
                            <div class="block">
                                <img src="images/blog.png" alt="">
                                <a href="images/blog.png" data-fancybox="images">
                                    <i class="la la-search"></i>
                                </a>
                            </div>
                            <div class="block">
                                <img src="images/blog.png" alt="">
                                <a href="images/blog.png" data-fancybox="images">
                                    <i class="la la-search"></i>
                                </a>
                            </div>
                            <div class="block">
                                <img src="images/blog.png" alt="">
                                <a href="images/blog.png" data-fancybox="images">
                                    <i class="la la-search"></i>
                                </a>
                            </div>
                            <div class="block">
                                <img src="images/blog.png" alt="">
                                <a href="images/blog.png" data-fancybox="images">
                                    <i class="la la-search"></i>
                                </a>
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

@stop

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
</script>

