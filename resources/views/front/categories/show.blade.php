@extends('layouts.front')


@section('content')
    <div id="shopify-section-template--20954407797065__banner" class="shopify-section section">
        <link href="../cdn/shop/t/1/assets/component-collection-hero690a.css?v=125511329265726850081709804857"
            rel="stylesheet" type="text/css" media="all" />
        <style data-shopify>
            @media screen and (max-width: 749px) {
                .collection-hero--with-image .collection-hero__inner {
                    padding-bottom: calc(4px + 2rem);
                }
            }
        </style>
        <div class="collection-hero color-scheme-1 gradient">
            <div class="collection-hero__inner page-width  scroll-trigger animate--fade-in">
                <div class="collection-hero__text-wrapper">
                    <h1 class="collection-hero__title">
                        {{ $category->name }}
                    </h1>
                    <div class="collection-hero__description rte"></div>
                </div>
            </div>
        </div>


    </div>
    <div id="shopify-section-template--20954407797065__product-grid" class="shopify-section section">
        <link href="../cdn/shop/t/1/assets/template-collectioneb1e.css?v=58558206033505836701709804908" rel="stylesheet"
            type="text/css" media="all" />
        <link href="../cdn/shop/t/1/assets/component-card452d.css?v=170127402091165654191709804854" rel="stylesheet"
            type="text/css" media="all" />
        <link href="../cdn/shop/t/1/assets/component-price2c49.css?v=70172745017360139101709804869" rel="stylesheet"
            type="text/css" media="all" />

        <style data-shopify>
            .section-template--20954407797065__product-grid-padding {
                padding-top: 27px;
                padding-bottom: 27px;
            }

            @media screen and (min-width: 750px) {
                .section-template--20954407797065__product-grid-padding {
                    padding-top: 36px;
                    padding-bottom: 36px;
                }
            }
        </style>
        <div class="section-template--20954407797065__product-grid-padding gradient color-scheme-1">
            <div class="">

                <div class="product-grid-container scroll-trigger animate--slide-in" id="ProductGridContainer" data-cascade>
                    <div class="collection page-width">
                        <div class="loading-overlay gradient"></div>
                        <ul id="product-grid" data-id="template--20954407797065__product-grid"
                            class="grid product-grid grid--2-col-tablet-down grid--4-col-desktop">

                            @foreach ($category->products as $product)
                                <li class="grid__item scroll-trigger animate--slide-in" data-cascade
                                    style="--animation-order: 1;">



                                    <div class="card-wrapper product-card-wrapper underline-links-hover">
                                        <div class=" card card--standard card--media" style="--ratio-percent: 100.0%;">
                                            <div class="card__inner color-scheme-2 gradient ratio"
                                                style="--ratio-percent: 100.0%;">
                                                <div class="card__media">
                                                    <div class="media media--transparent media--hover-effect">

                                                        <img src="{{ $product->first_image }}"
                                                            sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="SIGNATURE HOODIE SEX GREY" class="motion-reduce"
                                                            width="1536" height="1536">

                                                    </div>
                                                </div>
                                                <div class="card__content">
                                                    <div class="card__information">
                                                        <h3 class="card__heading">
                                                            <a href="{{ route('products.show', $product->id) }}"
                                                                id="StandardCardNoMediaLink-template--20954407797065__product-grid-8929244971337"
                                                                class="full-unstyled-link"
                                                                aria-labelledby="StandardCardNoMediaLink-template--20954407797065__product-grid-8929244971337 NoMediaStandardBadge-template--20954407797065__product-grid-8929244971337">
                                                                {{ $product->name }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="card__badge bottom left"><span
                                                            id="NoMediaStandardBadge-template--20954407797065__product-grid-8929244971337"
                                                            class="badge badge--bottom-left color-scheme-4">Sale</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__content">
                                                <div class="card__information">
                                                    <h3 class="card__heading h5"
                                                        id="title-template--20954407797065__product-grid-8929244971337">
                                                        <a href="{{ route('products.show', $product->id) }}"
                                                            id="CardLink-template--20954407797065__product-grid-8929244971337"
                                                            class="full-unstyled-link"
                                                            aria-labelledby="CardLink-template--20954407797065__product-grid-8929244971337 Badge-template--20954407797065__product-grid-8929244971337">
                                                            {{ $product->name }}
                                                        </a>
                                                    </h3>
                                                    <div class="card-information"><span class="caption-large light"></span>
                                                        <div class="price  price--on-sale">
                                                            <div class="price__container">

                                                                <div class="price__sale">
                                                                    <span
                                                                        class="visually-hidden visually-hidden--inline">Regular
                                                                        price</span>
                                                                    <span
                                                                        class="visually-hidden visually-hidden--inline">Sale
                                                                        price</span>
                                                                    <span
                                                                        class="price-item price-item--sale price-item--last">
                                                                        {{ env('APP_CURRENCY') }}30.00
                                                                    </span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="card__badge bottom left"><span
                                                        id="Badge-template--20954407797065__product-grid-8929244971337"
                                                        class="badge badge--bottom-left color-scheme-4">Sale</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
