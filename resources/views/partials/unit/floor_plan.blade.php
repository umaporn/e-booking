<div class="container online-content content-padding">
    <div class="uk-width-3-4@m">
        <div class="title-unit-center d-block d-sm-flex">
            <h2 class="article-title">@lang('unit.title.floor_plan')</h2>
        </div>
        <article class="border-floor-plan">
            <section class="tabs-box uk-padding">
                <ul class="uk-flex-center pb-3" uk-tab>
                    <li class="uk-active"><a href="#">@lang('unit.title.unit_layout')</a></li>
                    <li><a href="#">@lang('unit.title.floor_plan')</a></li>
                </ul>
                <ul class="uk-switcher uk-margin">
                    <li>
                        <div class="row">
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-4">
                                {{--<p class="col-4 text-right align-self-center mb-0">Building</p>--}}
                                {{--<select class="col-8 uk-select text-center">--}}
                                {{--<option>Building A</option>--}}
                                {{--<option>Building B</option>--}}
                                {{--</select>--}}
                            </div>
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-2 pb-sm-4">
                                {{--<p class="col-4 text-right align-self-center mb-0">Floor</p>--}}
                                {{--<select class="col-8 uk-select text-center">--}}
                                {{--<option>Ground Floor Plan</option>--}}
                                {{--<option>Ground Floor All Plan</option>--}}
                                {{--</select>--}}
                            </div>
                        </div>
                        <figure class="img-floor-plan online-content d-flex justify-content-center align-content-center">
                            <img class="img-fluid h-100" src="{{ $unit[0]->images_unit_layout.'?access_token='.$token}}">
                        </figure>
                        <div class="col-12 uk-text-center pt-4">
                            <a href="#" class="button link"><img src="{{asset( config('images.icons.download'))}}">@lang('unit.title.download_plan')
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-4">
                                {{--<p class="col-5 text-right align-self-center mb-0">Building Unit</p>--}}
                                {{--<select class="col-7 uk-select text-center">--}}
                                {{--<option>Building A</option>--}}
                                {{--<option>Building B</option>--}}
                                {{--</select>--}}
                            </div>
                            <div class="col-12 col-md-6 uk-flex uk-flex-around pb-2 pb-sm-4">
                                {{--<p class="col-5 text-right align-self-center mb-0">Floor Unit</p>--}}
                                {{--<select class="col-7 uk-select text-center">--}}
                                {{--<option>Ground Floor Plan</option>--}}
                                {{--<option>Ground Floor All Plan</option>--}}
                                {{--</select>--}}
                            </div>
                        </div>
                        <figure class="img-floor-plan online-content d-flex justify-content-center align-content-center">
                            <img class="img-fluid h-100" src="{{$unit[0]->images_floor_layout.'?access_token='.$token}}">
                        </figure>
                        <div class="col-12 uk-text-center pt-4">
                            <a href="#" class="button link"><img src="{{asset( config('images.icons.download'))}}" alt="">@lang('unit.title.download_plan')
                            </a>
                        </div>
                    </li>
                </ul>
            </section>
        </article>
    </div>
</div>
