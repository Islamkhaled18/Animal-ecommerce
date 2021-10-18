<div id="" class="modal fade quickview in quickview-modal-product-details-{{ $product->id }}" tabindex="-1"
    role="dialog" style="display: hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-product-id="{{ $product->id }}" data-dismiss="modal"
                    aria-label="Close"><i class="material-icons close">close</i></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-md-5 col-sm-5 divide-right">
                        <div class="images-container bottom_thumb">
                            <div class="product-cover">
                                <img class="js-qv-product-cover img-fluid"
                                    src="{{ $product->images[0]->photo ?? '' }}" alt="" title="" style="width:100%;"
                                    itemprop="image">
                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                    <i class="fa fa-expand"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <h1 class="product-name">{{ $product->product_name }}</h1>

                        <div class="product-prices">
                            <div class="product-price " itemprop="offers" itemscope=""
                                itemtype="https://schema.org/Offer">
                                <div class="current-price">
                                    <span itemprop="price" class="price">{{ $product->special_price }}</span>

                                </div>
                            </div>
                            <div class="tax-shipping-delivery-label">
                                Tax included ..!
                            </div>
                        </div>

                        <div id="product-description-short" itemprop="description">
                            <p> {!! $product->description !!}</p>
                        </div>
                        <div class="product-actions">
                            <form action="" method="post" id="add-to-cart-or-refresh">
                                @csrf
                                <input type="hidden" name="id_product" value="{{ $product->id }}"
                                    id="product_page_product_id">
                                <div class="product-add-to-cart in_border">
                                    <div class="add">
                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart"
                                            type="submit">
                                            <div class="icon-cart">
                                                <i class="shopping-cart"></i>
                                            </div>
                                            <span>Add to cart</span>
                                        </button>
                                    </div>

                                    <a class="addToFavouriteList  wishlistProd_22" href="#"
                                        data-product-id="{{ $product->id }}">

                                        <i class="fa fa-heart"></i>
                                        <span>{{ trans('front.add_to_favourite_list') }}</span>
                                    </a>

                                    <div class="clearfix"></div>

                                    <div id="product-availability" class="info-stock mt-20">
                                        <label class="control-label">Availability:</label>
                                        {{ $product->in_stock ? 'in stock' : 'out of stock' }}
                                    </div>
                                    <p class="product-minimal-quantity mt-20">
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
                if (data.favourited)
                    $('.alert-modal').css('display', 'block');
                else
                    $('.alert-modal2').css('display', 'block');

            }
        });
    });