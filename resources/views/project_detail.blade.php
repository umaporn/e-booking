@extends('layouts.app')

@section('content')
    <section class="project-detail">
        <section class="container-fluid header-project">
            <article class="header-image">
                <div class="row">
                    <div class="uk-grid-collapse uk-child-width-1-3@s" uk-grid>
                        <div>
                            <div class=""><img src="{{ asset('images/theme/example-home-highlight-01.jpg') }}" alt=""></div>
                        </div>
                        <div>
                            <div class="uk-light"><img src="{{ asset('images/theme/example-home-highlight-02.jpg') }}" alt=""></div>
                        </div>
                        <div>
                            <div class="uk-light"><img src="{{ asset('images/theme/example-home-highlight-01.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

    </section>
@endsection
