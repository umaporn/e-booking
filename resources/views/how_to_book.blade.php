@extends('layouts.app')

@section('content')
    <section class="content-how-to-book">
        <div class="show-content uk-margin-large-top uk-margin-xlarge-bottom">
            <div class="container width-xxl">
                <h1 class="online-content title">{{ $howToBook->title }}</h1>
            </div>
            <div class="uk-margin-medium-top uk-margin-medium-bottom">
                <figure>
                    <img class="img-fluid" src="images/how_to_book/sean-pollock-PhYq704ffdA-unsplash@2x.png">
                </figure>
            </div>
            <article class="container width-xxl">
                <div class="article-content">
                    <p class="uk-margin-medium-bottom">{!! $howToBook->description !!} </p>
                </div>
            </article>
        </div>
    </section>
@endsection
