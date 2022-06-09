@extends('layouts.app')

@section('content')
    <section class="content-unit-lists">
        <div class="show-content">
            <section class="online-scroll-top">
                <div class="container-fluid position-absolute">
                    <div class="d-flex justify-content-end btn-toppage" uk-sticky="position: bottom; bottom: ~ .online-footer">
                        <a href="#" uk-totop></a>
                    </div>
                </div>
            </section>
            <section class="unit-filter">
                <div class="container content-m-top">
                    <form class="unit-form search">
                        <div class="form-p-mobile row pl-xl-4">
                            <div class="group-form uk-width-expand@l" uk-grid>
                                <div class="columns-form col uk-grid-small uk-child-width-1-2 uk-child-width-auto@l justify-content-between" uk-grid>
                                    <div class="item-form">
                                        <select class="uk-select pl-3 pr-4">
                                            <option value="">Project Name</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                    </div>
                                    <div class="item-form">
                                        <select class="uk-select pl-3 pr-4">
                                            <option value="">Location / Transport</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                    </div>
                                    <div class="item-form">
                                        <select class="uk-select pl-3 pr-4">
                                            <option value="">Property Type</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                    </div>
                                    <div class="item-form">
                                        <select class="uk-select pl-3 pr-4">
                                            <option value="">Price</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                    </div>
                                    <div class="item-form">
                                        <select class="uk-select pl-3 pr-4">
                                            <option value="">Promotion</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                    </div>
                                    <div class="item-form">
                                        <select class="uk-select pl-3 pr-4">
                                            <option value="">Unit Type</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                    </div>
                                    <div class="item-form d-table">
                                        <label class="d-table-cell align-middle">
                                            <input class="uk-checkbox check-box" type="checkbox">
                                            READY TO MOVE
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <section class="unit-list">
                <div class="container">
                    <section class="filter-unit-list">
                        <div class="row">
                            <div class="col py-5 d-flex justify-content-between align-items-center">
                                <div class="text-all-unit">All Unit</div>
                                <button class="btn-filter-unit" href="#">
                                    ราคาจาก น้อย - มาก
                                    <img src="{{asset( config('images.icons.filter'))}}" alt="filter icon">
                                </button>
                            </div>
                        </div>
                    </section>
                    <section class="unit-project">
                        <div class="row">
                            @for($i = 0; $i < 6 ; $i++ )
                                <div class="col-12 col-md-4 col-xl-3">
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
                                </div>
                            @endfor
                        </div>

                    </section>

                </div>

            </section>

            <hr class="hr-between">
            <section class="featured-project">
                <div class="container uk-margin-xlarge-bottom uk-margin-large-top">
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h2 class="online-content title mb-0">FEATURED PROJECTS</h2>
                            <a href="#" class="d-none d-md-block button more-text hidden-md">ALL PROJECT</a>
                        </div>
                    </div>
                    <div class="row">
                        @for($i = 0 ; $i < 3 ; $i++)
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
        </div>
    </section>
@endsection
