@extends('layouts.app')
@section('page-title', __('projects.page_title.index'))
@section('page-description', __('projects.page_description.index'))
@section('content')
    <section class="content-projects">
        <div class="show-content">
            <section class="online-scroll-top">
                <div class="container-fluid position-absolute">
                    <div class="d-flex justify-content-end btn-toppage" uk-sticky="position: bottom; bottom: ~ .online-footer">
                        <a href="#" uk-totop></a>
                    </div>
                </div>
            </section>
            <section class="project-filler">
                <div class="container content-m-top">
                    <div class="col-12 col-xl-10">
                        <form class="project-form search">
                            <input type="hidden" name="csrf-token" content="{{ csrf_token() }}">
                            <div class="row search-p-mobile py-4 py-xl-0">
                                <div class="col-12 col-md-4 col-xl pl-md-0 my-2 my-xl-4">
                                    <select id="project" class="uk-select px-3" style="font-size: 16px;border-radius: 20px;border-color: #ffffff;background-position: 95%;color: #333333;">
                                        <option value="all">@lang('projects.option.project-title')</option>
                                        @foreach($search['project'] as $itemProject)
                                            <option value="{{ $itemProject['slug'] }}">{{ $itemProject['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 col-xl pl-md-0 my-2 my-xl-4">
                                    <select id="location" class="uk-select px-3" style="font-size: 16px;border-radius: 20px;border-color: #ffffff;background-position: 95%;color: #333333;">
                                        <option value="all">@lang('projects.option.location-title')</option>
                                        @foreach($search['location'] as $itemLocation)
                                            <option value="{{$itemLocation }}">{{ $itemLocation }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 col-xl pl-md-0 my-2 my-xl-4 d-table">
                                    <label class="d-table-cell align-middle px-3"><input id="project_status" name="project_status" class="uk-checkbox" type="checkbox" style="border-color: #333333;font-size: 14px;">
                                        @lang('projects.option.status-title')</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="project-list">
                <div class="container width-xxl uk-margin-large-top uk-margin-large-bottom">
                    <div class="row" id="projects-list-box">
                        @if($projectList)
                        @foreach($projectList as $project)
                            <div class="col-md-4 mb-4 uk-margin-medium-bottom">
                                <article class="card-project">
                                    <a href="{{ route('projects.detail',['slug'=>$project->slug]) }}" class="box-click">
                                        <figure class="logo">
                                            <img src="{{ $project->project_logo.'?access_token='.$token }}" alt="{{ $project->project_name }}">
                                        </figure>
                                        <figure class="image my-0">
                                            <img src="{{ $project->project_thumbnail.'?access_token='.$token }}" alt="{{ $project->project_name }}">
                                            <div class="status">
                                                <p class="new mb-2">New</p>
                                                <p class="move mb-0" style="background-color:{{ $project->ProjectStatus->color}};color:{{$project->ProjectStatus->font_color}}; ">{{ $project->project_status_title }}</p>
                                            </div>
                                            <span class="name">{{ $project->project_name }}</span>
                                        </figure>
                                        <section class="detail">
                                            <p class="property-type">{{ $project->project_type_title }}</p>
                                            <p class="online-content color-link font-bold mb-0">@lang('home.start') {{ $project->price }}
                                            </p>
                                            <h3 class="online-content sub-title my-0">{{ $project->project_name }}</h3>
                                            <p class="online-content sub-text location">
                                                <img src="{{asset( config('images.icons.location'))}}" alt="location">
                                                {{ $project->project_location_title }}
                                            </p>
                                        </section>
                                        <div class="button link d-block text-center" role="button">@lang('home.feature-project.button.view_unit')</div>
                                    </a>
                                </article>
                            </div>
                        @endforeach
                        @endif
                    </div>
                    @if($projectList->lastPage() > $projectList->currentPage())
                        <div class="col-12 load-more">
                            <a id="project-load" data-url="{{ route('projects.filter')}}" class="button link">@lang('home.loadmore')</a>
                        </div>
                    @endif

                </div>
            </section>

            <hr class="hr-between">

            <section class="project-unit">
                <div class="container uk-margin-xlarge-bottom uk-margin-large-top">
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h2 class="online-content title mb-0">@lang('projects.title.unit')</h2>
                            <a href="{{ route('unit.index') }}" class="d-none d-md-block button more-text hidden-md">All
                                                                                                                     Units</a>
                        </div>
                        <p>@lang('projects.unit_banner')</p>
                    </div>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                        <ul class="uk-slider-items uk-grid uk-grid-small">
                            @foreach($unit as $item)
                                <li class="uk-width-4-5 uk-width-1-4@s">
                                    <article class="card-project-unit">
                                        {{--<section class="icons">--}}
                                        {{--<a href="#" class="icon icon-fav">--}}
                                        {{--<img src="{{asset( config('images.icons.favorite'))}}" alt="favorite icon">--}}
                                        {{--</a>--}}
                                        {{--<a href="#" class="icon icon-compare">--}}
                                        {{--<img src="{{asset( config('images.icons.compare'))}}" alt="compare icon">--}}
                                        {{--</a>--}}
                                        {{--</section>--}}
                                        <a href="{{  route('unit.detail',['id'=>$item->id,'slug'=>$item->slug]) }}" class="box-click">
                                            <figure class="image">
                                                <img src="{{ $item->images.'?access_token='.$token }}" alt="{{ $item->unit_name }}">
                                                <div class="status">
                                                    <p class="move mb-0" style="background-color:{{$item->unitLabel->color}};color:{{$item->unitLabel->font_color}}; ">{{ $item->unit_label_title }}</p>
                                                </div>
                                                <span class="unit-no">{{ $item->unit_no }}</span>
                                            </figure>
                                            <section class="detail">
                                                <div class="type">
                                                    <p class="property-type">{{ $item->project_info->project_type_title }}</p>
                                                    <div class="sub-type">
                                                        <p class="bedroom">
                                                            <img src="{{asset( config('images.icons.bed'))}}"
                                                                 alt=""><b>{{ $item->unit_bedroom }}</b></p>
                                                        <p class="sqm"><img src="{{asset( config('images.icons.sqm'))}}"
                                                                            alt=""> <b>{{ $item->unit_sqm }}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <h3 class="online-content sub-title my-0">{{ $item->unit_name }}</h3>
                                                <p class="online-content sub-text location">
                                                    <img src="{{asset( config('images.icons.location'))}}">
                                                    {!!  $item->project_info->project_location_title !!}
                                                </p>
                                            </section>
                                            <section class="booking">
                                                <div class="price">
                                                    <p class="price-booking">@lang('home.feature-unit.booking_price') {{ $item->booking_price }}</p>
                                                    <p class="price-show">{{ $item->total_price_after_discount }}
                                                        <span>{{ $item->total_price }}</span></p>
                                                </div>
                                                <div class="booking-button">@lang('home.book_now')</div>
                                            </section>
                                        </a>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-12 uk-text-center d-block d-md-none pt-4">
                        <a href="#" class="button link">@lang('projects.btm.unit_lower')</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
