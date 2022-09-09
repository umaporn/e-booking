@extends('layouts.app-home')

@section('page-title', __('home.page_title.index'))
@section('page-description', __('home.page_description.index'))

@section('content')
    <section class="online-home">
        <section class="home-highlight">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 500; max-height: 500; autoplay:true; autoplay-interval:10000; animation:fade;">
                <ul class="uk-slideshow-items">
                    @foreach($banner as $itemBanner )
                        <li>
                            <article class="home-slide">
                                <a href="{{ $itemBanner->url }}" target="_blank">
                                    <div class="container h-100">
                                        <div class="row h-100">
                                            <div class="col-xl-7 home-banner-text">
                                                <article class="home-banner" uk-slideshow-parallax="y: 50,0,-50; opacity: 0,1,0">
                                                    {!! $itemBanner->title !!}
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row slide-box">
                                        <div class="offset-xl-7 col-xl-5 overflow-hidden">
                                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                                <img srcset="{{ $itemBanner->images_m }}?access_token={{ $token }} 480px,{{ $itemBanner->images }}?access_token={{ $token }} 1200px" src="{{ $itemBanner->images }}?access_token={{ $token }}" alt="{{ $itemBanner->alt }}" uk-cover>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </li>
                    @endforeach
                </ul>
                <div class="slide-dotnav">
                    <ul class="uk-slideshow-nav uk-dotnav"></ul>
                </div>
            </div>
        </section>
        <section class="home-search-1">
            <div class="container online-content content-padding">
                <form class="online-form search">
                    <input type="hidden" name="csrf-token" content="{{ csrf_token() }}">
                    <div class="row pl-xl-4 search-p-mobile">
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="projectSelect">@lang('home.search.project.title')</label>
                                <select class="form-control uk-select" id="projectSelect">
                                    <option value="all">@lang('home.search.project.default')</option>
                                    @foreach($option['project'] as $optionProject)
                                        <option value="{{ $optionProject['slug'] }}">{{ $optionProject['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="propertySelect">@lang('home.search.property.title')</label>
                                <select class="form-control uk-select" id="propertySelect">
                                    <option value="all">@lang('home.search.property.default')</option>
                                    @foreach($projectType as $itemType)
                                        <option value="{{ $itemType->title }}">{{ $itemType->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="priceSelect">@lang('home.search.price.title')</label>
                                <select class="form-control uk-select" id="priceSelect">
                                    <option value="all">@lang('home.search.price.default')</option>
                                    @foreach(__('home.search.price.option') as $itemPrice )
                                        <option value="{{ $itemPrice  }}">{{ $itemPrice  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="unitSelect">@lang('home.search.unit.title')</label>
                                <select class="form-control uk-select" id="unitSelect">
                                    <option value="all">@lang('home.search.unit.default')</option>
                                    @foreach($option['unitType'] as $optionUnit)
                                        <option value="{{ $optionUnit['Unit_type_name_English'] }}">{{ $optionUnit['Unit_type_name_English'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-xl">
                            <div class="form-group">
                                <label for="locationSelect">@lang('home.search.location.title')</label>
                                <select class="form-control uk-select" id="locationSelect">
                                    <option value="all">@lang('home.search.location.default')</option>
                                    @foreach($option['location'] as $optionLocation)
                                        <option value="{{ $optionLocation }}">{{ $optionLocation }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-xl">
                            <div class="search-button">
                                <button type="button" class="btn online-content color-white">@lang('home.search_btn')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
