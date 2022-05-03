@extends('layouts.app')

@section('content')
    <section class="content-how-to-book">
        <div class="show-content uk-margin-large-top uk-margin-xlarge-bottom">
            <div class="container width-xxl">
                <h1 class="online-content title">{!! $single->promotion_title !!}</h1>
                <div class="uk-margin-medium-top uk-margin-medium-bottom">
                    <figure>
                        <img class="img-fluid" src="{{ $single->images.'?access_token='.$token }}" alt="{{ $single->image_title }}">
                    </figure>
                </div>
                <article class="container width-xxl">
                    <div class="row">
                        <div class="article-content">
                            <p class="uk-margin-medium-bottom">
                                {!! $single->promotion_detail !!}
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
