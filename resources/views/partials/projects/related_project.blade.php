<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-project-center mb-1">
            <h2 class="article-title mb-0">@lang('projects.title.relate')</h2>
            <a href="#" class="d-none d-md-block button more-text">@lang('projects.btn.all_project')</a>
        </div>
    </div>
    <div class="row">
        @foreach($relate as $project)
            <div class="col-md-4 mb-4">
                <article class="card-project">
                    <a href="{{ route('projects.detail',['slug'=>$project->slug]) }}" class="box-click">
                        <figure class="logo">
                            <img src="{{ $project->project_logo.'?access_token='.$token }}" alt="{{ $project->project_name }}">
                        </figure>
                        <figure class="image my-0">
                            <img src="{{ $project->project_thumbnail.'?access_token='.$token }}" alt="{{ $project->project_name }}">
                            <div class="status">
                                <p class="new mb-2">New</p>
                                <p class="move mb-0" style="background-color:{{ $project->ProjectStatus->color}};color:{{$project->ProjectStatus->font_color}}; ">{{ $project->project_status_title }}</p>
                            </div>
                            <span class="name">{{ $project->project_name }}</span>
                        </figure>
                        <section class="detail">
                            <p class="property-type">{{ $project->project_type_title }}</p>
                            <p class="online-content color-link font-bold mb-0">@lang('home.start') {{ $project->price }}</p>
                            <h3 class="online-content sub-title my-0">{{ $project->project_name }}</h3>
                            <p class="online-content sub-text location">
                                <img src="{{asset( config('images.icons.location'))}}" alt="">
                                {{ $project->project_location_title }}
                            </p>
                        </section>
                        <div class="button link d-block text-center">@lang('home.feature-project.button.view_unit')</div>
                    </a>
                </article>
            </div>
        @endforeach
    </div>
    <div class="col-12 uk-text-center d-block d-md-none pt-4">
        <a href="#" class="button link">@lang('projects.btn.all_project')</a>
    </div>
</div>
