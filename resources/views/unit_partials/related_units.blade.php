<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-unit-center d-block d-sm-flex">
            <h2 class="article-title mb-0">RELATED UNITS</h2>
            <a href="#" class="d-none d-md-block button more-text hidden-md">ALL UNIT</a>
        </div>
        <p>The list of properties that reach great popularity</p>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
        <ul class="uk-slider-items uk-grid uk-grid-small">
            @for($i = 0; $i < 4 ; $i++ )
                <li class="uk-width-4-5 uk-width-1-4@s">
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
                                <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="example image alt">
                                <div class="status">
                                    <p class="move mb-0">Ready to move</p>
                                </div>
                                <span class="unit-no">103A01</span>
                            </figure>
                            <section class="detail">
                                <div class="type">
                                    <p class="property-type">condo</p>
                                    <div class="sub-type">
                                        <p class="bedroom">
                                            <img src="{{asset( config('images.icons.bed'))}}"
                                                 alt=""> <b>1</b></p>
                                        <p class="sqm"><img src="{{asset( config('images.icons.sqm'))}}" alt=""> <b>33.60</b>Sq.m.
                                        </p>
                                    </div>
                                </div>
                                <h3 class="online-content sub-title my-0">Mulberry Grove The Forestias Condominiums</h3>
                                <p class="online-content sub-text location">
                                    <img src="{{asset( config('images.icons.location'))}}" alt="">
                                    Khlong Toei, Bangkok Near BTS Ekkamai
                                </p>
                            </section>
                            <section class="booking">
                                <div class="price">
                                    <p class="price-booking">จอง 10,000</p>
                                    <p class="price-show">14,721,000 <span>15,721,000</span></p>
                                </div>
                                <div class="booking-button">Book now</div>
                            </section>
                        </a>
                    </article>
                </li>
            @endfor
        </ul>
    </div>
    <div class="col-12 uk-text-center d-block d-md-none pt-4">
        <a href="#" class="button link">All Unit</a>
    </div>
</div>
