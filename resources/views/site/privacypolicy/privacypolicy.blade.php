@extends('layouts.app')

@section('content')


<main class="main-content col-xs-12">
    <div class="bread-crumb col-xs-12" style="background-image: url({{asset('uploads/about_us/hero.png')}})">
        <div class="container">
            <h3>{{ trans('front.privacy_policy') }}</h3>
            <ul>
                <li>
                    <a href="{{url('/site')}}">{{trans('front.home')}}</a>
                </li>
                <li>{{ trans('front.privacy_policy') }}</li>
            </ul>
        </div>
    </div>
    <div class="privacy-wrap col-xs-12">
        <div class="container">
            <h3>{{ trans('front.privacy_policy') }} </h3>
            <p> 
                @if( app()->getLocale()=="ar")
                    {{$main_text_ar}}
                @else
                    {{$main_text_en}}
                @endif
            </p>
            <h3>{{ trans('front.terms_of_use') }}</h3>
            <ul>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_one_ar}}
                    @else
                        {{$text_one_en}}
                    @endif
                </li>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_two_ar}}
                    @else
                        {{$text_two_en}}
                    @endif
                </li>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_three_ar}}
                    @else
                        {{$text_three_en}}
                    @endif
                </li>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_four_ar}}
                    @else
                        {{$text_four_en}}
                    @endif
                </li>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_five_ar}}
                    @else
                        {{$text_five_en}}
                    @endif
                </li>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_six_ar}}
                    @else
                        {{$text_six_en}}
                    @endif
                </li>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_seven_ar}}
                    @else
                        {{$text_seven_en}}
                    @endif
                </li>
                <li>
                    @if( app()->getLocale()=="ar")
                        {{$text_eight_ar}}
                    @else
                        {{$text_eight_en}}
                    @endif
                </li>
               
            </ul>
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