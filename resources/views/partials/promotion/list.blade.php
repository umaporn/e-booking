@foreach($promotion as $item)
    <div class="col-12 col-md-6 col-xl-4">
        <article class="uk-article uk-margin-large-bottom">
            <figure class="online-content image-16by9 position-relative ">
                <img class="img-fluid" src="images/promotion/Whizdom-Destinia-The-Forestias-1@2x.png">
                <div class="uk-position-top-right promotion-tag-top">NEW</div>
                <div class="uk-text-center uk-position-bottom-left promotion-tag-bottom ml-0" uk-grid>
                    <div class="uk-width-1-3 pl-0 promotion-tag-bottom-date article-title">30</div>
                    <div class="uk-width-2-3 pl-0 promotion-tag-bottom-month-year d-table">
                        <span class="d-table-cell align-middle">JUL 2021</span>
                    </div>
                </div>
            </figure>
            <h2 class="uk-text-truncate article-title uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-link-reset" href="http://e-booking.local/promotion/detail">{{ $item->promotion_title }}</a>
            </h2>
            <span class="article-sub-title article-content">{!! $item->promotion_detail !!}</span>
        </article>
    </div>
@endforeach