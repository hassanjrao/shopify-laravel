@extends('layouts.front')

<link rel="stylesheet" href="{{ asset('front-assets/cart.css') }}">

@section('content')
    <div id="shopify-section-template--20954407764297__cart-items" class="shopify-section">

        <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-totalsfa6c.css') }}" rel="stylesheet" type="text/css"
            media="all" />

        <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-discountseca3.css') }}" rel="stylesheet"
            type="text/css" media="all" />
        <style data-shopify="">
            .section-template--20954407764297__cart-items-padding {
                padding-top: 27px;
                padding-bottom: 27px;
            }

            @media screen and (min-width: 750px) {
                .section-template--20954407764297__cart-items-padding {
                    padding-top: 36px;
                    padding-bottom: 36px;
                }
            }
        </style>

        <style>
            .cart-item-list {
                margin: 10px 0 40px;
                width: 100%;
            }

            .content-divider {
                margin-bottom: 20px;
                padding-bottom: 20px;
                border-bottom: 1px solid #e2e2e2;
            }

            .cc-animate-enabled [data-cc-animate].-in {
                transition: opacity .7s, transform .7s;
                opacity: 1;
            }

            .cc-animate-enabled [data-cc-animate] {
                opacity: 0;
            }

            .cart-item-list__head,
            .cart-item,
            .cart-item__not-image {
                display: flex;
            }

            .cc-animate-enabled [data-cc-animate].-in {
                transition: opacity .7s, transform .7s;
                opacity: 1;
            }

            .cart-item {
                border-top: 1px solid #e2e2e2;
                padding-top: 40px;
                padding-bottom: 40px;
            }

            .cart-item__image {
                width: 130px;
                padding-inline-end: 30px;
            }

            .cart-item-list-heading,
            .cart-item__column {
                flex-shrink: 0;
            }

            .cart-item__not-image {
                flex-grow: 1;
            }

            .cart-item-list__head,
            .cart-item,
            .cart-item__not-image {
                display: flex;
            }

            .cart-item__description {
                flex: 1 1;
                padding-inline-end: 30px;
            }

            .small-text {
                font-size: 12px;
                line-height: 1.4em;
            }
        </style>
        <cart-items class="gradient color-scheme-1 isolate is-empty">
            <div class="page-width">
                <div class="title-wrapper-with-link">
                    <h1 class="title title--primary">Your cart</h1>
                    <a href="{{ route('home') }}" class="underlined-link">Continue shopping</a>
                </div>

                @if (count($cartItems) == 0)
                    <div class="cart__warnings">
                        <h1 class="cart__empty-text">Your cart is empty</h1>
                        <a href="{{ route('home') }}" class="button">
                            Continue shopping
                        </a>
                    </div>
                @else
                    {{-- table with listing of cart items --}}
                    <form action="/cart" method="post" id="cartform">
                        <div class="cart-item-list content-divider">
                            <div class="cart-item-list__head cc-animate-init -in cc-animate-complete" data-cc-animate="">
                                <div class="cart-item-list-heading cart-item-list-heading--product">Product</div>
                                <div class="cart-item-list-heading cart-item-list-heading--price">Price</div>
                                <div class="cart-item-list-heading cart-item-list-heading--quantity">Quantity</div>
                                <div class="cart-item-list-heading cart-item-list-heading--total">Total</div>
                            </div>
                            <div class="cart-item-list__body">

                                @foreach ($cartItems as $cartItem)
                                    @foreach ($cartItem as $ind =>$item)
                                    @if($ind != 'product')

                                        <div class="cart-item product-core-t-shirt-black cc-animate-init -in cc-animate-complete"
                                            data-cc-animate="">
                                            <div class="cart-item__column cart-item__image"
                                                id="cart-item-image-44388090282211">
                                                <a href="{{ route('products.show',$cartItem['product']->id) }}">
                                                    <div class="rimage-outer-wrapper" style="max-width: 100px">
                                                        <div class=" ">
                                                            <img class="rimage__image"
                                                                src="{{ $cartItem['product']->first_image }}"
                                                                alt="">

                                                        </div>
                                                    </div>

                                                </a>
                                            </div>

                                            <div class="cart-item__not-image">
                                                <div class="cart-item__column cart-item__description">
                                                    <div>
                                                        <a class="name"
                                                            href="{{ route('products.show',$cartItem['product']->id) }}">{{ $cartItem['product']->name }}</a>
                                                        <div class="small-text">
                                                            <div class="variant">{{ $item['size'] }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="cart-item__column cart-item__price">

                                                    <div><span class="theme-money">{{ env('APP_CURRENCY'). $cartItem['product']->price }}</span></div>

                                                </div>


                                                <div class="cart-item__column cart-item__quantity">
                                                    <div class="quantity" data-url="/products/signature-hoodie-sex-grey-1"
                                                        data-section="template--20954407993673__main">

                                                        <input readonly class="quantity__input" type="number" name="quantity"
                                                            id="enteredQuantity" min="1" step="1"
                                                            value="{{ $item['quantity'] }}" max="null">
                                                    </div>

                                                    <a class="remove"
                                                    href="{{ route('cart.remove', ['prod_id' => $cartItem['product']->id, 'size' => $item['size']]) }}"
                                                    >
                                                        Remove

                                                    </a>


                                                </div>

                                                <div class="cart-item__column cart-item__total" data-line="3">

                                                    <span class="theme-money">
                                                        {{ env('APP_CURRENCY'). $cartItem['product']->price * $item['quantity'] }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                                @endforeach


                            </div>
                        </div>

                    </form>
                @endif

            </div>
        </cart-items>


    </div>


    @if (count($cartItems) > 0)
        <div id="shopify-section-template--20954407764297__cart-footer" class="shopify-section cart__footer-wrapper">

            <style data-shopify>
                .section-template--20954407764297__cart-footer-padding {
                    padding-top: 15px;
                    padding-bottom: 30px;
                }

                @media screen and (min-width: 750px) {
                    .section-template--20954407764297__cart-footer-padding {
                        padding-top: 20px;
                        padding-bottom: 40px;
                    }
                }
            </style>
            <div class="gradient color-scheme-1 is-empty" id="main-cart-footer"
                data-id="template--20954407764297__cart-footer">
                <div class="page-width">
                    <div class="cart__footer isolate section-template--20954407764297__cart-footer-padding">
                        <div class="cart__blocks">

                            <div class="js-contents">
                                <div></div>

                                <div class="totals">
                                    <h2 class="totals__total">Total</h2>
                                    <p class="totals__total-value">
                                        <span class="theme-money">{{ env('APP_CURRENCY'). $totalPrice }}</span>
                                    </p>
                                </div>

                                <small class="tax-note caption-large rte">Taxes, discounts and shipping calculated at
                                    checkout
                                </small>
                            </div>
                            <div class="cart__ctas">

                                <button type="submit" class="cart__update-button button button--secondary" form="cart">
                                    Update
                                </button>

                                <button type="submit" id="checkout" class="cart__checkout-button button" name="checkout"
                                    disabled form="cart">
                                    Check out
                                </button>
                            </div>
                            <div class="cart__dynamic-checkout-buttons additional-checkout-buttons">
                                <div class="dynamic-checkout__content" id="dynamic-checkout-cart"
                                    data-shopify="dynamic-checkout-cart"></div>
                            </div>

                            <div id="cart-errors"></div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    @endif
@endsection
