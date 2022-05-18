<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-project-center mb-1">
            <h2 class="article-title mb-0">@lang('projects.preview.head')</h2>
            <a href="#" class="d-none d-md-block button more-text hidden-md">@lang('projects.btn.view_more')</a>
        </div>
    </div>
    <div class="row">
        @foreach($preview as $key=>$item)
            @if($key === 0)
                <div class="col-md-6">
                    <article class="card-video-highlight">
                        <a href="#" class="box-click">
                            <div class="image-box">
                                <figure class="online-content image-16by9 mb-1">
                                    <img src="{{ $item->preview_thumbnail.'?access_token='.$token }}" alt="{!! $item->preview_title !!}">
                                    <span class="icon"> <img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                                </figure>
                            </div>
                            <div class="detail">
                                <span class="tag">{!! $item->preview_type !!}</span>
                                <p class="online-content sub-title mb-0">{!! $item->preview_title !!}
                                </p>
                                <span class="online-content sub-text-small">@lang('home.publish')
                                    : {{ $item->publish_date }}</span>
                            </div>
                        </a>
                    </article>
                </div>
            @endif

            @if($key >= 1)
                @if($key===1)
                <div class="col-md-6">
                @endif
                    <article class="card-video">
                        <a href="#" class="box-click">
                            <div class="image-box">
                                <figure class="online-content image-16by9 mb-0">
                                    <img src="{{ $item->preview_thumbnail.'?access_token='.$token }}" alt="{!! $item->preview_title !!}">
                                    <span class="icon"><img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                                </figure>
                            </div>
                            <div class="detail">
                                <span class="tag">{!! $item->preview_type !!}</span>
                                <p class="online-content sub-title mb-0">{!! $item->preview_title !!}
                                </p>
                                <span class="online-content sub-text-small">@lang('home.publish')
                                    : {{ $item->publish_date }}</span>
                            </div>
                        </a>
                    </article>
                @if($key== sizeof($preview))
                </div>
                @endif
    @endif
    @endforeach

</div>
<div class="col-12 uk-text-center d-block d-md-none pt-4">
    <a href="#" class="button link">@lang('projects.btn.all_preview')</a>
</div>
</div>
