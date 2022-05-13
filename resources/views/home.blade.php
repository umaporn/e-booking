@extends('layouts.app-home')

@section('page-title', __('home.page_title.index'))
@section('page-description', __('home.page_description.index'))

@section('content')
    <section class="online-home">
        <section class="home-highlight">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 500; max-height: 500; autoplay:true; autoplay-interval:10000; animation:fade;">
                <ul class="uk-slideshow-items">
                    <li>
                        <article class="home-slide">
                            <a href="#" target="_blank">
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div class="col-xl-7 home-banner-text">
                                            <article class="home-banner" uk-slideshow-parallax="y: 50,0,-50; opacity: 0,1,0">
                                                <h2 class="online-content header color-text mb-0">Discover a place
                                                    <span class="d-block online-content sub-header color-link">you’ll love to live</span>
                                                </h2>
                                                <p class="online-content sub-text mt-0">Let’s find a home that’s perfect
                                                                                        for you
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="row slide-box">
                                    <div class="offset-xl-7 col-xl-5 overflow-hidden">
                                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                            <img src="images/theme/example-home-highlight-01.jpg" alt="" uk-cover>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </li>
                    <li>
                        <article class="home-slide">
                            <a href="#" target="_blank">
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div class="col-xl-7 home-banner-text">
                                            <article class="home-banner" uk-slideshow-parallax="y: 50,0,-50; opacity: 0,1,0">
                                                <h2 class="online-content header color-text mb-0">Mulberry Grove The
                                                                                                  Forestias
                                                    <span class="d-block online-content sub-header color-link">you’ll love to live</span>
                                                </h2>
                                                <p class="online-content sub-text mt-0">Let’s find a home that’s perfect
                                                                                        for you
                                                    <span class="online-content color-link">see more</span>
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="row slide-box">
                                    <div class="offset-xl-7 col-xl-5 overflow-hidden">
                                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                            <img src="images/theme/example-home-highlight-02.jpg" alt="" uk-cover>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </li>
                </ul>
                <div class="slide-dotnav">
                    <ul class="uk-slideshow-nav uk-dotnav "></ul>
                </div>
            </div>
        </section>
        <section class="home-search-1">
            <div class="container online-content content-padding">
                <form class="online-form search">
                    <div class="row pl-xl-4 search-p-mobile">
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="projectSelect">Project Name</label>
                                <select class="form-control uk-select" id="projectSelect">
                                    <option>Select Project</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="propertySelect">Property Type</label>
                                <select class="form-control uk-select" id="propertySelect">
                                    <option>Select Type</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="priceSelect">Price</label>
                                <select class="form-control uk-select" id="priceSelect">
                                    <option>Select Price</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="unitSelect">Unit Type</label>
                                <select class="form-control uk-select" id="unitSelect">
                                    <option>Select Unit</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="locationSelect">Location</label>
                                <select class="form-control uk-select" id="locationSelect">
                                    <option>Select Location</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-xl">
                            <div class="search-button">
                                <button type="submit" class="btn online-content color-white">SEARCH</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="home-property">
            <div class="container online-content content-padding pt-0">
                <h2 class="online-content title mb-0">FEATURED PROPERTY</h2>
                <span class="online-content sub-text">The list of properties that reach great popularity</span>
                <div class="row mt-5">
                    <div class="col-xl-6 mb-3 mb-xl-0 px-xl-0 order-xl-2">
                        <article class="card-proprety-highlight">
                            <figure class="image">
                                <img src="images/theme/example-img-banner-01.jpg" alt="">
                            </figure>
                            <section class="detail">
                                <a href="#" target="_blank" class="box">
                                    <h2 class="online-content sub-header color-white mb-0">Mulberry Grove</h2>
                                    <p class="online-content color-white mb-2">The Forestias Condominiums</p>
                                    <button class="btn button link">View Project</button>
                                </a>
                            </section>
                        </article>
                    </div>
                    <div class="col-xl-6 order-xl-1">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <ul class="uk-slider-items uk-grid uk-grid-small">
                                @for ($i = 0; $i < 2; $i++)
                                    <li class="uk-width-4-5 uk-width-1-2@s">
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
                                                    <img src="images/theme/example-img-banner-02.jpg" alt="example image alt">
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
                                                            <p class="sqm">
                                                                <img src="{{asset( config('images.icons.sqm'))}}"
                                                                     alt=""> <b>33.60</b>Sq.m.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <h3 class="online-content sub-title my-0">Mulberry Grove The
                                                                                              Forestias
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
                    </div>
                    <div class="col-12 home-more order-xl-3">
                        <a href="#" class="button link">All Unit</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-6 mb-3 mb-xl-0">
                        <article class="card-proprety-highlight">
                            <figure class="image">
                                <img src="images/theme/example-img-banner-01.jpg" alt="">
                            </figure>
                            <section class="detail">
                                <a href="#" target="_blank" class="box">
                                    <h2 class="online-content sub-header color-white mb-0">Mulberry Grove</h2>
                                    <p class="online-content color-white mb-2">The Forestias Condominiums</p>
                                    <button class="btn button link">View Project</button>
                                </a>
                            </section>
                        </article>
                    </div>
                    <div class="col-xl-6 px-xl-0">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <ul class="uk-slider-items uk-grid uk-grid-small">
                                @for ($i = 0; $i < 2; $i++)
                                    <li class="uk-width-4-5 uk-width-1-2@s">
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
                                                            <p class="sqm">
                                                                <img src="{{asset( config('images.icons.sqm'))}}"
                                                                     alt=""> <b>33.60</b>Sq.m.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <h3 class="online-content sub-title my-0">Mulberry Grove The
                                                                                              Forestias
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
                    </div>
                    <div class="col-12 home-more">
                        <a href="#" class="button link">All Unit</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-benefits">
            <div class="container online-content content-padding">
                <div class="row">
                    @foreach( __('home.benefits') as $benefit )
                        <div class="col-12 col-md-6 col-xl">
                            <article class="card-benefit">
                                <div class="d-flex align-items-center mb-2">
                                    <figure class="image-icon">
                                        <img src="{{asset( config($benefit['image'] ))}}"
                                             alt="{{ $benefit['image-alt'] }}">
                                    </figure>
                                    <p class="benefit-header">{{ $benefit['title'] }}</p>
                                </div>
                                <p class="online-content sub-text-small mb-0">{{ $benefit['description'] }}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="home-preview">
            <div class="container online-content content-padding">
                <h2 class="online-content title">Featured Projects Preview</h2>
                <div class="row">
                    <div class="col-md-6">
                        <article class="card-video-highlight">
                            <a href="#" class="box-click">
                                <div class="image-box">
                                    <figure class="online-content image-16by9 mb-1">
                                        <img src="images/theme/example-img-banner-01.jpg" alt="">
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
                                            <img src="images/theme/example-img-banner-01.jpg" alt="">
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
        <section class="home-project">
            <div class="container online-content content-padding pt-0">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="online-content title mb-0">Featured Projects</h2>
                    <a href="#" class="button more-text">All Project</a>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-4">
                        <article class="card-project-highlight">
                            <a href="#" class="box-click">
                                <figure class="image my-0">
                                    <img src="images/theme/example-img-banner-01.jpg" alt="example image alt">
                                    <div class="status">
                                        <p class="new mb-2">New</p>
                                    </div>
                                    <span class="name">Whizdom The Forestias</span>
                                </figure>
                                <section class="detail">
                                    <p class="online-content font-bold mb-0">เริ่มต้น 3.99 ล้านบาท</p>
                                    <h3 class="online-content sub-title my-0">Mulberry Grove The Forestias
                                                                              Condominiums</h3>
                                    <p class="online-content sub-text location">
                                        <img src="{{asset( config('images.icons.location'))}}" alt=""> Khlong Toei,
                                                                                                       Bangkok Near BTS
                                                                                                       Ekkamai
                                    </p>
                                </section>
                            </a>
                        </article>
                    </div>
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-4 mb-4">
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
        <section class="home-unit">
            <div class="container online-content content-padding pt-0">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="online-content title mb-0">Featured Units</h2>
                    <a href="#" class="button more-text">All Units</a>
                </div>
                <section class="unit-show">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                        <ul class="uk-slider-items uk-grid uk-grid-small">
                            @for ($i = 0; $i < 4; $i++)
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
                </section>
            </div>
        </section>
    </section>
@endsection
