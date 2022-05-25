@foreach($projectList as $project)
    <div class="col-md-4 mb-4 uk-margin-medium-bottom">
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
                    <p class="online-content color-link font-bold mb-0">@lang('home.start') {{ $project->price }}
                    </p>
                    <h3 class="online-content sub-title my-0">{{ $project->project_name }}</h3>
                    <p class="online-content sub-text location">
                        <img src="{{asset( config('images.icons.location'))}}" alt="location">
                        {{ $project->project_location_title }}
                    </p>
                </section>
                <div class="button link d-block text-center" role="button">@lang('home.feature-project.button.view_unit')</div>
            </a>
        </article>
    </div>
@endforeach