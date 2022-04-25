<section class="home-property">
    <div class="container online-content content-padding pt-0">
        <h2 class="online-content title mb-0">@lang('home.feature-property.header_line')</h2>
        <span class="online-content sub-text">@lang('home.feature-property.banner_line')</span>
        @foreach($propertyList as $key=>$itemProject)
            @php
                if($key % 2 == 0){
                $class = 'col-xl-6 mb-3 mb-xl-0 px-xl-0 order-xl-2';
                $subClass = 'col-xl-6 order-xl-1';
                $moreClass = 'order-xl-3';
                }else{
                $class='col-xl-6 mb-3 mb-xl-0';
                $subClass='col-xl-6 px-xl-0';
                $moreClass='';
                }
            @endphp
        <div class="row mt-5">
            <div class="{{ $class }}">
                <article class="card-proprety-highlight">
                    <figure class="image">
                        <img src="images/theme/example-img-banner-01.jpg" alt="">
                    </figure>
                    <section class="detail">
                        <a href="#" target="_blank" class="box">
                            <h2 class="online-content sub-header color-white mb-0">{{ $itemProject->project_name }}</h2>
                            <p class="online-content color-white mb-2">The Forestias Condominiums</p>
                            <button class="btn button link">@lang('home.view_project')</button>
                        </a>
                    </section>
                </article>
            </div>
            <div class="{{ $subClass }}">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                    <ul class="uk-slider-items uk-grid uk-grid-small">
                        @if(isset($itemProject->unit_property))
                            @foreach($itemProject->unit_property as $itemUnit)
                            <li class="uk-width-4-5 uk-width-1-2@s">
                                <article class="card-project-unit">
                                    <section class="icons">
                                        <a href="#" class="icon icon-fav">
                                            <img src="{{asset( config('images.icons.favorite'))}}" alt="favorite icon">
                                        </a>
                                        <a href="#" class="icon icon-compare">
                                            <img src="{{asset( config('images.icons.compare'))}}" alt="compare icon">
                                        </a>
                                    </section>
                                    <a href="#" class="box-click">
                                        <figure class="image">
                                            <img src="images/theme/example-img-banner-02.jpg" alt="example image alt">
                                            <div class="status">
                                                <p class="move mb-0">Ready to move</p>
                                            </div>
                                            <span class="unit-no">{{ $itemUnit->unit_no }}</span>
                                        </figure>
                                        <section class="detail">
                                            <div class="type">
                                                <p class="property-type">condo</p>
                                                <div class="sub-type">
                                                    <p class="bedroom">
                                                        <img src="{{asset( config('images.icons.bed'))}}"
                                                             alt=""> <b>{{ $itemUnit->unit_bedroom }}</b></p>
                                                    <p class="sqm">
                                                        <img src="{{asset( config('images.icons.sqm'))}}"
                                                             alt=""> <b>{{ $itemUnit->unit_sqm }}</b>Sq.m.
                                                    </p>
                                                </div>
                                            </div>
                                            <h3 class="online-content sub-title my-0">{{ $itemUnit->unit_name }}</h3>
                                            <p class="online-content sub-text location">
                                                <img src="{{asset( config('images.icons.location'))}}" alt="">
                                                {{ $itemUnit->unit_detail }}
                                            </p>
                                        </section>
                                        <section class="booking">
                                            <div class="price">
                                                <p class="price-booking">@lang('home.feature-unit.booking_price') {{ $itemUnit->booking_price }}</p>
                                                <p class="price-show">{{ $itemUnit->total_price_after_discount }}<span>{{ $itemUnit->total_price }}</span></p>
                                            </div>
                                            <div class="booking-button">@lang('home.book_now')</div>
                                        </section>
                                    </a>
                                </article>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-12 home-more {{ $moreClass }}">
                <a href="#" class="button link">@lang('home.all_unit')</a>
            </div>
        </div>
        @endforeach
    </div>
</section>