@extends('layouts.front')

@section('content')

    <section id="shopify-section-template--20954407895369__main" class="shopify-section section">
        <link href="{{ asset('front-assets/cdn/shop/t/1/assets/section-main-page579e.css') }}" type="text/css" media="all">
        <style data-shopify="">
            .section-template--20954407895369__main-padding {
                padding-top: 27px;
                padding-bottom: 27px;
            }

            @media screen and (min-width: 750px) {
                .section-template--20954407895369__main-padding {
                    padding-top: 36px;
                    padding-bottom: 36px;
                }
            }
        </style>
        <div class="page-width page-width--narrow section-template--20954407895369__main-padding">
            <h1 class="main-page-title page-title h0 scroll-trigger animate--fade-in">
                CONTACT US
            </h1>
        </div>


    </section>


    <section id="shopify-section-template--20954407895369__form" class="shopify-section section">
        <link href="../cdn/shop/t/1/assets/section-contact-form3692.css?v=124756058432495035521709804896" rel="stylesheet"
            type="text/css" media="all">
        <style data-shopify="">
            .section-template--20954407895369__form-padding {
                padding-top: 27px;
                padding-bottom: 27px;
            }

            @media screen and (min-width: 750px) {
                .section-template--20954407895369__form-padding {
                    padding-top: 36px;
                    padding-bottom: 36px;
                }
            }
        </style>
        <div class="color-scheme-1 gradient">
            <div class="contact page-width page-width--narrow section-template--20954407895369__form-padding">
                <h2 class="visually-hidden">Contact form</h2>
                <form method="post" action="{{ route('contact-us.store') }}">
                    @csrf

                    <h4>Email us at hello@carsicko-uk.com for queries.</h4>

                    <div class="contact__fields">
                        <div class="field">
                            <input required class="field__input" autocomplete="name" type="text" id="ContactForm-name"
                                name="name" value="" placeholder="Name">
                            <label class="field__label" for="ContactForm-name">Name</label>
                        </div>
                        <div class="field field--with-error">
                            <input required autocomplete="email" type="email" id="ContactForm-email" class="field__input"
                                name="email" spellcheck="false" autocapitalize="off" value=""
                                aria-required="true" placeholder="Email">
                            <label class="field__label" for="ContactForm-email">Email
                                <span aria-hidden="true"></span></label>
                        </div>
                    </div>
                    <div class="field">
                        <input required type="tel" id="ContactForm-phone" class="field__input" autocomplete="tel"
                            name="phone" pattern="[0-9\-]*" value="" placeholder="Phone number">
                        <label class="field__label" for="ContactForm-phone">Phone number</label>
                    </div>
                    <div class="field">
                        <textarea required rows="10" id="ContactForm-body" class="text-area field__input" name="comment"
                            placeholder="Comment"></textarea>
                        <label class="form__label field__label" for="ContactForm-body">Comment</label>
                    </div>
                    <br>
                    <div class="contact__button">
                        <button type="submit" class="button">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>


    </section>
@endsection
