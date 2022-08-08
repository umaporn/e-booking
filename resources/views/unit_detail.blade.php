@extends('layouts.app')

@section('content')
    <section class="unit-detail">
        <section class="card-unit container-fluid position-absolute px-0">
            @include('unit_partials.card_unit_booking')
        </section>
        <section class="header-unit container-fluid position-relative">
            @include('unit_partials.header')
        </section>
        <section class="header-menu-detail" uk-sticky="start: #unit-detail">
            <div class="container-fluid">
                @include('unit_partials.menu')
            </div>
        </section>
        <section class="property" id="property">
            @include('unit_partials.property')
        </section>

        <section class="detail" id="unit-detail">
            <div class="container">
                <div class="uk-width-3-4@m">
                    <div class="title-unit-center">
                        <h2 class="article-title">UNIT DETAIL</h2>
                    </div>
                    <p>The 6 Low-Rise Residences Of Mulberry Grove Condominiums Offer Sustainable Intergeneration Luxury
                       Amid The Enchanting Green Spaces And Upscale Amenities Of The Forestias. Timeless Thai Design
                       Inspires Residences That Connect You With Family, Nature, And A Warm Community.
                    </p>
                    <p>A Careful Blend Of Private And Shared Spaces Elevates Your Quality Of Life In A Magical Airy
                       Setting, Abounding In Light And Space.
                    </p>
                </div>
            </div>
        </section>

        <section class="floor-plan" id="floor-plan">
            @include('unit_partials.floor_plan')
        </section>

        <section class="payment" id="payment">
            @include('unit_partials.payment_plan')
        </section>

        <section class="torn" id="torn">
            <div class="container online-content content-padding">
                <div class="uk-width-3-4@m">
                    <div class="mb-5">
                        <div class="title-unit-center d-block d-sm-flex">
                            <h2 class="article-title mb-0">VIRTUAL TOUR</h2>
                        </div>
                        <p>Mulberry Grove - 360 VIRTUAL TOUR LIVE</p>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://my.matterport.com/show/?m=3xbeEuM4Y4W" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <hr class="hr-between">

        <section class="related-unit" id="related">
            @include('unit_partials.related_units')
        </section>

        <hr class="hr-between">

        <section class="featured_project" id="featured_project">
            @include('unit_partials.featured_project')
        </section>

    </section>
@endsection
