@extends('layouts.app')

@section('content')
    <section class="project-detail">
{{--        <section class="container-fluid card-booking uk-position-absolute">--}}
{{--            <div class="d-flex justify-content-end" uk-sticky="position: bottom; bottom: ~ .online-footer">--}}
{{--                <div class="row justify-content-end">--}}
{{--                    <div class="row pb-2">--}}
{{--                        <article class="card-project">--}}
{{--                            <a href="#" class="box-click">--}}
{{--                                <div class="button link d-block text-center">฿ 10,000</div>--}}
{{--                                <section class="detail" style="background-color: #fff;display: block;overflow: hidden;position: relative;padding: 0.625rem 0.625rem 0;">--}}
{{--                                    <p>ราคาจอง</p>--}}
{{--                                    <p class="color-link font-bold">฿ 10,000</p>--}}
{{--                                    <hr>--}}
{{--                                    <p>ช่วงราคา</p>--}}
{{--                                    <p>฿ 5.99 - 15.45 ล้านบาท</p>--}}
{{--                                    <p class="property-type">condo</p>--}}
{{--                                    <p class="online-content color-link font-bold mb-0">เริ่มต้น 3.99 ล้านบาท</p>--}}
{{--                                    <h3 class="online-content sub-title my-0">Mulberry Grove The Forestias--}}
{{--                                                                              Condominiums</h3>--}}
{{--                                    <p class="online-content sub-text location">--}}
{{--                                        <img src="http://e-booking.local/images/icons/icon-location.svg" alt=""> Khlong Toei, Bangkok Near BTS Ekkamai--}}
{{--                                    </p>--}}
{{--                                </section>--}}
{{--                            <a href="#" class="box-click">--}}
{{--                                <div class="button link d-block text-center">UNIT IN PROJECT</div>--}}
{{--                            </a>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 d-flex justify-content-end">--}}
{{--                        <a href="#" uk-totop></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <section class="container-fluid header-project position-relative">
            <article class="header-image position-relative">
                <div class="row">
                    <div class="uk-grid-collapse uk-child-width-1-3@s" uk-grid>
                        <div>
                            <div>
                                <img src="{{ asset('images/theme/example-home-highlight-01.jpg') }}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="uk-light"><img src="{{ asset('images/theme/example-home-highlight-02.jpg') }}" alt=""></div>
                        </div>
                        <div>
                            <div class="uk-light position-relative">
                                <img src="{{ asset('images/theme/example-home-highlight-01.jpg') }}" alt="">
                                <span class="uk-position-center" style="filter: invert(97%) sepia(100%) saturate(11%) hue-rotate(212deg) brightness(104%) contrast(102%);"> <img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="uk-position-bottom w-100">
                    <div class="container">
                        <button class="border-white">View more</button>
                    </div>
                </div>
            </article>
        </section>
        <section class="header-menu">
                <div class="container-fluid" style="background-color: #F2F2F2;">
                    <div class="row">
{{--                        <div class="uk-slider" uk-slider uk-navbar>--}}
{{--                            <ul class="uk-slider-items">--}}
{{--                                <li class="uk-active"><a href="#">Project Detail</a></li>--}}
{{--                                <li><a href="#">Project Layout</a></li>--}}
{{--                                <li><a href="#">Unit in Project</a></li>--}}
{{--                                <li><a href="#">Facilities</a></li>--}}
{{--                                <li><a href="#">Nearby</a></li>--}}
{{--                                <li><a href="#">Virtual Tour</a></li>--}}
{{--                            </ul>--}}

{{--                        </div>--}}
                        <nav class="uk-navbar-container" uk-navbar style="overflow-y: scroll;">
                            <div class="uk-navbar-left">
                                <ul class="uk-navbar-nav">
                                    <li class="uk-active"><a href="#">Project Detail</a></li>
                                    <li><a href="#">Project Layout</a></li>
                                    <li><a href="#">Unit in Project</a></li>
                                    <li><a href="#">Facilities</a></li>
                                    <li><a href="#">Nearby</a></li>
                                    <li><a href="#">Virtual Tour</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
        </section>
        <section class="container project-property">
            <div class="container online-content content-padding">
                <div class="uk-width-3-4">
                    <figure class="online-content image-16by9">
                        <img src="{{asset( config('images.logos.mulberry-grove'))}}" alt="@lang('nav.logo-alt')">
                    </figure>
                    <article class="property">
                        <h1 class="article-title name-project">MULBERRY GROVE THE FORESTIAS CONDOMINIUMS</h1>
                        <div class="property-detail row uk-grid uk-grid-small pb-4">
                            <p class="property-floor">
                                <img src="{{asset( config('images.icons.floor'))}}" alt=""> จำนวนชั้น 8
                            </p>
                            <p class="property-building">
                                <img src="{{asset( config('images.icons.building'))}}" alt=""> 1 Building
                            </p>
                            <p class="property-unit">
                                <img src="{{asset( config('images.icons.unit'))}}" alt=""> 287 units
                            </p>
                        </div>
                        <h2 class="article-title title-detail">PROJECT DETAIL</h2>
                        <p class="text-detail">The 6 Low-Rise Residences Of Mulberry Grove Condominiums Offer Sustainable Intergeneration Luxury Amid The Enchanting Green Spaces And Upscale Amenities Of The Forestias. Timeless Thai Design Inspires Residences That Connect You With Family, Nature, And A Warm Community. A Careful Blend Of Private And Shared Spaces Elevates Your Quality Of Life In A Magical Airy Setting, Abounding In Light And Space.​</p>
                        <h2 class="article-title title-location">PROJECT LOCATION</h2>
                        <p class="text-location">Khlong Toei, Bangkok Near BTS Ekkamai</p>
                        <h2 class="article-title title-area">PROJECT AREA</h2>
                        <p class="text-area">5 - 3 - 75 Rais</p>
                        <h2 class="article-title title-unit-type">UNIT TYPE</h2>
                            <div class="col-12 detail-unit-type">
                                <table class="uk-table uk-table-divider">
                                    <tbody>
                                    @for($i = 1; $i <= 4; $i++)
                                        <tr class="row-unit-type">
                                            <td class="unit-type">
                                                <p>
                                                    <img src="{{asset( config('images.icons.bed'))}}" alt=""> {{ $i }} Badroom
                                                </p>
                                            </td>
                                            @for($y = 0; $y < 2 ; $y++)
                                                <td class="unit-detail">test</td>
                                            @endfor
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        <h2 class="article-title title-building">NUMBER OF BUILDING</h2>
                        <p class="text-building">1 Building</p>
                        <h2 class="article-title title-unit">TOTAL UNIT</h2>
                        <p class="text-unit">Residential 287 units, Commercial 2 units</p>
                        <h2 class="article-title title-status">PROJECT STATUS</h2>
                        <p class="text-status">Ready to move in</p>
                    </article>
                </div>
            </div>
        </section>
        <hr class="hr-between">

        <section class="project-layout">
            <div class="container online-content content-padding">
                <div class="uk-width-3-4">
                    <h2 class="article-title title-project-layout">PROJECT LAYOUT</h2>
                    <article class="border border-secondary">
                        <section class="tabs-box uk-padding">
                            <ul class="uk-flex-center" uk-tab>
                                <li class="uk-active"><a href="#">PROJECT LAYOUT</a></li>
                                <li><a href="#">UNIT LAYOUT</a></li>
                            </ul>
                            <ul class="uk-switcher uk-margin">
                                <li>
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell">Building</p>
                                            <select class="col-8 uk-select px-3">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <p>Floor</p>
                                            <select class="uk-select px-3">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <figure class="online-content image-16by9">
                                        <img class="img-fluid" src="{{asset('images/projects/ex-project-layout@2x.png')}}" alt="@lang('nav.logo-alt')">
                                    </figure>
                                    <div class="col-12 uk-text-center pt-4">
                                        <a href="#" class="button link">Download Plan</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Building Unit</p>
                                            <select class="uk-select px-3">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <p>Floor Unit</p>
                                            <select class="uk-select px-3">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <figure class="online-content image-16by9">
                                        <img class="img-fluid" src="{{asset('images/projects/ex-project-layout@2x.png')}}" alt="@lang('nav.logo-alt')">
                                    </figure>
                                </li>
                            </ul>
                        </section>
                    </article>
                </div>
            </div>
        </section>
        <section class="project-tour">
            <div class="container-fluid">
                <div class="row">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://my.matterport.com/show/?m=3xbeEuM4Y4W" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="project-unit">
            <div class="container online-content content-padding">
                <div class="mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <h2 class="online-content title mb-0">UNIT IN PROJECT</h2>
                        <a href="#" class="d-none d-md-block button more-text hidden-md">ALL UNIT</a>
                    </div>
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
                                            <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="example image alt">
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
        <hr class="hr-between">
        <section class="project-facility">
            <div class="container online-content content-padding">
                <div class="row">
                    <h2 class="article-title title-project-facility">FACILITIES</h2>
                </div>
                <div class="row">
                    <article class="facility-indoor">
                        <h3>INDOOR</h3>
                        <div class="row uk-list uk-list-disc">
                            @for($i = 0 ; $i < 6 ; $i++)
                                    <div class="uk-width-1-3 mt-0">List item 1</div>
                            @endfor
                        </div>
                    </article>
                    <article class="facility-outdoor">
                        <h3>OUTDOOR</h3>
                        <div class="row uk-list uk-list-disc">
                            @for($i = 1 ; $i < 16 ; $i++)
                                    <div class="uk-width-1-3 mt-0">List item {{ $i }}</div>
                            @endfor
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="project-nearby" style="background-color: #F2F2F2;">
{{--            <div class="container-fluid content-padding">--}}
                <div class="container online-content content-padding">
                    <div class="row">
                        <h2 class="article-title title-project-nearby">NEARBY</h2>
                    </div>
                        <div class="row">
                            <div class="uk-child-width-1-3" uk-grid>
                                <article class="item-nearby">
                                    <h3>INDOOR</h3>
                                    <ul class="uk-list uk-list-disc">
                                        <li>List item 1</li>
                                        <li>List item 2</li>
                                        <li>List item 3</li>
                                    </ul>
                                </article>
                                <article class="item-nearby">
                                    <h3>INDOOR</h3>
                                    <ul class="uk-list uk-list-disc">
                                        <li>List item 1</li>
                                        <li>List item 2</li>
                                        <li>List item 3</li>
                                        <li>List item 4</li>
                                        <li>List item 5</li>
                                    </ul>
                                </article>
                                @for($i=0;$i<3;$i++)
                                    <article class="item-nearby">
                                        <h3>INDOOR</h3>
                                        <ul class="uk-list uk-list-disc">
                                            <li>List item 1</li>
                                            <li>List item 2</li>
                                            <li>List item 3</li>
                                        </ul>
                                    </article>
                                @endfor
                            </div>
                        </div>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
        </section>

        <section class="project-map">
            <div class="container-fluid">
                <div class="row">
                    <iframe src="https://snazzymaps.com/embed/227963" width="100%" style="height: 65vh!important;" class="map-iframe"></iframe>
                </div>
            </div>
        </section>

        <section class="project-preview">
            <div class="container online-content content-padding">
                <div class="mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <h2 class="online-content title mb-0">PROJECT PREVIEW</h2>
                        <a href="#" class="d-none d-md-block button more-text hidden-md">VIEW MORE</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <article class="card-video-highlight">
                            <a href="#" class="box-click">
                                <div class="image-box">
                                    <figure class="online-content image-16by9 mb-1">
                                        <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="">
                                        <span class="icon"> <img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                                    </figure>
                                </div>
                                <div class="detail">
                                    <span class="tag">พรีวิวโครงการ</span>
                                    <p class="online-content sub-title mb-0">Project Highlight : Mulberry Grove The
                                                                             Forestias CondO
                                    </p>
                                    <span class="online-content sub-text-small">PUBLISHED : 23 AUG 2021 AT 06:09</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    <div class="col-md-6">
                        @for ($i = 0; $i < 3; $i++)
                            <article class="card-video">
                                <a href="#" class="box-click">
                                    <div class="image-box">
                                        <figure class="online-content image-16by9 mb-0">
                                            <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="">
                                            <span class="icon"> <img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                                        </figure>
                                    </div>
                                    <div class="detail">
                                        <span class="tag">พรีวิวโครงการ</span>
                                        <p class="online-content sub-title mb-0">Project Highlight : Mulberry Grove The
                                                                                 Forestias CondO
                                        </p>
                                        <span class="online-content sub-text-small">PUBLISHED : 23 AUG 2021 AT 06:09</span>
                                    </div>
                                </a>
                            </article>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        <hr class="hr-between">

        <section class="home-preview">
            <div class="container online-content content-padding">
                <div class="mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <h2 class="online-content title mb-0">RELATED PROJECTS</h2>
                        <a href="#" class="d-none d-md-block button more-text hidden-md">ALL PROJECT</a>
                    </div>
                </div>
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-md-4 mb-4">
                            <article class="card-project">
                                <a href="#" class="box-click">
                                    <figure class="logo">
                                        <img src="{{asset('images/theme/example-project.svg')}}" alt="example logo alt">
                                    </figure>
                                    <figure class="image my-0">
                                        <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="example image alt">
                                        <div class="status">
                                            <p class="new mb-2">New</p>
                                            <p class="move mb-0">Ready to move</p>
                                        </div>
                                        <span class="name">Whizdom The Forestias</span>
                                    </figure>
                                    <section class="detail">
                                        <p class="property-type">condo</p>
                                        <p class="online-content color-link font-bold mb-0">เริ่มต้น 3.99 ล้านบาท</p>
                                        <h3 class="online-content sub-title my-0">Mulberry Grove The Forestias
                                                                                  Condominiums</h3>
                                        <p class="online-content sub-text location">
                                            <img src="{{asset( config('images.icons.location'))}}" alt=""> Khlong Toei,
                                                                                                           Bangkok Near
                                                                                                           BTS
                                                                                                           Ekkamai
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


    </section>
@endsection
