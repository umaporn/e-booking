@extends('layouts.app')

@section('content')
    <section class="project-detail">
        <section class="card-project-unit container-fluid position-absolute px-0">
            @include('partials.projects.card_project_unit')
        </section>
        <section class="header-project container-fluid position-relative">
            @include('partials.projects.header')
        </section>
        <section class="header-menu-detail">
            <div class="container-fluid">
                @include('partials.projects.menu')
            </div>
        </section>
        <section class="project-property" id="property">
            <div class="container online-content content-padding">
                <div class="uk-width-3-4@m">
                    <section class="image-logo pb-4">
                        <figure class="figure uk-flex uk-flex-center uk-flex-left@s">
                            <img src="{{ $project->project_logo.'?access_token='.$token }}" alt="@lang('nav.logo-alt')">
                        </figure>
                    </section>
                    <section class="property-detail">
                        <article class="info-project">
                            <h1 class="article-title name-project">{{ $project->project_name }}</h1>
                            <div class="property-detail d-block d-sm-flex">
                                <p class="property-floor pr-0 pr-sm-5">
                                    <img src="{{asset( config('images.icons.floor'))}}" alt="">
                                    จำนวนชั้น {{ $project->floor_number }}
                                </p>
                                <p class="property-building pr-0 pr-sm-5">
                                    <img src="{{asset( config('images.icons.building'))}}" alt=""> {{ $project->building_number }}
                                    Building
                                </p>
                                <p class="property-unit pr-0 pr-sm-5">
                                    <img src="{{asset( config('images.icons.unit'))}}" alt=""> {{ $project->unit_number }}
                                    units
                                </p>
                            </div>
                        </article>
                        <article class="article-project-detail">
                            <h2 class="article-title title-detail">@lang('projects.title.project_detail')</h2>
                            <p class="text-detail">
                                {!! $project->project_detail !!}
                            </p>
                        </article>
                        <article class="project-location">
                            <h2 class="article-title title-location">@lang('projects.title.project_location')</h2>
                            <p class="text-location">{{ $project->project_location_title }}</p>
                        </article>
                        <article class="project-area">
                            <h2 class="article-title title-area">@lang('projects.title.project_area')</h2>
                            <p class="text-area">{{ $project->project_area }} Rais</p>
                        </article>
                        <article class="project-unit-type">
                            <h2 class="article-title title-unit-type">@lang('projects.title.unit_type')</h2>
                            <div class="detail-unit-type d-block d-sm-flex">
                                <table class="uk-table uk-table-divider table-unit-type">
                                    <tbody class="uk-margin uk-margin-auto">
                                    @foreach(json_decode($project->project_unit_info,true) as $unitType)
                                        <tr class="row-unit-type">
                                            <td class="unit-type pl-0">
                                                <p>
                                                    <img src="{{asset( config('images.icons.bed'))}}" alt=""> {{ $unitType['Bedroom'] }}
                                                    Badroom
                                                </p>
                                            </td>
                                            <td class="unit-detail uk-grid-column-medium">
                                                <p>
                                                    <img src="{{asset( config('images.icons.bed'))}}" alt=""> {{ $unitType['Bedroom'] }}
                                                    Bathroom
                                                </p>
                                            </td>
                                            <td class="unit-detail uk-grid-column-medium">
                                                <p>
                                                    <img src="{{asset( config('images.icons.sqm'))}}"> {{ $unitType['Bedroom'] }}
                                                    {{ $unitType['Area'] }} Sq.m.
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="project-building">
                            <h2 class="article-title title-building">@lang('projects.title.building')</h2>
                            <p class="text-building">{{ $project->building_number }} Building</p>
                        </article>
                        <article class="total-unit">
                            <h2 class="article-title title-unit">@lang('projects.title.unit_number')</h2>
                            <p class="text-unit">{{ $project->unit_number }}</p>
                        </article>
                        <article class="project-status">
                            <h2 class="article-title title-status">@lang('projects.title.project_status')</h2>
                            <p class="text-status">{{ $project->project_status_title }}</p>
                        </article>
                    </section>
                </div>
            </div>
        </section>

        <hr class="hr-between">

        <section class="project-layout" id="layout">
            @include('partials.projects.project_layout')
        </section>

        <section class="project-tour" id="tour">
            <div class="container-fluid">
                <div class="row">
                    @if($project->video_link != '')
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $project->video_link }}" allowfullscreen></iframe>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="project-unit" id="unit">
            @include('partials.projects.project_unit')
        </section>

        <hr class="hr-between">

        <section class="project-facility" id="facility">
            <div class="container online-content content-padding">
                <h2 class="article-title title-project-facility">@lang('projects.title.facitity')</h2>
                <article class="facility-indoor">
                    {!! $project->facility !!}
                </article>
            </div>
        </section>

        <section class="project-nearby" id="nearby">
            <div class="container online-content content-padding">
                <h2 class="article-title title-project-nearby">@lang('projects.title.near_by')</h2>
                <div class="uk-child-width-1-3@s" uk-grid="masonry: true">
                    {!! $project->nearby !!}
                </div>
            </div>
        </section>

        <section class="project-map">
            <div class="container-fluid">
                @if( $project->project_location_google != '')
                    <div class="row">
                        <iframe src="{{  $project->project_location_google }}" class="map-iframe"></iframe>
                    </div>
                @endif
            </div>
        </section>

        <section class="project-preview">
            @include('partials.projects.project_preview')
        </section>

        <hr class="hr-between">

        <section class="related-preview">
            @include('partials.projects.related_project')
        </section>

    </section>
@endsection
