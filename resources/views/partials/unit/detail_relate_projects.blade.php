<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-unit-center d-block d-sm-flex">
            <h2 class="article-title mb-0">@lang('unit.title.relate_project')</h2>
            <a href="{{ route('projects.index') }}" class="d-none d-md-block button more-text">@lang('unit.btn.all_project')</a>
        </div>
    </div>
    <div class="row">
        @foreach($project as $item )
            <div class="col-md-4 mb-4">
                <article class="card-project">
                    <a href="{{ route('projects.detail',['slug'=>$item->slug]) }}" class="box-click">
                        <figure class="logo">
                            <img src="{{ $item->project_logo.'?access_token='.$token }}" alt="{{ $item->project_name }}">
                        </figure>
                        <figure class="image my-0">
                            <img src="{{ $item->project_thumbnail.'?access_token='.$token }}" alt="{{ $item->project_name }}">
                            <div class="status">
                                <p class="new mb-2">New</p>
                                <p class="move mb-0" style="background-color:{{ $item->ProjectStatus->color}};color:{{$item->ProjectStatus->font_color}}; ">{{ $item->project_status_title }}</p>
                            </div>
                            <span class="name">{{ $item->project_name }}</span>
                        </figure>
                        <section class="detail">
                            <p class="property-type">{{ $item->project_type_title }}</p>
                            <p class="online-content color-link font-bold mb-0">@lang('home.start') {{ $item->price }}</p>
                            <h3 class="online-content sub-title my-0">{{ $item->project_name }}</h3>
                            <p class="online-content sub-text location">
                                <img src="{{asset( config('images.icons.location'))}}" alt="">
                                {{ $item->project_location_title }}
                            </p>
                        </section>
                        <div class="button link d-block text-center">@lang('home.feature-project.button.view_unit')</div>
                    </a>
                </article>
            </div>
        @endforeach
    </div>
    <div class="col-12 uk-text-center d-block d-md-none pt-4">
        <a href="{{ route('projects.index') }}" class="button link">@lang('unit.title.all_project')</a>
    </div>
</div>
