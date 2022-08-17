<div class="card-unit-booking col-lg-3 col-md-5 col-12">
    <div class="row">
        <div class="col p-0 pb-md-2 order-last order-md-first">
            <article class="card-booking d-flex d-md-block">
                <section class="hide-detail-booking col-8 col-sm-12" id="hide-detail-booking">
                    <div type="button" class="d-flex justify-content-between align-content-center" uk-toggle="target: #show-detail-booking;animation:uk-animation-slide-bottom;delay: 900;">
                        <p class="text-booking">@lang('unit.title.booking')</p>
                        <img class="icon-up" src="{{asset( config('images.icons.arrow_double_up'))}}" alt="filter arrow up">
                    </div>
                </section>
                <section class="detail-card col-9 col-md-12" id="show-detail-booking">
                    <div class="detail-price-booking">
                        <span class="d-flex justify-content-between align-content-center">
                            <p class="text-booking mb-0">@lang('unit.title.price_booking')</p>
                            <div type="button" class="btn-icon-down" id="btn-icon-down">
                                <img class="icon-down" src="{{asset( config('images.icons.arrow_double_down'))}}" alt="filter arrow down">
                            </div>
                        </span>
                        <p class="price-booking">{{ $unit[0]->booking_price }}</p>
                    </div>
                    <div class="content-card">
                        <div class="content-price uk-child-width-1-2 d-flex">
                            <div class="uk-width-auto pr-1 pr-sm-2">
                                <p class="text-price">@lang('unit.price_rang')</p>
                            </div>
                            <div class="uk-width-expand">
                                <p class="price-show">{{ $unit[0]->total_price_after_discount }}</p>
                                <p class="price-span">{{ $unit[0]->total_price }}</p>
                            </div>
                        </div>
                        <div class="content-price-sqm">
                            <span>@lang('unit.price_sqm')</span>
                            <span class="price-sqm">{{ $unit[0]->price_per_sqm }}</span>
                        </div>
                        <div class="content-check-booking">
                            <input class="uk-checkbox check-box" type="checkbox">
                            <div class="text-check-booking">
                                <p class="item-1 mb-0">@lang('unit.term_condition')</p>
                                <p>@lang('unit.booking_contact')</p>
                            </div>
                        </div>
                        <div class="icons uk-child-width-1-3 d-flex uk-text-center">
                            {{--<section class="icon-item">--}}
                            {{--<a href="#" class="icon-act icon-fav">--}}
                            {{--<img src="http://e-booking.local/images/icons/icon-favorite.svg" alt="favorite icon">--}}
                            {{--</a>--}}
                            {{--<p>บันทึกเก็บไว้</p>--}}
                            {{--</section>--}}
                            {{--<section class="icon-item">--}}
                            {{--<a href="#" class="icon-act icon-compare">--}}
                            {{--<img src="http://e-booking.local/images/icons/icon-compare.svg" alt="compare icon">--}}
                            {{--</a>--}}
                            {{--<p>เปรียบเทียบ</p>--}}
                            {{--</section>--}}
                            <section class="icon-item">
                                <a href="#" class="icon-act icon-share">
                                    <img src="{{asset( config('images.icons.share'))}}" alt="share icon">
                                </a>
                                <p>แชร์หน้านี้</p>
                            </section>
                        </div>
                    </div>
                </section>
                <div class="card-box-click d-block">
                    <a href="#" class="box-click">
                        <div class="button-link d-flex d-md-block">@lang('unit.btn.book_now')</div>
                    </a>
                    <a href="#" class="box-click">
                        <div class="button-link dark d-flex d-md-block">@lang('unit.contact_officer')</div>
                    </a>
                </div>
            </article>
        </div>
        <div class="col-12 d-flex justify-content-end btn-toppage">
            <a href="#" uk-totop></a>
        </div>
    </div>
</div>
