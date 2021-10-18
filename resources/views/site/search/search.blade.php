@extends('layouts.app')

@section('content')

<main class="main-content col-xs-12">
    <div class="bread-crumb col-xs-12" style="background-image: url({{asset('uploads/about_us/hero.png')}})">
        <div class="container">
            <h3>{{ trans('front.search_result') }}</h3>
            <ul>
                <li>{{ trans('front.you_search_about') }}-{{$searchResult->product_name}}</li>
            </ul>
        </div>
    </div>

    <div class="search-wrap col-xs-12">
        <div class="container">
            <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                @if (!$searchResult)

                    {{'no data'}}

                @else
                    <div class="product-card">
                        <div class="p-inner">
                            <div class="p-img">
                                <div class="p-actions">
                                    <a href="#" data-tool="tooltip" title="اضف للسلة" data-placement="right">
                                        <i class="las la-shopping-bag"></i>
                                    </a>
                                    <a href="#" data-tool="tooltip" title="اضف للمفضلة" data-placement="right">
                                        <i class="las la-heart"></i>
                                    </a>
                                    <a href="#" data-tool="tooltip" title="عرض سريع" data-placement="right">
                                        <i class="las la-search"></i>
                                    </a>
                                    <a href="#" data-tool="tooltip" title="اضف للمقارنة" data-placement="right">
                                        <i class="las la-sync"></i>
                                    </a>
                                </div>
                                <img src="{{ $searchResult->images[0]->photo }}" alt="">
                            </div>
                            <div class="p-data">
                                <a href="{{ route('products', $searchResult->id) }}">{{$searchResult->product_name}}</a>
                                <p>
                                    <span>{{$searchResult->special_price}}</span>
                                    <span class="old-price">{{$searchResult->price}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                @endif
                
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