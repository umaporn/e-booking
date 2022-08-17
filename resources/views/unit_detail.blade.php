@extends('layouts.app')

@section('content')
    <section class="unit-detail">
        <section class="card-unit container-fluid position-absolute px-0">
            @include('partials.unit.card_unit_booking')
        </section>
        <section class="header-unit container-fluid position-relative">
            @include('partials.unit.header')
        </section>
        <section class="header-menu-detail" uk-sticky="start: #unit-detail">
            <div class="container-fluid">
                @include('partials.unit.menu')
            </div>
        </section>
        <section class="property" id="property">
            @include('partials.unit.property')
        </section>

        <section class="detail" id="unit-detail">
            <div class="container">
                <div class="uk-width-3-4@m">
                    <div class="title-unit-center">
                        <h2 class="article-title">@lang('unit.title.detail')</h2>
                    </div>
                    {!! $unit[0]->unit_detail !!}
                </div>
            </div>
        </section>

        <section class="floor-plan" id="floor-plan">
            @include('partials.unit.floor_plan')
        </section>

        <section class="payment" id="payment">
            @include('partials.unit.payment_plan')
        </section>

        <section class="torn" id="torn">
            <div class="container online-content content-padding">
                <div class="uk-width-3-4@m">
                    <div class="mb-5">
                        <div class="title-unit-center d-block d-sm-flex">
                            <h2 class="article-title mb-0">@lang('unit.title.virtual_tour')</h2>
                        </div>
                        <p>{{ $unit[0]->project_info->project_title }} - @lang('unit.banner_line.virtual_tour')</p>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        @if($unit[0]->video_link != '')
                            <iframe class="embed-responsive-item" src="{{ $unit[0]->video_link }}" allowfullscreen></iframe>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <hr class="hr-between">

        <section class="related-unit" id="related">
            @include('partials.unit.detail_relate_units')
        </section>

        <hr class="hr-between">

        <section class="featured_project" id="featured_project">
            @include('partials.unit.detail_relate_projects')
        </section>

    </section>
@endsection
