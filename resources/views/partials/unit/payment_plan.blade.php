<div class="container-fluid">
    <div class="row detail-payment">
        <div class="container online-content content-padding">
            <div class="uk-width-3-4@m">
                <div class="mb-0 mb-sm-5">
                    <div class="title-unit-center d-block d-sm-flex">
                        <h2 class="article-title">@lang('unit.title.payment')</h2>
                    </div>
                </div>
                <div class="uk-column-1-4@s uk-column-divider uk-text-center">
                    <div class="column-payment">
                        <small>@lang('unit.title.booking')</small>
                        <h3 class="price">{{ $unit[0]->booking_price }}</h3>
                    </div>
                    <div class="column-payment">
                        <small>@lang('unit.title.contact_payment')</small>
                        <h3 class="price">{{ $unit[0]->contract_payment }}</h3>
                    </div>
                    <div class="column-payment">
                        <small>@lang('unit.title.down_payment')</small>
                        <h3 class="price">{{ $unit[0]->down_payment }}</h3>
                    </div>
                    <div class="column-payment last-column-payment">
                        <small>@lang('unit.title.total_payment')</small>
                        <h3 class="price">{{ $unit[0]->total_price_after_discount }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
