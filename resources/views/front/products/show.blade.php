@extends('layouts.front')

@section('content')
    <section id="shopify-section-template--20954407993673__main" class="shopify-section section">
        <section id="MainProduct-template--20954407993673__main"
            class="section-template--20954407993673__main-padding gradient color-scheme-1"
            data-section="template--20954407993673__main">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/section-main-productd84b.css') }}" rel="stylesheet"
                type="text/css" media="all">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-accordionb528.css') }}" rel="stylesheet"
                type="text/css" media="all">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-price2c49.css') }}" rel="stylesheet"
                type="text/css" media="all">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-slider8a30.css') }}" rel="stylesheet"
                type="text/css" media="all">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-rating7bad.css') }}" rel="stylesheet"
                type="text/css" media="all">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-deferred-media609e.css') }}" rel="stylesheet"
                type="text/css" media="all">

            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-product-variant-picker5175.css') }}"
                rel="stylesheet" type="text/css" media="all">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-swatch-inputde9f.css') }}" rel="stylesheet"
                type="text/css" media="all">
            <link href="{{ asset('front-assets/cdn/shop/t/1/assets/component-swatch7289.css') }}" rel="stylesheet"
                type="text/css" media="all">

            <style data-shopify="">
                .section-template--20954407993673__main-padding {
                    padding-top: 27px;
                    padding-bottom: 9px;
                }

                @media screen and (min-width: 750px) {
                    .section-template--20954407993673__main-padding {
                        padding-top: 36px;
                        padding-bottom: 12px;
                    }
                }
            </style>
            <script src="{{ asset('front-assets/cdn/shop/t/1/assets/product-infob942.js') }}" defer="defer"></script>
            <script src="{{ asset('front-assets/cdn/shop/t/1/assets/product-forme274.js') }}" defer="defer"></script>

            <div class="page-width">
                <div
                    class="product product--large product--left product--stacked product--mobile-hide grid grid--1-col grid--2-col-tablet">

                    <div class="grid__item product__media-wrapper">

                        <media-gallery id="MediaGallery-template--20954407993673__main" role="region"
                            class="product__column-sticky" aria-label="Gallery Viewer" data-desktop-layout="stacked">
                            <div id="GalleryStatus-template--20954407993673__main" class="visually-hidden" role="status">
                            </div>
                            <slider-component id="GalleryViewer-template--20954407993673__main"
                                class="slider-mobile-gutter">
                                <ul id="Slider-Gallery-template--20954407993673__main"
                                    class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile"
                                    role="list">
                                    <li id="Slide-template--20954407993673__main-46179475915081"
                                        class="product__media-item grid__item slider__slide is-active scroll-trigger animate--fade-in"
                                        data-media-id="template--20954407993673__main-46179475915081">

                                        <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
                                            style="--ratio: 1.0; --preview-ratio: 1.0;">
                                            <div class="product__media media">
                                                <img src="{{ $product->first_image }}"
                                                    alt=""
                                                    width="1946" height="1946"
                                                    sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                                            </div>

                                            <modal-opener
                                                class="product__modal-opener product__modal-opener--image no-js-hidden"
                                                data-modal="#ProductModal-template--20954407993673__main">
                                                <span
                                                    class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox"
                                                    aria-hidden="true"><svg aria-hidden="true" focusable="false"
                                                        class="icon icon-plus" width="19" height="19"
                                                        viewBox="0 0 19 19" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z"
                                                            fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z"
                                                            fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>

                                                <link
                                                    href="//carsicko-uk.com/cdn/shop/t/1/assets/component-loading-spinner.css?v=116724955567955766481709804863"
                                                    rel="stylesheet" type="text/css" media="all">

                                                <div class="loading__spinner hidden">
                                                    <svg aria-hidden="true" focusable="false" class="spinner"
                                                        viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                        <circle class="path" fill="none" stroke-width="6"
                                                            cx="33" cy="33" r="30"></circle>
                                                    </svg>
                                                </div>
                                                <div class="product__media media media--transparent">
                                                    <img src="//carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=1946"
                                                        alt=""
                                                        srcset="//carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=246 246w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=493 493w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=600 600w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=713 713w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=823 823w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=990 990w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=1100 1100w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=1206 1206w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=1346 1346w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=1426 1426w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=1646 1646w, //carsicko-uk.com/cdn/shop/products/Dkldhp7A_ed439dfd-87ad-4afe-95b1-8b67d2b5660e.png?v=1709833404&amp;width=1946 1946w"
                                                        width="1946" height="1946" class="image-magnify-lightbox"
                                                        sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                                                </div>

                                            </modal-opener>
                                        </div>

                                    </li>

                                    @foreach ($product->productImages() as $ind=> $image)

                                    <li id="Slide-template--20954407993673__main-46179475947849"
                                        class="product__media-item grid__item slider__slide scroll-trigger animate--fade-in"
                                        data-media-id="template--20954407993673__main-46179475947849">

                                        <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
                                            style="--ratio: 1.0; --preview-ratio: 1.0;">
                                            <div class="product__media media">
                                                <img src="{{ $image->getUrl() }}"
                                                    alt=""
                                                    width="1946" height="1946" loading="lazy"
                                                    sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                                            </div>

                                            <modal-opener
                                                class="product__modal-opener product__modal-opener--image no-js-hidden"
                                                data-modal="#ProductModal-template--20954407993673__main">
                                                <span
                                                    class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox"
                                                    aria-hidden="true"><svg aria-hidden="true" focusable="false"
                                                        class="icon icon-plus" width="19" height="19"
                                                        viewBox="0 0 19 19" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z"
                                                            fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z"
                                                            fill="currentColor"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>

                                                <link
                                                    href="//carsicko-uk.com/cdn/shop/t/1/assets/component-loading-spinner.css?v=116724955567955766481709804863"
                                                    rel="stylesheet" type="text/css" media="all">

                                                <div class="loading__spinner hidden">
                                                    <svg aria-hidden="true" focusable="false" class="spinner"
                                                        viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                        <circle class="path" fill="none" stroke-width="6"
                                                            cx="33" cy="33" r="30"></circle>
                                                    </svg>
                                                </div>
                                                <div class="product__media media media--transparent">
                                                    <img src="//carsicko-uk.com/cdn/shop/products/EQVFH_tb_323970a2-d084-4ee8-953a-17af6b5ffd8b.png?v=1709833404&amp;width=1946"
                                                        alt=""
                                                        width="1946" height="1946" loading="lazy"
                                                        class="image-magnify-lightbox"
                                                        sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                                                </div>
                                                <button
                                                    class="product__media-toggle quick-add-hidden product__media-zoom-lightbox"
                                                    type="button" aria-haspopup="dialog" data-media-id="46179475947849">
                                                    <span class="visually-hidden">
                                                        Open media 2 in modal
                                                    </span>
                                                </button>
                                            </modal-opener>
                                        </div>

                                    </li>

                                    @endforeach

                                </ul>
                                <div class="slider-buttons no-js-hidden quick-add-hidden">
                                    <button type="button" class="slider-button slider-button--prev" name="previous"
                                        aria-label="Slide left" disabled="disabled">
                                        <svg aria-hidden="true" focusable="false" class="icon icon-caret"
                                            viewBox="0 0 10 6">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                                fill="currentColor">
                                            </path>
                                        </svg>

                                    </button>
                                    <div class="slider-counter caption">
                                        <span class="slider-counter--current">NaN</span>
                                        <span aria-hidden="true"> / </span>
                                        <span class="visually-hidden">of</span>
                                        <span class="slider-counter--total">-Infinity</span>
                                    </div>
                                    <button type="button" class="slider-button slider-button--next" name="next"
                                        aria-label="Slide right" disabled="disabled">
                                        <svg aria-hidden="true" focusable="false" class="icon icon-caret"
                                            viewBox="0 0 10 6">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                                fill="currentColor">
                                            </path>
                                        </svg>

                                    </button>
                                </div>
                            </slider-component>
                        </media-gallery>

                    </div>


                    <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
                        <div class="product__info-container product__column-sticky">
                            <div class="product__title">
                                <h1>{{ $product->name }}</h1>

                            </div>

                            <div id="Quantity-Form-template--20954407993673__main"
                                class="product-form__input product-form__quantity">

                                <label class="quantity__label form__label" for="Quantity-template--20954407993673__main">
                                    Quantity

                                </label>
                                <div class="price-per-item__container">
                                    <div class="quantity" data-url="/products/signature-hoodie-sex-grey-1"
                                        data-section="template--20954407993673__main">

                                        <input class="quantity__input" type="number" name="quantity"
                                            id="enteredQuantity" min="1" step="1" value="1"
                                            max="null">
                                    </div>
                                </div>
                            </div>

                            <div id="variant-selects-template--20954407993673__main">
                                <fieldset class="js product-form__input product-form__input--pill">
                                    <legend class="form__label">Size</legend>

                                    @foreach ($product->sizes as $ind=> $size)

                                    <input type="radio" id="template--20954407993673__main-1-{{ $ind }}" name="Size"
                                        value="XS" form="product-form-template--20954407993673__main" checked="">
                                    <label for="template--20954407993673__main-1-{{ $ind }}">
                                        {{ $size }}
                                    </label>

                                    @endforeach



                                </fieldset>

                            </div>

                            <div>
                                <div class="product-form" data-hide-errors="false">



                                    <div class="product-form__buttons">
                                        <button type="button" name="add" id="addCartBtn" onclick="addCart()"
                                            class="product-form__submit button button--full-width button--secondary">
                                            <span>
                                                Add to cart
                                            </span>

                                        </button>

                                    </div>

                                </div>

                            </div>





                        </div>
                    </div>
                </div>









            </div>
        </section>


    </section>
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function addCart() {

            let size = document.querySelector('input[name="Size"]:checked').value;
            let quantity = document.getElementById('enteredQuantity').value;

            let data = {
                product_id: '{{ $product->id }}',
                size: size,
                quantity: quantity,
            }

            let cartCount = document.getElementById('cartCount').innerText;

            if (cartCount == '') {
                cartCount = 0;
            }

            cartCount = parseInt(cartCount) + parseInt(quantity);

            document.getElementById('cartCount').innerText = cartCount;

            $.ajax({
                type: 'POST',
                url: '{{ route('cart.store') }}',
                data: data,
                // with csrf token
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                }
            });


        }
    </script>
@endpush
