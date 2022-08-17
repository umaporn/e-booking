<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand nav-detail">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto" uk-scrollspy-nav="closest: li; scroll: true;cls:uk-active;offset:0;">
                    @foreach(__('unit.menu') as  $key =>$menu)
                        <li class="nav-item {{ $key==0?'active':''}}">
                            <a class="nav-link" href="{{ $menu['target'] }}">{{ $menu['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>
