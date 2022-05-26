<section class="header-image position-relative">
    <div class="row">
        <div class="uk-grid-collapse uk-child-width-1-3@s project" uk-grid>
            @foreach($project->gallery_files as $i =>$image )
                @if($i < 3)
                    <div class="col-lg-4 col-md-12 col-sm-12 p-0 {{ $i==2?'prject-active':'project-image' }}" data-toggle="modal" data-target="#modal">
                        <a href="#lightbox" data-slide-to="{{ $i  }}"><img src="{{ $image.'?access_token='.$token }}" class=""></a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
                    <ol class="carousel-indicators">
                        @foreach($project->gallery_files as $j =>$image )
                            <li data-target="#lightbox" data-slide-to="{{ $j }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($project->gallery_files as $k =>$img )
                            <div class="carousel-item {{ $k==0?'active':'' }}">
                                <img src="{{  $img.'?access_token='.$token }} " class="w-100" alt=""></div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="header-button-viewmore">
    <div class="uk-position-bottom uk-flex w-100">
        <div class="container uk-flex uk-flex-right uk-flex-left@s uk-margin uk-margin-bottom">
            <a class="button button-viewmore" data-toggle="modal" data-target="#modal" data-slide-to="0" href="#lightbox">
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
    @include('partials.projects.gallery')
</section>

