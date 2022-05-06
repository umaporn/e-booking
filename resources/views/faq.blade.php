@extends('layouts.app')
@section('page-title', __('faq.page_title.index'))
@section('page-description', __('faq.page_description.index'))
@section('content')
    <section class="content-how-to-book">
        <div class="show-content uk-margin-large-top uk-margin-xlarge-bottom">
            <div class="container width-xxl">
                <h1 class="online-content title">FAQ.</h1>
            </div>
            <div class="uk-margin-medium-top uk-margin-medium-bottom">
                <figure>
                    <img class="img-fluid" src="images/faq/faq@2x.png">
                </figure>
            </div>
            <article class="container width-xxl">
                <div class="content-article">
                    <ul uk-accordion id="content-list-box">
                        @foreach($faq as $key=>$item)
                            <li class="list-faq {{ $key==0?'uk-open':'' }}">
                                <a class="uk-accordion-title article-title" href="#">{{ $item->q }}</a>
                                <div class="uk-accordion-content">
                                    <p>{!! $item->a !!}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @if($faq->lastPage() > $faq->currentPage())
                    <div class="col-12 load-more">
                        <a id="loadMore" data-url="{{ route('faq.index') }}" class="button link">@lang('home.loadmore')</a>
                    </div>
                @endif
            </article>
        </div>
    </section>
@endsection
