@extends('layouts.app')

@section('content')

    <main class="main-content col-xs-12">
        <div class="bread-crumb col-xs-12" style="background-image: url({{asset('uploads/about_us/hero.png')}})">
            <div class="container">
                <h3>{{ trans('front.favourite_list') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/site') }}">{{ trans('front.home') }}</a>
                    </li>
                    <li>{{ trans('front.favourite_list') }}</li>
                </ul>
            </div>
        </div>
        <div class="cart-wrap fav-wrap col-xs-12">
            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ trans('front.remove') }}</th>
                                <th>{{ trans('dashboard.details') }}</th>
                                <th>{{ trans('dashboard.stock') }}</th>
                                <th>اضف للسلة</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($all_product as $product)
                            
                                <tr>
                                    <td>
                                        <a href="#" class="removeFromFavouriteList addToFavouriteList t-remove"
                                            data-product-id="{{ $product->id }}">
                                            <i class="la la-trash"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="t-product">
                                            <div class="t-img">
                                                <img src="{{$product->images[0]->photo}}" alt="">
                                                <a href="#"></a>
                                            </div>
                                            <div class="t-data">
                                                <a href="#">{{ $product->product_name }}</a>
                                                <span>{{$product->description }}</span>
                                                <p>{{ $product->special_price }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ trans('dashboard.availability') }}</td>
                                    <td>
                                        <a href="#" class="btn">اضف للسلة</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
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
    

    $(document).ready(function ()
    {
        
        countFav();
        
        function countFav(){
            $.ajax({
                method: 'GET',
                url: '/count-fav-prod',
                success: function (response){
                    
                    $('.countFavProd').html('');
                    $('.countFavProd').html(response.count);

                }

            });
        }

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

                countFav();

            }
        });
    });

    $(document).on('click', '.removeFromFavouriteList', function(e) {
        e.preventDefault();
        var token = $('input[name=_token]');
        @guest()
            $('.not-loggedin-modal').css('display','block');
        @endguest
        $.ajax({
            type: 'delete',
            url: "{{ Route('favourite.destroy') }}",
            data: {
                'productId': $(this).attr('data-product-id'),
            },
            headers: {
                'X-CSRF-TOKEN': token.val()
            },
            success: function(data) {
                location.reload();
            }
        });
    });

    
</script>
