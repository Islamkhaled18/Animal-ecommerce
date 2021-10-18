@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{ asset('uploads/about_us/hero.png') }}">
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
        <!--=================== SINGLE BLOG ======================-->
        <div class="single-wrap col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="blog-box col-md-8 col-xs-12">
                        <div class="post">
                            <div class="post-title">
                                <h4>
                                    @if (app()->getLocale() == 'ar')
                                        {{ $blog_title_ar }}
                                    @else
                                        {{ $blog_title_en }}
                                    @endif
                                </h4>
                            </div>
                            <div class="post-img">
                                <img src="{{ asset($blog->blog_photo) }}" alt="">
                            </div>

                            <div class="post-info">
                                <ul>
                                    <li>
                                        <i class="la la-edit"></i>
                                        {{ trans('front.by_admin') }}
                                    </li>
                                    <li>
                                        <i class="la la-clock"></i>
                                        {{ $blog->created_at }}
                                    </li>
                                    <li>
                                        <i class="la la-comment"></i>
                                        5
                                    </li>
                                </ul>
                                <div class="share-l">
                                    <span> :{{ trans('front.share') }}</span>
                                    <div>
                                        <a href="#">
                                            <i class="la la-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="la la-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="la la-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-sections">
                                <div class="section" id="sec__1">
                                    <h1>
                                        @if (app()->getLocale() == 'ar')
                                            {{ $blog_title_ar }}
                                        @else
                                            {{ $blog_title_en }}
                                        @endif
                                    </h1>

                                    <p>
                                        @if (app()->getLocale() == 'ar')
                                            {{ $long_description_ar }}
                                        @else
                                            {{ $long_description_en }}
                                        @endif
                                    </p>

                                </div>

                                <div class="section" id="sec__2">
                                    <h3>
                                        @if (app()->getLocale() == 'ar')
                                            {{ $blog_title_ar }}
                                        @else
                                            {{ $blog_title_en }}
                                        @endif
                                    </h3>
                                  
                                    <div class="ab-vid col-xs-12"
                                        style="background-image: url({{ asset('uploads/about_us/hero.png') }})"
                                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                        <a href="{{ $blog_video }}" data-fancybox>
                                            <i class="la la-play"></i>
                                        </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="post-others">
                            <div class="row">
                                @isset($blogs)
                                    @foreach ($blogs as $index => $blog)
                                        @if ($index < 2)

                                            <div class="p-block col-md-6 col-xs-12">
                                                <a href="{{ route('singleBlog', $blog->id) }}">
                                                    <img src="{{ asset($blog->blog_photo) }}" alt="">
                                                    <p>
                                                        @if (app()->getLocale() == 'ar')
                                                            {{ $blog_title_ar }}
                                                        @else
                                                            {{ $blog_title_en }}
                                                        @endif
                                                    </p>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endisset

                            </div>
                        </div>
                        <div class="post-comments">
                            <ul id="new_comment">
                                @foreach ($blog->comments as $comment)
                                    <li>
                                        <div class="com-img">
                                            <img src="{{ asset('uploads/about_us/33.jpg') }}" alt="">
                                        </div>
                                        <div class="com-data">
                                            <div class="d-top">
                                                <h4>{{ $comment->user_name }}</h4>
                                                <span>
                                                    <i class="la la-clock"></i>
                                                    {{ $comment->created_at }}
                                                </span>
                                            </div>
                                            <div class="d-bot">
                                                <p>
                                                    {{ $comment->user_comment }}
                                                </p>
                                                <button class="btn btn-reply" id="reply-comment"
                                                    value="reply">{{ trans('front.reply') }}</button>

                                            </div>
                                        </div>
                                    </li>
                                    <ul id="new_reply">
                                        @foreach ($comment->replies as $reply)
                                            <li>
                                                <div class="com-img">
                                                    <img src="{{ asset('uploads/about_us/33.jpg') }}" alt="">
                                                </div>
                                                <div class="com-data">
                                                    <div class="d-top">
                                                        <h4>{{ $reply->replier_name }}</h4>
                                                        <span>
                                                            <i class="la la-clock"></i>
                                                            {{ $reply->created_at }}
                                                        </span>
                                                    </div>
                                                    <div class="d-bot">
                                                        <p>
                                                            {{ $reply->replier_comment }}
                                                        </p>
        
                                                    </div>
                                                </div>
                                            </li>
        
                                        @endforeach
        
                                    </ul>

                                @endforeach

                            </ul>

                            

                            <div class="post-add-comment">
                                <div class="post-head">
                                    <h3>
                                        <i class="la la-comment"></i>
                                        <span>{{ trans('front.leave') }}</span> {{ trans('front.your_comment') }}
                                    </h3>
                                </div>
                                <div class="post-form">
                                    <div class="row">
                                        <form action="" method="post">

                                            @csrf
                                            <input hidden value="{{ $blog->id }}" type="text" id="blog-id">
                                            <input hidden value="{{ LaravelLocalization::setLocale() }}" type="text"
                                                id="site-lang">
                                            <div class="form-group col-md-12 col-xs-12">
                                                <textarea name="user_comment" id="user-comment-text" class="form-control"
                                                    placeholder="@lang('dashboard.user_comment')"></textarea>
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="user_name" id="user-comment-name" type="text"
                                                    class="form-control" placeholder="@lang('dashboard.user_name')">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="user_email" id="user-comment-email" type="email"
                                                    class="form-control" placeholder="@lang('dashboard.user_email')">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="user_phone" id="user-comment-phone" type="text"
                                                    class="form-control" placeholder="@lang('dashboard.user_phone')">
                                            </div>
                                            <div class="form-group col-md-12 col-xs-12">
                                                <button type="submit" id="save-comment-btn"
                                                    class="btn ">{{ trans('dashboard.send') }}</button>
                                            </div>
                                        </form>
                                        <div>
                                            <span class="text-danger" id="error"></span>
                                        </div>
                                    </div>

                                    <div class="row hidden" id="reply-form">
                                        <form action="" method="post">
                                            @csrf
                                            <input hidden value="{{ $comment->id }}" type="text" id="comment-id">
                                            <input hidden value="{{ LaravelLocalization::setLocale() }}" type="text"
                                                id="reply-lang">
                                            <div class="form-group col-md-12 col-xs-12">
                                                <textarea name="replier_comment" id="replier-comment-text"
                                                    class="form-control"
                                                    placeholder="@lang('dashboard.replier_comment')"></textarea>
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="replier_name" id="replier-comment-name" type="text"
                                                    class="form-control" placeholder="@lang('dashboard.replier_name')">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="replier_email" id="replier-comment-email" type="email"
                                                    class="form-control" placeholder="@lang('dashboard.replier_email')">
                                            </div>
                                            <div class="form-group col-md-4 col-xs-12">
                                                <input name="replier_phone" id="replier-comment-phone" type="text"
                                                    class="form-control" placeholder="@lang('dashboard.replier_phone')">
                                            </div>
                                            <div class="form-group col-md-12 col-xs-12">
                                                <button type="submit" id="save-reply-btn"
                                                    class="btn ">{{ trans('dashboard.send') }}</button>
                                            </div>
                                        </form>
                                        <div>
                                            <span class="text-danger" id="error2"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="blog-sidebar col-md-4 col-xs-12">
                        <div class="side-widget">
                            <div class="w-head">
                                <h4>ابحث في الموقع</h4>
                            </div>
                            <div class="w-body">
                                <div class="side-form">
                                    <form action="#" method="get">
                                        <div class="form-group">
                                            <input type="search" class="form-control" placeholder="اكتب بحثك هنا">
                                            <button type="submit" class="btn">بحث</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="side-widget">
                            <div class="w-head">
                                <h4>{{ trans('front.more_blogs') }}</h4>
                            </div>
                            <div class="w-body">
                                <div class="related-blogs">
                                    <ul>
                                        @isset($blogs)
                                            @foreach ($blogs as $index => $blog)
                                                @if ($index < 5)
                                                    <li>
                                                        <div class="r-img">
                                                            <a href="{{ route('singleBlog', $blog->id) }}">
                                                                <img src="{{ asset($blog->blog_photo) }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="r-data">
                                                            <a href="{{ route('singleBlog', $blog->id) }}">
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
                                                            <span>
                                                                <i class="la la-clock"></i>
                                                                {{ $blog->created_at }}
                                                            </span>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endisset

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="side-free-area">
                            <a href="#">
                                <img src="https://via.placeholder.com/370x250.png/813970/fff?text=ads area 370*250" alt="">
                            </a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!--============================================-->
        <div class="partners col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="container">
                <div class="part-slider owl-carousel">
                    <@isset($photos)
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
        

        $("#save-comment-btn").click(function(e) {
            e.preventDefault();
            let lang = $('#site-lang').val();
            url = '/' + lang + '/sendComment';
            var token = $('input[name=_token]');
            let text = $('#user-comment-text').val();
            let name = $('#user-comment-name').val();
            let email = $('#user-comment-email').val();
            let mobile = $('#user-comment-phone').val();
            console.log(mobile);
            let blog_id = $('#blog-id').val();

            var dt = new Date();
            let created_at = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
            if (!$('#user-comment-text').val() & !$('#user-comment-name').val() & !$(
                    '#user-comment-email').val() & !$('#user-comment-phone').val()) {
                $('#error').html('write the comment');
            } else {

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        text: text,
                        name: name,
                        email: email,
                        mobile: mobile,
                        blog_id: blog_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': token.val()
                    },
                    success: function(data) {
                        let new_comment = `<li>
                         <div class="com-img">
                                            <img src="images/ex1.png" alt="">
                                        </div>
                                        <div class="com-data">
                                            <div class="d-top">
                                                <h4>${name}</h4>
                                                <span>
                                                    <i class="la la-clock"></i>
                                                  ${created_at}
                                                </span>
                                            </div>
                                            <div class="d-bot">
                                                <p>
                                                   ${text}
                                                </p>
                                                <a href="#">رد</a>
                                            </div>
                                        </div>
                                        </li>
                    `;
                        $('#new_comment').append(new_comment);
                        $('#user-comment-text').val('');
                        $('#user-comment-name').val('');
                        $('#user-comment-email').val('');
                        $('#user-comment-phone').val('');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }

        });


        $("button#reply-comment").click(function(e) {
            e.preventDefault();
            $("#reply-form").removeClass('hidden');
        });

        $("#save-reply-btn").click(function(e) {
            e.preventDefault();
            let lang = $("#reply-lang").val();
            let url = '/' + lang + '/sendReply';
            let text = $('#replier-comment-text').val();
            let name = $('#replier-comment-name').val();
            let email = $('#replier-comment-email').val();
            let mobile = $('#replier-comment-phone').val();
            let comment_id = $('#comment-id').val();
           
            var dt = new Date();
            let created_at = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
            if (!$('#replier-comment-text').val() & !$('#replier-comment-name').val() & !$(
                    '#replier-comment-email').val() & !$('#replier-comment-phone').val()) {
                $('#error2').html('write the reply');
            } else {
                $.ajax({
                    type:'POST',
                    url: url,
                    data: {
                        text: text,
                        name: name,
                        email: email,
                        mobile: mobile,
                        comment_id: comment_id
                    },
                    headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
                    success: function(data) {
                        let new_reply = `<li>
                                        <div class="com-img">
                                            <img src="{{ asset('uploads/about_us/33.jpg') }}" alt="">
                                        </div>
                                        <div class="com-data">
                                            <div class="d-top">
                                                <h4>${name}</h4>
                                                <span>
                                                    <i class="la la-clock"></i>
                                                    ${created_at}
                                                </span>
                                            </div>
                                            <div class="d-bot">
                                                <p>
                                                    ${text}
                                                </p> 
                                            </div>
                                        </div>
                                    </li>`;
                        $('#new_reply').append(new_reply);
                        $('#replier-comment-text').val('');
                        $('#replier-comment-name').val('');
                        $('#replier-comment-email').val('');
                        $('#replier-comment-phone').val('');
                    },
                    error: function(error) {
                        console.log(error2);
                    }
                });
            }
        });
    });
</script>
