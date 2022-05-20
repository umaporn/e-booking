<div class="container online-content content-padding">
    <div class="uk-width-3-4@m">
        <div class="title-project-center">
            <h2 class="article-title">@lang('projects.layout.head_title')</h2>
        </div>
        <article class="border-article-project-layout">
            <section class="tabs-box uk-padding">
                <ul class="uk-flex-center pb-3" uk-tab>
                    <li class="uk-active"><a href="#gallery1">@lang('projects.layout.project_title')</a></li>
                    <li><a href="#gallery2">@lang('projects.layout.unit_title')</a></li>
                </ul>
                <ul class="uk-switcher uk-margin">
                    <li>
                        <div class="row">
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-4">
                                <p class="col-4 text-right align-self-center mb-0">@lang('projects.layout.option.building')</p>
                                <select class="col-8 uk-select text-center">
                                    <option value="{{ $project->building['title'] }}">{{ $project->building['title'] }}</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-2 pb-sm-4">
                                <p class="col-4 text-right align-self-center mb-0">@lang('projects.layout.option.floor')</p>
                                <select class="col-8 uk-select text-center" id="floorGallery">
                                    @foreach($layouts as $floor)
                                        <option value="{{  $floor->floor_layout_image }}">{{ $floor->floor_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="tabs-content" data-tabs-content="tabs-gallery">
                            <div class="tabs-panel is-active" id="gallery1">
                                <figure class="online-content image-16by9 floorGallery">
                                    @foreach($layouts as $floor_image)
                                        <img id="{{$floor_image->floor_layout_image}}" src="{{ $floor_image->images.'?access_token='.$token}}">
                                    @endforeach
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 uk-text-center pt-4">
                            <a class="button link download_floor" download target="_blank"><img src="{{asset( config('images.icons.download'))}}" alt="">@lang('projects.btn.download_plan')
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-4">
                                <p class="col-5 text-right align-self-center mb-0">@lang('projects.layout.option.building_unit')</p>
                                <select class="col-7 uk-select text-center">
                                    <option value="{{ $project->building['title'] }}">{{ $project->building['title'] }}</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-2 pb-sm-4">
                                <p class="col-5 text-right align-self-center mb-0">@lang('projects.layout.option.floor_unit')</p>
                                <select class="col-7 uk-select text-center" id="unitGallery">
                                    @foreach($layouts as $floor)
                                        @foreach($floor->unitLayout as $unit)
                                            <option value="{{ $unit->unit_layout_image }}"> {{ $unit->unit_title }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="tabs-content" data-tabs-content="tabs-gallery">
                            <div class="tabs-panel" id="gallery2">
                                <figure class="online-content image-16by9 unitGallery">
                                    @foreach($layouts as $floor)
                                        @foreach($floor->unitLayout as $unit_image)
                                            <img id="{{ $unit_image->unit_layout_image }}" src="{{ $unit_image->images.'?access_token='.$token}}" alt="{{ $unit_image->title}}">
                                        @endforeach
                                    @endforeach
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 uk-text-center pt-4 ">
                            <a class="button link download_unit" download target="_blank"><img src="{{asset( config('images.icons.download'))}}" alt="">@lang('projects.btn.download_plan')
                            </a>
                        </div>
                    </li>
                </ul>
            </section>
        </article>
    </div>
</div>
