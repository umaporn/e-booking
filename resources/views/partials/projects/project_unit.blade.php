<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-project-center mb-1">
            <h2 class="article-title mb-0">@lang('projects.title.unit_all')</h2>
            <a href="#" class="d-none d-md-block button more-text hidden-md">@lang('projects.btn.unit')</a>
        </div>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
        <ul class="uk-slider-items uk-grid uk-grid-small">
            @foreach($unitList as $unit)
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
                        <a href="{{ $unit->slug }}" class="box-click">
                            <figure class="image">
                                <img src="{{ $unit->images.'?access_token='.$token }}" alt="{{ $unit->unit_name }}">
                                <div class="status">
                                    <p class="move mb-0" style="background-color:{{$unit->unitLabel->color}};color:{{$unit->unitLabel->font_color}};">{{ $unit->unit_label_title }}</p>
                                </div>
                                <span class="unit-no">{{ $unit->unit_no }}</span>
                            </figure>
                            <section class="detail">
                                <div class="type">
                                    <p class="property-type">{{ $unit->project_info->project_type_title }}</p>
                                    <div class="sub-type">
                                        <p class="bedroom">
                                            <img src="{{asset( config('images.icons.bed'))}}">
                                            <b>{{ $unit->unit_bedroom }}</b>
                                        </p>
                                        <p class="sqm"><img src="{{asset( config('images.icons.sqm'))}}">
                                            <b>{{ $unit->unit_sqm }}</b>
                                        </p>
                                    </div>
                                </div>
                                <h3 class="online-content sub-title my-0">{{ $unit->unit_name }}</h3>
                                <p class="online-content sub-text location">
                                    <img src="{{asset( config('images.icons.location'))}}">
                                    {!!  $unit->project_info->project_location_title !!}
                                </p>
                            </section>
                            <section class="booking">
                                <div class="price">
                                    <p class="price-booking">@lang('home.feature-unit.booking_price') {{ $unit->booking_price }}</p>
                                    <p class="price-show">{{ $unit->total_price_after_discount }}
                                        <span>{{ $unit->total_price }}</span></p>
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
        <a href="#" class="button link">@lang('projects.btn.unit')</a>
    </div>
</div>
