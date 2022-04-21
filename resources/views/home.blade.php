@extends('layouts.app-home')

@section('page-title', __('home.page_title.index'))
@section('page-description', __('home.page_description.index'))

@section('content')
    <section class="online-home">
        <section class="home-highlight">
            <article class="home-slide">
                <div class="row">
                    <div class="offset-xl-7 col-xl-5">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                             uk-slideshow="min-height:562; autoplay: true; autoplay-interval:17000; animation:fade;">
                            <ul class="uk-slideshow-items">
                                <li>
                                    <div
                                        class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                        <img src="images/theme/example-home-highlight-01.jpg" alt="" uk-cover>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                        <img src="images/theme/example-home-highlight-02.jpg" alt="" uk-cover>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                        <img src="images/theme/example-home-highlight-01.jpg" alt="" uk-cover>
                                    </div>
                                </li>
                            </ul>
                            <div class="slide-dotnav">
                                <ul class="uk-slideshow-nav uk-dotnav "></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="home-search">
                <div class="container">
                    <div class="home-search-mobile">
                        <h2 class="online-content header mb-0">Discover a place
                            <span class="d-block online-content sub-header color-link">you’ll love to live</span>
                        </h2>
                        <p class="online-content sub-text mt-0">Let’s find a home that’s perfect for you</p>
                    </div>
                    <div class="row mt-xl-5">
                        <div class="col-12 col-xl-10">
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
                                            <label for="priceSelect">@lang('home.search.price.title')</label>
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
                    </div>
                </div>
            </article>
        </section>
        @include('partials.home-page.feature-property')
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

        @include('partials.home-page.feature-preview')
        @include('partials.home-page.feature-project')
        @include('partials.home-page.feature-unit')
    </section>
@endsection
