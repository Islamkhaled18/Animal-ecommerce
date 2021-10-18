@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">

        <div class="ab-gallery col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <span>{{ trans('front.gallary') }}</span>
                    <h3>{{ trans('front.gallary_photos') }}</h3>
                </div>
                <div class="g-body col-xs-12">


                    @isset($photos)
                        @foreach($photos as $photo)
                            <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <img src="{{asset('assets/images/gallaryphotos/' . $photo->photo )}}" alt="">
                                <a href="images/blog.png" data-fancybox="images">
                                    <i class="la la-search"></i>
                                </a>
                            </div>
                        @endforeach
                    @endisset

                </div>
                
            </div>
        </div>

    </main>

@endsection