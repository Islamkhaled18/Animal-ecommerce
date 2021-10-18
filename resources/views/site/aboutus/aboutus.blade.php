@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{asset('uploads/about_us/hero.png')}})">
            <div class="container">
                <h3>{{trans('front.about_us')}}</h3>
                <ul>
                    <li>
                        <a href="{{url('/site')}}">{{trans('front.home')}}</a>
                    </li>
                    <li>{{trans('front.about_us')}} </li>
                </ul>
            </div>
        </div>
        <div class="about-wrap col-xs-12">
            <div class="ab-top col-xs-12">
                    <div class="container">
                        <div class="ab-img col-md-4 col-xs-12">
                            <img src="{{$main_photo}}" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <img src="{{$sub_photo}}" alt="" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="400">
                        </div>
                        <div class="ab-data col-md-8 col-xs-12">
                            <div class="g-head" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <span>{{trans('front.about_us')}}</span>
                                <h3>

                                    @if( app()->getLocale()=="ar")
                                        {{$main_title_ar}}
                                    @else
                                        {{$main_title_en}}
                                    @endif

                                </h3>
                            </div>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                @if( app()->getLocale()=="ar")
                                    {{$main_text_ar}}
                                @else
                                    {{$main_text_en}}
                                @endif
                            </p>
                            <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                @if( app()->getLocale()=="ar")
                                    {{$sub_title_ar}}
                                @else
                                    {{$sub_title_en}}
                                @endif
                            </h3>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                @if( app()->getLocale()=="ar")
                                    {{$sub_text_ar}}
                                @else
                                    {{$sub_text_en}}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            <div class="ab-vid col-xs-12" style="background-image: url({{asset('uploads/about_us/hero.png')}})" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <a href="{{$youtube}}" data-fancybox>
                    <i class="la la-play"></i>
                </a>

            </div>
            <div class="ab-gallery col-xs-12">
                <div class="container">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>{{ trans('front.gallary') }}</span>
                        <h3>{{ trans('front.gallary_photos') }}</h3>
                    </div>
                    <div class="g-body col-xs-12">

                        @isset($photos)
                            @foreach($photos as $index => $photo)
                                @if($index < 4 )
                                    <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                        <img src="{{asset('assets/images/gallaryphotos/' . $photo->photo )}}" alt="">
                                        <a href="images/blog.png" data-fancybox="images">
                                            <i class="la la-search"></i>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endisset

                    </div>
                    <div class="g-more col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <a href="{{url('/gallaryphotos')}}" class="btn">{{ trans('front.more_photos') }}</a>
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