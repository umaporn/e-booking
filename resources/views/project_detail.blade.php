@extends('layouts.app')

@section('content')
    <section class="project-detail">
        <section class="card-project-unit container-fluid position-absolute px-0">
            @include('projects_partials.card_project_unit')
        </section>
        <section class="header-project container-fluid position-relative">
            @include('projects_partials.header')
        </section>
        <section class="header-menu-detail">
            <div class="container-fluid">
                @include('projects_partials.menu')
            </div>
        </section>
        <section class="project-property" id="property">
            <div class="container online-content content-padding">
                <div class="uk-width-3-4@m">
                    <section class="image-logo pb-4">
                        <figure class="figure uk-flex uk-flex-center uk-flex-left@s">
                            <img src="{{asset( config('images.logos.mulberry-grove'))}}" alt="@lang('nav.logo-alt')">
                        </figure>
                    </section>
                    <section class="property-detail">
                        <article class="info-project">
                            <h1 class="article-title name-project">MULBERRY GROVE THE FORESTIAS CONDOMINIUMS</h1>
                            <div class="property-detail d-block d-sm-flex">
                                <p class="property-floor pr-0 pr-sm-5">
                                    <img src="{{asset( config('images.icons.floor'))}}" alt=""> จำนวนชั้น 8
                                </p>
                                <p class="property-building pr-0 pr-sm-5">
                                    <img src="{{asset( config('images.icons.building'))}}" alt=""> 1 Building
                                </p>
                                <p class="property-unit pr-0 pr-sm-5">
                                    <img src="{{asset( config('images.icons.unit'))}}" alt=""> 287 units
                                </p>
                            </div>
                        </article>
                        <article class="article-project-detail">
                            <h2 class="article-title title-detail">PROJECT DETAIL</h2>
                            <p class="text-detail">The 6 Low-Rise Residences Of Mulberry Grove Condominiums Offer
                                                   Sustainable Intergeneration Luxury Amid The Enchanting Green Spaces
                                                   And Upscale Amenities Of The Forestias. Timeless Thai Design Inspires
                                                   Residences That Connect You With Family, Nature, And A Warm
                                                   Community. A Careful Blend Of Private And Shared Spaces Elevates Your
                                                   Quality Of Life In A Magical Airy Setting, Abounding In Light And
                                                   Space.​
                            </p>
                        </article>
                        <article class="project-location">
                            <h2 class="article-title title-location">PROJECT LOCATION</h2>
                            <p class="text-location">Khlong Toei, Bangkok Near BTS Ekkamai</p>
                        </article>
                        <article class="project-area">
                            <h2 class="article-title title-area">PROJECT AREA</h2>
                            <p class="text-area">5 - 3 - 75 Rais</p>
                        </article>
                        <article class="project-unit-type">
                            <h2 class="article-title title-unit-type">UNIT TYPE</h2>
                            <div class="detail-unit-type d-block d-sm-flex">
                                <table class="uk-table uk-table-divider table-unit-type">
                                    <tbody class="uk-margin uk-margin-auto">
                                    @for($i = 1; $i <= 4; $i++)
                                        <tr class="row-unit-type">
                                            <td class="unit-type pl-0">
                                                <p>
                                                    <img src="{{asset( config('images.icons.bed'))}}" alt=""> {{ $i }}
                                                    Badroom
                                                </p>
                                            </td>
                                            @for($y = 0; $y < 2 ; $y++)
                                                <td class="unit-detail uk-grid-column-medium">
                                                    <p>
                                                        <img src="{{asset( config('images.icons.bed'))}}" alt=""> {{ $i }}
                                                        99.98 - 100.23 Sq.m.
                                                    </p>
                                                </td>
                                            @endfor
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="project-building">
                            <h2 class="article-title title-building">NUMBER OF BUILDING</h2>
                            <p class="text-building">1 Building</p>
                        </article>
                        <article class="total-unit">
                            <h2 class="article-title title-unit">TOTAL UNIT</h2>
                            <p class="text-unit">Residential 287 units, Commercial 2 units</p>
                        </article>
                        <article class="project-status">
                            <h2 class="article-title title-status">PROJECT STATUS</h2>
                            <p class="text-status">Ready to move in</p>
                        </article>
                    </section>
                </div>
            </div>
        </section>

        <hr class="hr-between">

        <section class="project-layout" id="layout">
            @include('projects_partials.project_layout')
        </section>
        <section class="project-tour" id="tour">
            <div class="container-fluid">
                <div class="row">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://my.matterport.com/show/?m=3xbeEuM4Y4W" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="project-unit" id="unit">
            @include('projects_partials.project_unit')
        </section>

        <hr class="hr-between">

        <section class="project-facility" id="facility">
            <div class="container online-content content-padding">
                <h2 class="article-title title-project-facility">FACILITIES</h2>
                <article class="facility-indoor">
                    <h3>INDOOR</h3>
                    <div class="row uk-list uk-list-disc ml-0">
                        @for($i = 1 ; $i < 7 ; $i++)
                            <div class="col-md-4 mt-2">List item {{ $i }}</div>
                        @endfor
                    </div>
                </article>
                <article class="facility-outdoor">
                    <h3>OUTDOOR</h3>
                    <div class="row uk-list uk-list-disc ml-0">
                        @for($i = 1 ; $i < 16 ; $i++)
                            <div class="col-md-4 mt-2">List item {{ $i }}</div>
                        @endfor
                    </div>
                </article>
            </div>
        </section>

        <section class="project-nearby" id="nearby">
            <div class="container online-content content-padding">
                <h2 class="article-title title-project-nearby">NEARBY</h2>
                <div class="uk-child-width-1-3@s" uk-grid="masonry: true">
                    @for( $i =1 ; $i <= 5 ; $i++)
                        <article class="item-nearby">
                            <h3>INDOOR {{ $i }}</h3>
                            <ul class="uk-list uk-list-disc">
                                <li>List item 1</li>
                                <li>List item 2</li>
                                <li>List item 3</li>
                            </ul>
                        </article>
                    @endfor
                </div>
            </div>
        </section>

        <section class="project-map">
            <div class="container-fluid">
                <div class="row">
                    <iframe src="https://snazzymaps.com/embed/227963" class="map-iframe"></iframe>
                </div>
            </div>
        </section>

        <section class="project-preview">
            @include('projects_partials.project_preview')
        </section>

        <hr class="hr-between">

        <section class="related-preview">
            @include('projects_partials.related_project')
        </section>

    </section>
@endsection
