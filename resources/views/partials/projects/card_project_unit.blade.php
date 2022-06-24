<div class="card-project-detail col-lg-3 col-md-4 col-sm-4 col-12">
    <div class="row">
        <div class="col p-0 pb-sm-2 order-last order-sm-first">
            <article class="card-project d-flex d-sm-block">
                <section class="detail col-8 col-sm-12">
                    <p class="text-booking">@lang('projects.card.booking')</p>
                    <p class="price-booking">{{ $unitList[0]->booking_price }}</p>
                    <hr>
                    <p class="text-price">@lang('projects.card.price')</p>
                    <p class="price-show">{{ $project->price }}</p>
                </section>
                <a href="#" class="box-click">
                    <div class="button-link d-flex d-sm-block">@lang('projects.btn.all_unit')</div>
                </a>
            </article>
        </div>
        <div class="col-12 d-flex justify-content-end btn-toppage">
            <a href="#" uk-totop></a>
        </div>
    </div>
</div>
