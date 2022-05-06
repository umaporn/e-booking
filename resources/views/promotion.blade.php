@extends('layouts.app')

@section('page-title', __('promotion.page_title.index'))
@section('page-description', __('promotion.page_description.index'))

@section('content')
    <section class="content-promotion">
        <div class="show-content">
            <div class="container width-xxl uk-margin-large-top uk-margin-xlarge-bottom">
                <h1 class="online-content title uk-padding-remove">@lang('promotion.lasted')</h1>
                <div class="row uk-margin-medium-top" id="content-list-box">
                    @foreach($promotion as $item)
                        <div class="col-12 col-md-6 col-xl-4">
                            <article class="uk-article uk-margin-large-bottom">
                                <figure class="online-content image-16by9 position-relative ">
                                    <img class="img-fluid" src="{{ $item->images.'?access_token='.$token }}" alt="{{ $item->image_title }}">
                                    <div class="uk-position-top-right promotion-tag-top">@lang('promotion.new')</div>
                                    <div class="uk-text-center uk-position-bottom-left promotion-tag-bottom ml-0" uk-grid>
                                        <div class="uk-width-1-3 pl-0 promotion-tag-bottom-date article-title">{{ $item->promotion_exp_date }}</div>
                                        <div class="uk-width-2-3 pl-0 promotion-tag-bottom-month-year d-table">
                                            <span class="d-table-cell align-middle">{{ $item->promotion_exp_month }}</span>
                                        </div>
                                    </div>
                                </figure>
                                <h2 class="uk-text-truncate article-title uk-margin-small-top uk-margin-small-bottom">
                                    <a class="uk-link-reset" href="{{ route('promotion.detail',['id'=>$item->id]) }}">{{ $item->promotion_title }}</a>
                                </h2>
                                <span class="article-sub-title article-content">{!! $item->promotion_detail !!}</span>
                            </article>
                        </div>
                    @endforeach
                </div>

                @if($promotion->lastPage() > $promotion->currentPage())
                    <div class="col-12 load-more">
                        <a id="loadMore" data-url="{{ route('promotion.index')}}" class="button link">@lang('home.loadmore')</a>
                    </div>
                @endif
            </div>
    </section>
@endsection
