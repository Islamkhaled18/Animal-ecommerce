@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{ asset('uploads/about_us/hero.png') }})">
            <div class="container">
                <h3>{{ trans('dashboard.blogs') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                    </li>
                    <li>{{ trans('dashboard.blogs') }}</li>
                </ul>
            </div>
        </div>
        <div class="categ-wrap blog-wrap col-xs-12">
            <div class="container">
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
                <div class="search-wrap col-xs-12">

                    @isset($blogs)
                        @foreach ($blogs as $index => $blog)
                            @if ($index < 4)

                                <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="200">
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

                    <div class="g-more col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <a href="{{ url('/allBlogs') }}" class="btn">{{ trans('front.all') }}</a>
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
