@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{ asset('uploads/about_us/hero.png') }})">
            <div class="container">
                <h3>{{ trans('front.my_account') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                    </li>
                    <li>{{ trans('front.my_account') }}</li>
                </ul>
            </div>
        </div>
        <div class="profile-wrap col-xs-12">
            <div class="container">
                <a href="javascript:void(0)" class="op-sidebar">
                    <img src="images/user.jfif" alt="">
                </a>
                <div class="prof-sidebar col-md-3 col-xs-12">
                    <div class="prof-top">
                        <button type="button" class="clo-sidebar">
                            <i class="la la-close"></i>
                        </button>
                        <div class="s-img">
                            <img src="{{ asset($user->profile->user_photo) }}" alt="" id="blah1">
                        </div>
                        <h3>{{ $user->profile->user_name }}</h3>
                        <p>{{ $user->profile->user_email }}</p>
                    </div>
                    <ul>
                        <li class="my_account active">
                            <a href="#">{{ trans('front.my_account') }}</a>
                        </li>

                        <li class="shipping_address">
                            <a href="#">{{ trans('front.shipping_address') }}</a>
                        </li>
                        <li class="reservations_data">
                            <a href="#">{{ trans('front.reservations') }}</a>
                        </li>

                         <li>
                            <a href="{{ route('logout') }}">{{ trans('front.logout') }}</a>
                        </li>

                      
                    </ul>
                </div>
                <div class="prof-content col-md-9 col-sm-12 col-xs-12">
                    <div class="prof-head col-xs-12">
                        <h4>{{ trans('front.my_account') }}</h4>
                    </div>
                    <div class="prof-body col-xs-12">
                        <div class="personal-data">
                            <ul>
                                <li>{{ $user->profile->user_name }} : {{ trans('dashboard.name') }}</li>
                                <li>{{ $user->profile->user_email }} : {{ trans('dashboard.email') }}</li>
                                <li>{{ $user->mobile }} : {{ trans('dashboard.phone') }}</li>
                                <li> ************** : {{ trans('dashboard.password') }}</li>
                            </ul>
                            <a href="{{ route('site.profile.user.edit', $user->id) }}"
                                class="btn edit_btn">{{ trans('dashboard.edit') }}</a>
                        </div>
                    </div>
                </div>
                <div class="address-details col-md-9 col-sm-12 col-xs-12 hidden">
                    <div class="prof-head col-xs-12">
                        <h4>{{ trans('front.shipping_address') }}</h4>
                    </div>
                    <div class="prof-body col-xs-12">
                        <div class="shipp-adress">
                            @foreach ($user->addresses as $address)

                                <div class="old-address" id="new_address">
                                    <p>{{ $address->country }} - {{ $address->governorate }} - {{ $address->city }} -
                                        {{ $address->street }} - {{ $address->address }}  </p>
                                </div>
                            @endforeach

                            <div class="new-address">
                                <a href="#" class="btn op-new-address">{{ trans('front.add_new_address') }}</a>
                                <div class="new-form">
                                    <div class="row address_form ">
                                        <form action="#" method="get">

                                            @csrf
                                            <input hidden value="{{ $user->id }}" type="text" id="user-id">

                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="country" id="user-country" type="text" class="form-control"
                                                    placeholder="البلد">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="governorate" id="user-governorate" type="text"
                                                    class="form-control" placeholder="المحافظه">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="city" id="user-city" type="text" class="form-control"
                                                    placeholder="المدينه">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="street" id="user-street" type="text" class="form-control"
                                                    placeholder="الشارع">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="address" id="user-address" type="text" class="form-control"
                                                    placeholder="باقى العنوان">
                                            </div>

                                            <div class="form-group col-md-12 col-xs-12">
                                                <button type="submit"
                                                    class="btn save_address">{{ trans('dashboard.add') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reservation-content col-md-9 col-sm-12 col-xs-12 hidden">
                    <div class="prof-head col-xs-12">
                        <h4>{{ trans('front.reservations') }}</h4>
                        <div>
                            <div>
                                <i class="la la-calendar"></i>
                                <select class="form-control nice-select">
                                    <option>الكل</option>
                                    <option>اخر 3 شهور</option>
                                    <option>اخر 6 شهور</option>
                                </select>
                            </div>
                            <div>
                                <i class="las la-sort-amount-down-alt"></i>
                                <select class="form-control nice-select">
                                    <option>الكل</option>
                                    <option>قيد التحضير</option>
                                    <option>تم استلامها</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    @isset($reservations_details)
                        @foreach ($reservations_details as $res)
                            <div class="prof-body col-xs-12">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#cl1">
                                                <span>{{ trans('front.service_name') }} : {{ $res->service_name }}</span>
                                                <span>{{ trans('front.reservation_date') }} :
                                                    {{ $res->reservation_date }}</span>
                                                <span>{{ trans('front.animal_type') }}: {{ $res->animal_type }}</span>
                                                <span>{{ trans('dashboard.details') }}</span>
                                            </a>
                                        </div>
                                        <div id="cl1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="res-list">
                                                    <div>

                                                        <span> {{ $res->payment_method }} :
                                                            {{ trans('front.payment_method') }}</span>
                                                    </div>
                                                    <div>

                                                        <span>{{ trans('front.animal_number') }}:
                                                            {{ $res->animal_number }}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                        @endforeach

                    @endisset


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

        $(".shipping_address").click(function(e) {
            e.preventDefault();
            $('.my_account').removeClass('active');
            $('.shipping_address').addClass('active');
            $('.personal-data').hide();
            $('.address-details').removeClass('hidden');
            $('.reservations_data').removeClass('active');
            $('.reservation-content').addClass('hidden');


        });

        $(".my_account").click(function(e) {
            e.preventDefault();
            $('.shipping_address').removeClass('active');
            $('.my_account').addClass('active');
            $('.address-details').addClass('hidden');
            $('.personal-data').show();
            $('.reservations_data').removeClass('active');
            $('.reservation-content').addClass('hidden');

        });

        $(".reservations_data ").click(function(e) {
            e.preventDefault();
            $('.my_account').removeClass('active');
            $('.shipping_address').removeClass('active');
            $('.reservation-content').removeClass('hidden');
            $('.address-details').addClass('hidden');
            $('.personal-data').hide();
        });


        $(".op-new-address").click(function(e) {
            e.preventDefault();
            $('.new-form').show();

        });

        $(".save_address").click(function(e) {
            e.preventDefault();


            var token = $('input[name=_token]');
            let country = $('#user-country').val();
            let governorate = $('#user-governorate').val();
            let city = $('#user-city').val();
            let street = $('#user-street').val();
            let address = $('#user-address').val();
            let user_id = $('#user-id').val();


            if (!$('#user-country').val() &
                !$('#user-governorate').val() &
                !$('#user-city').val() &
                !$('#user-street').val() &
                !$('#user-address').val()) {
                $('#error').html('write the field');
            } else {
                $.ajax({
                    type: 'get',
                    url: '/confirm-personal-address',
                    data: {
                        country: country,
                        governorate: governorate,
                        city: city,
                        street: street,
                        address: address

                    },
                    headers: {
                        'X-CSRF-TOKEN': token.val()
                    },
                    success: function(data) {
                        let new_address =
                            `
                        @foreach ($user->addresses as $address)
                            <div class="old-address" id="new_address">
                                ${country} - ${governorate} - ${city} - ${street} - ${address}
                            </div>
                        @endforeach
                    `;
                        $('#new_address').append(new_address);
                        $('#user-country').val('');
                        $('#user-governorate').val('');
                        $('#user-city').val('');
                        $('#user-street').val('');
                        $('#user-addess').val('');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

            }

        });
    });
</script>
