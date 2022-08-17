<hr class="hr-between">
<section class="featured-project">
    <div class="container uk-margin-xlarge-bottom uk-margin-large-top">
        <div class="mb-5">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h2 class="online-content title mb-0">@lang('unit.relate.feature_title')</h2>
                <a href="{{ route( 'projects.index' ) }}" class="d-none d-md-block button more-text hidden-md">@lang('unit.btn.all_project')</a>
            </div>
        </div>
        <div class="row">
            @foreach($project as $item)
                <div class="col-md-4 mb-4 uk-margin-medium-bottom">
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
                                <p class="online-content color-link font-bold mb-0">@lang('home.start') {{ $item->price }}
                                </p>
                                <h3 class="online-content sub-title my-0">{{ $item->project_name }}</h3>
                                <p class="online-content sub-text location">
                                    <img src="{{asset( config('images.icons.location'))}}">
                                    {{ $item->project_location_title }}
                                </p>
                            </section>
                            <div class="button link d-block text-center">@lang('home.feature-project.button.view_unit')</div>
                        </a>
                    </article>
                </div>
            @endforeach
        </div>
    </div>

</section>
