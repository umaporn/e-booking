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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROMOTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOW TO BOOK ONLINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
               <section class="nav-user home">
                   <a href=""><img src="{{asset( config('images.icons.user'))}}" alt="@lang('nav.login-alt')" class="icon"> LOGIN</a>
                   <a href="">REGISTER</a>
               </section>
            </div>
            <section class="nav-lang home order-4 order-xl-4">
                <a href="">TH</a>
                <a href="" class="active">EN</a>
            </section>
        </nav>
    </div>
</section>