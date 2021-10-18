@extends('layouts.app')

@section('content')


    <div class="wrapper col-xs-12">
        <main class="main-content col-xs-12">
            <div class="bread-crumb col-xs-12" style="background-image: url({{ asset('uploads/about_us/hero.png') }})">
                <div class="container">
                    <h3>{{ trans('front.contact_us') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                        </li>
                        <li>{{ trans('front.contact_us') }}</li>
                    </ul>
                </div>
            </div>
            <div class="conto-wrap col-xs-12">
                <div class="conto-infos col-xs-12">
                    <div class="container">
                        <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="inner">
                                <i class="la la-map-marker"></i>
                                <div>
                                    <h4>{{ trans('front.address') }}</h4>
                                    <p>
                                        @if (app()->getLocale() == 'ar')
                                            {{ $address_ar }}
                                        @else
                                            {{ $address_en }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <div class="inner">
                                <i class="las la-phone-volume"></i>
                                <div>
                                    <h4>{{ trans('front.contact_us') }}</h4>
                                    <p>{{ $phone_one }}</p>
                                    <p>{{ $phone_two }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">
                            <div class="inner">
                                <i class="la la-at"></i>
                                <div>
                                    <h4>{{ trans('front.email_address') }}</h4>
                                    <p>{{ $email_one }}</p>
                                    <p>{{ $email_two }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conto-map col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927755.0520175649!2d47.383032961783286!3d24.725398084702963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1625849055331!5m2!1sar!2seg"></iframe>
                </div>
                <div class="conto-form col-xs-12">
                    <div class="container">
                        <div class="form-inner">
                            <div class="f-img">
                                <img src="{{ $contact_photo }}" alt="">
                            </div>
                            <div class="f-inputs">
                                <form action="{{ route('sendMessage') }}" method="post">

                                    @csrf
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="200">
                                        <input type="text" class="form-control"
                                            placeholder="@lang('dashboard.sender_name')" name="sender_name">
                                    </div>
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="300">
                                        <input type="email" class="form-control"
                                            placeholder="@lang('dashboard.sender_email')" name="sender_email">
                                    </div>
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="400">
                                        <input type="text" class="form-control"
                                            placeholder="@lang('dashboard.sender_phone')" name="sender_phone">
                                    </div>
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="500">
                                        <textarea class="form-control" placeholder="@lang('dashboard.sender_message')"
                                            name="sender_message"></textarea>
                                    </div>
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="600">
                                        <button type="submit"
                                            class="btn">{{ trans('dashboard.send') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="form-social" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
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
                            <a href="#">
                                <i class="la la-snapchat-ghost"></i>
                            </a>
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

    </div>

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
