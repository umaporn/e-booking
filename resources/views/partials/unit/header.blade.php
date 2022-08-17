<section class="header-image position-relative">
    <div class="row">
        <div class="uk-grid-collapse uk-child-width-1-3@s" uk-grid>
            @if($unit[0]->gallery_files )
                @foreach($unit[0]->gallery_files as $key=>$gallery)
                    @if($key < 3)
                        <div class="uk-light uk-visible@s position-relative">
                            <a class="image-bg" href="{{$gallery['file_url'].'?access_token='.$token}}" data-fancybox="gallery" data-caption="{{ $gallery['title'] }}">
                                <img src="{{$gallery['file_url'].'?access_token='.$token}}" alt="{{ $gallery['title'] }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</section>

<section class="header-button-viewmore">
    <div class="uk-position-bottom uk-flex w-100">
        <div class="container uk-flex uk-flex-right uk-flex-left@s uk-margin uk-margin-bottom">
            <a class="button button-viewmore" id="button-viewmore" data-fancybox-trigger="gallery" data-src="#gallery-show" href="javascript:;">
                <svg id="viewmore-icon" xmlns="http://www.w3.org/2000/svg" width="15.756" height="15.756" viewBox="0 0 15.756 15.756">
                    <g id="Group_1626" data-name="Group 1626">
                        <path id="Path_7284" data-name="Path 7284" d="M6.451,0H.33A.33.33,0,0,0,0,.33V6.451a.33.33,0,0,0,.33.33H6.451a.33.33,0,0,0,.33-.33V.33A.33.33,0,0,0,6.451,0Z" fill="#fff"/>
                        <path id="Path_7285" data-name="Path 7285" d="M60.849,0H54.728a.33.33,0,0,0-.33.33V6.451a.33.33,0,0,0,.33.33h6.121a.33.33,0,0,0,.33-.33V.33A.33.33,0,0,0,60.849,0Z" transform="translate(-45.423)" fill="#fff"/>
                        <path id="Path_7286" data-name="Path 7286" d="M6.451,54.4H.33a.33.33,0,0,0-.33.33v6.121a.33.33,0,0,0,.33.33H6.451a.33.33,0,0,0,.33-.33V54.728A.33.33,0,0,0,6.451,54.4Z" transform="translate(0 -45.423)" fill="#fff"/>
                        <path id="Path_7287" data-name="Path 7287" d="M60.849,54.4H54.728a.33.33,0,0,0-.33.33v6.121a.33.33,0,0,0,.33.33h6.121a.33.33,0,0,0,.33-.33V54.728A.33.33,0,0,0,60.849,54.4Z" transform="translate(-45.423 -45.423)" fill="#fff"/>
                    </g>
                </svg>
                View more
            </a>
        </div>
    </div>
    @include('partials.unit.gallery')
</section>
