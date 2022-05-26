<section class="home-unit">
    <div class="container online-content content-padding pt-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="online-content title mb-0">@lang('home.feature-unit.header_line')</h2>
            <a href="#" class="button more-text">@lang('home.feature-unit.button.all_unit')</a>
        </div>
        <section class="unit-show">
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
                                <a href="{{ $item->slug }}" class="box-click">
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
                                                    <img src="{{asset( config('images.icons.bed'))}}">
                                                    <b>{{ $item->unit_bedroom }}</b>
                                                </p>
                                                <p class="sqm">
                                                    <img src="{{asset( config('images.icons.sqm'))}}">
                                                    <b>{{ $item->unit_sqm }}</b>
                                                </p>
                                            </div>
                                        </div>
                                        <h3 class="online-content sub-title my-0">
                                            {{ $item->unit_name }}
                                        </h3>
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
        </section>
    </div>
</section>