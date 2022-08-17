<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-unit-center d-block d-sm-flex">
            <h2 class="article-title mb-0">@lang('unit.title.relate_unit')</h2>
            <a href="{{ route('unit.index') }}" class="d-none d-md-block button more-text hidden-md">@lang('unit.btn.all_unit')</a>
        </div>
        <p>@lang('unit.banner_line.relate_unit')</p>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
        <ul class="uk-slider-items uk-grid uk-grid-small">
            @foreach($relate as $item)
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
                        <a href="{{ route('unit.detail',['id'=>$item->id,'slug'=>$item->slug]) }}" class="box-click">
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
                                        <p class="sqm"><img src="{{asset( config('images.icons.sqm'))}}" alt="">
                                            <b>{{ $item->unit_sqm }}</b>
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
        <a href="{{ route('unit.index') }}" class="button link">@lang('unit.btn.all_unit')</a>
    </div>
</div>
