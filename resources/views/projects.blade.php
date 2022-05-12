@extends('layouts.app')

@section('content')
    <section class="content-projects">
        <div class="show-content">
            <div style="z-index: 980;" class="d-flex justify-content-end" uk-sticky="position: bottom; bottom: ~ .online-footer">
                <a href="#" uk-totop></a>
            </div>
            <section class="project-filler" style="background-color: #F5F5F5;">
                <div class="container uk-margin-medium-top">
                    <div class="col-12 col-xl-10">
                        <form class="project-form search">
                            <div class="row search-p-mobile py-4 py-xl-0">
                                <div class="col-12 col-md-4 col-xl pl-md-0 my-2 my-xl-4">
                                    <select class="uk-select px-3" style="font-size: 16px;border-radius: 20px;border-color: #ffffff;background-position: 95%;color: #333333;">
                                        <option value="">Project Name</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 col-xl pl-md-0 my-2 my-xl-4">
                                    <select class="uk-select px-3" style="font-size: 16px;border-radius: 20px;border-color: #ffffff;background-position: 95%;color: #333333;">
                                        <option value="">Location / Transport</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 col-xl pl-md-0 my-2 my-xl-4 d-table">
                                    <label class="d-table-cell align-middle px-3"><input class="uk-checkbox" type="checkbox" style="border-color: #333333;font-size: 14px;">
                                        READY TO MOVE</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="project-list">
                <div class="container width-xxl uk-margin-large-top uk-margin-large-bottom">
                    <div class="row">
                        @for($i = 0 ; $i < 6 ; $i++)
                            <div class="col-md-4 mb-4 uk-margin-medium-bottom">
                                <article class="card-project">
                                    <a href="#" class="box-click">
                                        <figure class="logo">
                                            <img src="images/theme/example-project.svg" alt="example logo alt">
                                        </figure>
                                        <figure class="image my-0">
                                            <img src="images/theme/example-img-banner-01.jpg" alt="example image alt">
                                            <div class="status">
                                                <p class="new mb-2">New</p>
                                                <p class="move mb-0">Ready to move</p>
                                            </div>
                                            <span class="name">Whizdom The Forestias</span>
                                        </figure>
                                        <section class="detail">
                                            <p class="property-type">condo</p>
                                            <p class="online-content color-link font-bold mb-0">เริ่มต้น 3.99 ล้านบาท
                                            </p>
                                            <h3 class="online-content sub-title my-0">Mulberry Grove The Forestias
                                                                                      Condominiums</h3>
                                            <p class="online-content sub-text location">
                                                <img src="http://e-booking.local/images/icons/icon-location.svg" alt="">
                                                Khlong Toei, Bangkok Near BTS Ekkamai
                                            </p>
                                        </section>
                                        <div class="button link d-block text-center">UNIT IN PROJECT</div>
                                    </a>
                                </article>
                            </div>
                        @endfor
                    </div>

                </div>
            </section>

            <hr class="hr-between">

            <section class="project-unit">
                <div class="container uk-margin-xlarge-bottom uk-margin-large-top">
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h2 class="online-content title mb-0">Featured Units</h2>
                            <a href="#" class="d-none d-md-block button more-text hidden-md">All Units</a>
                        </div>
                        <p>The list of properties that reach great popularity</p>
                    </div>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                        <ul class="uk-slider-items uk-grid uk-grid-small">
                            @for($i = 0; $i < 4 ; $i++ )
                                <li class="uk-width-4-5 uk-width-1-4@s">
                                    <article class="card-project-unit">
                                        <section class="icons">
                                            <a href="#" class="icon icon-fav">
                                                <img src="{{asset( config('images.icons.favorite'))}}" alt="favorite icon">
                                            </a>
                                            <a href="#" class="icon icon-compare">
                                                <img src="{{asset( config('images.icons.compare'))}}" alt="compare icon">
                                            </a>
                                        </section>
                                        <a href="#" class="box-click">
                                            <figure class="image">
                                                <img src="images/theme/example-img-banner-01.jpg" alt="example image alt">
                                                <div class="status">
                                                    <p class="move mb-0">Ready to move</p>
                                                </div>
                                                <span class="unit-no">103A01</span>
                                            </figure>
                                            <section class="detail">
                                                <div class="type">
                                                    <p class="property-type">condo</p>
                                                    <div class="sub-type">
                                                        <p class="bedroom">
                                                            <img src="{{asset( config('images.icons.bed'))}}"
                                                                 alt=""> <b>1</b></p>
                                                        <p class="sqm"><img src="{{asset( config('images.icons.sqm'))}}"
                                                                            alt=""> <b>33.60</b>Sq.m.
                                                        </p>
                                                    </div>
                                                </div>
                                                <h3 class="online-content sub-title my-0">Mulberry Grove The Forestias
                                                                                          Condominiums</h3>
                                                <p class="online-content sub-text location">
                                                    <img src="{{asset( config('images.icons.location'))}}" alt="">
                                                    Khlong Toei, Bangkok Near BTS Ekkamai
                                                </p>
                                            </section>
                                            <section class="booking">
                                                <div class="price">
                                                    <p class="price-booking">จอง 10,000</p>
                                                    <p class="price-show">14,721,000 <span>15,721,000</span></p>
                                                </div>
                                                <div class="booking-button">Book now</div>
                                            </section>
                                        </a>
                                    </article>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-12 uk-text-center d-block d-md-none pt-4">
                        <a href="#" class="button link">All Unit</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
