<section class="online-nav nav-home-position">
    <div class="container-xl width-xxl px-0">
        <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand order-3 order-xl-1" href="#">
                <img src="{{asset( config('images.logos.mqdc'))}}" alt="@lang('nav.logo-alt')">
            </a>
            <button class="navbar-toggler order-1 order-xl-2" type="button" data-toggle="collapse" data-target="#navbar-header"
                    aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{asset( config('images.icons.menu'))}}" alt="@lang('nav.menu-alt')">
            </button>
            <div class="collapse navbar-collapse order-2 order-xl-3" id="navbar-header">
                <ul class="navbar-nav mr-auto">
                    {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="{{ route('homepage') }}">HOME--}}
                    {{--<span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    @foreach(__('menu') as $menu=>$item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $item['link'] }}">{{ $item['title'] }}</a>
                        </li>
                    @endforeach

                </ul>
                <section class="nav-user home">
                    <a href=""><img src="{{asset( config('images.icons.user'))}}" alt="@lang('nav.login-alt')" class="icon">
                        LOGIN</a>
                    <a href="">REGISTER</a>
                </section>
            </div>
            <section class="nav-lang home order-4 order-xl-4">
                @foreach( config('app.language_codes') as $languageCode )
                    <a href="{{ route( 'language.change', [ 'languageCode' => $languageCode ] ) }}"
                       class="{{ ( config('app.locale') === $languageCode ) ? 'active' : ''  }}"
                    >
                        @lang( 'language.' . $languageCode )
                    </a>
                @endforeach
            </section>
        </nav>
    </div>
</section>
