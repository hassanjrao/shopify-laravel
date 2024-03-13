@extends('layouts.front')

@section('content')
    <section id="shopify-section-template--20954407829833__image_banner" class="shopify-section section">
        <link href="{{  asset('front-assets/cdn/shop/t/1/assets/section-image-banner.css')}}"
            rel="stylesheet" type="text/css" media="all">
        <style data-shopify="">
            #Banner-template--20954407829833__image_banner::after {
                opacity: 0.0;
            }
        </style>
        <div id="Banner-template--20954407829833__image_banner"
            class="banner banner--content-align-center banner--content-align-mobile-center banner--large banner--desktop-transparent scroll-trigger animate--fade-in">
            <div class="banner__media media scroll-trigger animate--fade-in"><img
                    src="{{  asset('front-assets/cdn/shop/files/cfba6919-42dd-4390-b752-b743b9b58a9d_1728x_c91f1ae1-b612-4d80-84fd-f939452c6b76.jpg')}}"
                    alt=""
                    width="1728" height="1728.0" sizes="100vw" fetchpriority="high">
            </div>
            <div class="banner__content banner__content--bottom-center page-width scroll-trigger animate--slide-in">
                <div class="banner__box content-container content-container--full-width-mobile color-scheme-3 gradient">
                </div>
            </div>
        </div>


    </section>



    <section id="shopify-section-template--20954407829833__featured_collection_kCpNkG" class="shopify-section section">

        <div class="color-scheme-1 isolate gradient">
            <div class="collection section-template--20954407829833__featured_collection_kCpNkG-padding">
                <div class="collection__title title-wrapper title-wrapper--no-top-margin page-width">
                    <h2 class="title inline-richtext h2 scroll-trigger animate--slide-in">
                        CORE
                    </h2>
                </div>

                @php
                    $products = \App\Models\Product::where('product_category_id', 5)->get();

                @endphp

                <slider-component
                    class="slider-mobile-gutter page-width page-width-desktop scroll-trigger animate--slide-in">
                    <ul id="Slider-template--20954407829833__featured_collection_kCpNkG"
                        class="grid product-grid contains-card contains-card--product contains-card--standard grid--4-col-desktop grid--2-col-tablet-down"
                        role="list" aria-label="Slider">

                        @foreach ($products as $product)
                        {{-- @dd($product->first_image) --}}
                            <li id="Slide-template--20954407829833__featured_collection_kCpNkG-1"
                                class="grid__item scroll-trigger animate--slide-in" data-cascade=""
                                style="--animation-order: 1;">


                                <div class="card-wrapper product-card-wrapper underline-links-hover">
                                    <div class="card card--standard card--media" style="--ratio-percent: 100.0%;">
                                        <div class="card__inner color-scheme-2 gradient ratio"
                                            style="--ratio-percent: 100.0%;">
                                            <div class="card__media">
                                                <div class="media media--transparent media--hover-effect">

                                                    <img src="{{ $product->first_image }}"
                                                        sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                        alt="CORE ZIP HOODIE BLACK" class="motion-reduce" loading="lazy"
                                                        width="4261" height="4261">

                                                </div>
                                            </div>
                                            <div class="card__content">
                                                <div class="card__information">
                                                    <h3 class="card__heading">
                                                        <a href="{{ route('products.show', $product->id) }}"
                                                            id="StandardCardNoMediaLink-template--20954407829833__featured_collection_kCpNkG-8929238286665"
                                                            class="full-unstyled-link"
                                                            aria-labelledby="StandardCardNoMediaLink-template--20954407829833__featured_collection_kCpNkG-8929238286665 NoMediaStandardBadge-template--20954407829833__featured_collection_kCpNkG-8929238286665">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class="card__badge bottom left"></div>
                                            </div>
                                        </div>
                                        <div class="card__content">
                                            <div class="card__information">
                                                <h3 class="card__heading h5"
                                                    id="title-template--20954407829833__featured_collection_kCpNkG-8929238286665">
                                                    <a href="{{ route('products.show', $product->id) }}"
                                                        id="CardLink-template--20954407829833__featured_collection_kCpNkG-8929238286665"
                                                        class="full-unstyled-link"
                                                        aria-labelledby="CardLink-template--20954407829833__featured_collection_kCpNkG-8929238286665 Badge-template--20954407829833__featured_collection_kCpNkG-8929238286665">
                                                        {{ $product->name }}
                                                    </a>
                                                </h3>
                                                <div class="card-information"><span class="caption-large light"></span>
                                                    <div class="price ">
                                                        <div class="price__container">
                                                            <div class="price__regular"><span
                                                                    class="visually-hidden visually-hidden--inline">Regular
                                                                    price</span>
                                                                <span class="price-item price-item--regular">
                                                                    {{ env('APP_CURRENCY'). $product->price }}
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card__badge bottom left"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </slider-component>
            </div>
        </div>


    </section>

    <section id="shopify-section-template--20954407829833__rich_text_Dc33Nt" class="shopify-section section">


        <div class="isolate">
            <div
                class="rich-text content-container color-scheme-1 gradient rich-text--full-width content-container--full-width section-template--20954407829833__rich_text_Dc33Nt-padding">
                <div class="rich-text__wrapper rich-text__wrapper--center page-width">
                    <div class="rich-text__blocks center">
                        <h2 class="rich-text__heading rte inline-richtext h1 scroll-trigger animate--slide-in"
                            data-cascade="" style="--animation-order: 1;">

                        </h2>
                        {{-- <div class="rich-text__buttons scroll-trigger animate--slide-in" data-cascade=""
                            style="--animation-order: 2;"><a href="/collections/all" class="button button--primary">SHOP
                                MORE</a></div> --}}
                    </div>
                </div>
            </div>
        </div>


    </section>



    <section id="shopify-section-template--20954407829833__collage_axxdzm" class="shopify-section section">

        <div class="color-scheme-1 gradient isolate">
            <div class="page-width section-template--20954407829833__collage_axxdzm-padding">
                <div class="collage">
                    <div class="collage__item collage__item--image collage__item--left scroll-trigger animate--slide-in"
                        data-cascade="" style="--animation-order: 0;">
                        <div class="collage-card card-wrapper product-card-wrapper color-scheme-2 gradient">
                            <div class="media media--transparent ratio" style="--ratio-percent: 125.0%">
                                <img
                                    src="{{  asset('front-assets/cdn/shop/files/102387_1080x_5a831d1a-e46a-4254-b957-6f3ea127fd823817.jpg') }}"
                                    alt=""
                                    width="3200" height="4000" loading="lazy"
                                    sizes="(min-width: 1200px) calc((1200px - 100px) * 2 / 3 - 4px),
                                (min-width: 750px) calc((100vw - 100px) * 2 / 3 - 4px),
                                calc(100vw - 30px)">
                            </div>
                        </div>
                    </div>
                    <div class="collage__item collage__item--image collage__item--left scroll-trigger animate--slide-in"
                        data-cascade="" style="--animation-order: 1;">
                        <div class="collage-card card-wrapper product-card-wrapper color-scheme-2 gradient">
                            <div class="media media--transparent ratio" style="--ratio-percent: 125.0%"><img
                                    src="{{  asset('front-assets/cdn/shop/files/102172_1080x_849fe4de-a005-428e-abc1-a75472c2c5d5a2d3.jpg') }}"
                                    alt=""
                                    width="3200" height="4000" loading="lazy"
                                    sizes="(min-width: 1200px) calc((1200px - 100px) * 1 / 3 - 4px),
                                   (min-width: 750px) calc((100vw - 100px) * 1 / 3 - 4px),
                                   calc(100vw - 30px)">
                            </div>
                        </div>
                    </div>
                    <div class="collage__item collage__item--image collage__item--left scroll-trigger animate--slide-in"
                        data-cascade="" style="--animation-order: 0;">
                        <div class="collage-card card-wrapper product-card-wrapper color-scheme-2 gradient">
                            <div class="media media--transparent ratio" style="--ratio-percent: 125.0%"><img
                                    src="{{  asset('front-assets/cdn/shop/files/102126_1080x_c4bcb5fd-4d27-419c-8083-921fd0fab92eb554.jpg') }}"
                                    alt=""
                                    width="3200" height="4000" loading="lazy"
                                    sizes="(min-width: 1200px) calc((1200px - 100px) * 1 / 3 - 4px),
                                   (min-width: 750px) calc((100vw - 100px) * 1 / 3 - 4px),
                                   calc(100vw - 30px)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
