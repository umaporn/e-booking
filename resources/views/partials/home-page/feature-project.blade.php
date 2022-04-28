<section class="home-project">
    <div class="container online-content content-padding pt-0">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="online-content title mb-0">@lang('home.feature-project.header_line')</h2>
            <a href="#" class="button more-text">@lang('home.feature-project.button.all_project')</a>
        </div>
        <div class="row">
            @foreach($project as $key=>$item)
                @if($key === 0)
                    <div class="col-md-8 mb-4">
                        <article class="card-project-highlight">
                            <a href="#" class="box-click">
                                <figure class="image my-0">
                                    <img src="images/theme/example-img-banner-01.jpg" alt="example image alt">
                                    <div class="status">
                                        <p class="new mb-2">{{ $item->project_status_title }}</p>
                                    </div>
                                    <span class="name">{{ $item->project_name }}</span>
                                </figure>
                                <section class="detail">
                                    <p class="online-content font-bold mb-0">{{ $item->price }}</p>
                                    <h3 class="online-content sub-title my-0">{{ $item->project_name }}</h3>
                                    <p class="online-content sub-text location">
                                        <img src="{{asset( config('images.icons.location'))}}" alt="">{{ $item->project_location }}
                                    </p>
                                </section>
                            </a>
                        </article>
                    </div>
                @else
                    <div class="col-md-4 mb-4">
                        <article class="card-project">
                            <a href="#" class="box-click">
                                <figure class="logo">
                                    <img src="images/theme/example-project.svg" alt="example logo alt">
                                </figure>
                                <figure class="image my-0">
                                    <img src="images/theme/example-img-banner-01.jpg" alt="example image alt">
                                    <div class="status">
                                        <p class="new mb-2">{{ $item->project_status_title }}</p>
                                        {{--<p class="move mb-0">Ready to move</p>--}}
                                    </div>
                                    <span class="name">{{ $item->project_name }}</span>
                                </figure>
                                <section class="detail">
                                    <p class="property-type">{{ $item->project_type_title }}</p>
                                    <p class="online-content color-link font-bold mb-0">เริ่มต้น {{ $item->price }} ล้านบาท</p>
                                    <h3 class="online-content sub-title my-0">{{ $item->project_name }}</h3>
                                    <p class="online-content sub-text location">
                                        <img src="{{asset( config('images.icons.location'))}}" alt="">{{ $item->project_location }}
                                    </p>
                                </section>
                                <div class="button link d-block text-center">@lang('home.feature-project.button.view_unit')</div>
                            </a>
                        </article>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>