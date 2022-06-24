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
                            @foreach($unit as $item)
                                <div class="col-12 col-md-4 col-xl-3">
                                    <article class="card-project-unit">
                                        {{--<section class="icons">--}}
                                            {{--<a href="#" class="icon icon-fav">--}}
                                                {{--<img src="{{asset( config('images.icons.favorite'))}}" alt="favorite icon">--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="icon icon-compare">--}}
                                                {{--<img src="{{asset( config('images.icons.compare'))}}" alt="compare icon">--}}
                                            {{--</a>--}}
                                        {{--</section>--}}
                                        <a href="#" class="box-click">
                                            <figure class="image">
                                                <img src="{{ $item->images.'?access_token='.$token }}" alt="{{ $item->unit_name }}">
                                                <div class="status">
                                                    <p class="move mb-0" style="background-color:{{$item->unitLabel->color}};color:{{$item->unitLabel->font_color}};">{{ $item->unit_label_title }}</p>
                                                </div>
                                                <span class="unit-no">{{ $item->unit_no }}</span>
                                            </figure>
                                            <section class="detail">
                                                <div class="type">
                                                    <p class="property-type">{{ $item->project_info->project_type_title }}</p>
                                                    <div class="sub-type">
                                                        <p class="bedroom">
                                                            <img src="{{asset( config('images.icons.bed'))}}"
                                                                 alt=""> <b>{{ $item->unit_bedroom }}</b></p>
                                                        <p class="sqm"><img src="{{asset( config('images.icons.sqm'))}}"
                                                                            alt=""> <b>{{ $item->unit_sqm }}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <h3 class="online-content sub-title my-0">{{ $item->project_info->project_title }}</h3>
                                                <p class="online-content sub-text location">
                                                    <img src="{{asset( config('images.icons.location'))}}" alt="">
                                                    {!!  $item->project_info->project_location_title !!}
                                                </p>
                                            </section>
                                            <section class="booking">
                                                <div class="price">
                                                    <p class="price-booking">@lang('home.feature-unit.booking_price') {{ $item->booking_price }}</p>
                                                    <p class="price-show">{{ $item->total_price_after_discount }}<span>{{ $item->total_price }}</span></p>
                                                </div>
                                                <div class="booking-button">@lang('home.book_now')</div>
                                            </section>
                                        </a>
                                    </article>
                                </div>
                            @endforeach
                        </div>

                    </section>

                </div>

            </section>
            @include('partials.unit.relate_project')
        </div>
    </section>
@endsection
