<section class="home-preview">
    <div class="container online-content content-padding">
        <h2 class="online-content title">@lang('home.feature-preview.header_line')</h2>
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
                                    <p class="online-content sub-title mb-0">{!! $item->preview_title !!}</p>
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
                                            <span class="icon"> <img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                                        </figure>
                                    </div>
                                    <div class="detail">
                                        <span class="tag">{!! $item->preview_type !!}</span>
                                        <p class="online-content sub-title mb-0">{!! $item->preview_title !!}</p>
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
    </div>
</section>