<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-project-center mb-1">
            <h2 class="article-title mb-0">PROJECT PREVIEW</h2>
            <a href="#" class="d-none d-md-block button more-text hidden-md">VIEW MORE</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <article class="card-video-highlight">
                <a href="#" class="box-click">
                    <div class="image-box">
                        <figure class="online-content image-16by9 mb-1">
                            <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="">
                            <span class="icon"> <img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                        </figure>
                    </div>
                    <div class="detail">
                        <span class="tag">พรีวิวโครงการ</span>
                        <p class="online-content sub-title mb-0">Project Highlight : Mulberry Grove The
                                                                 Forestias CondO
                        </p>
                        <span class="online-content sub-text-small">PUBLISHED : 23 AUG 2021 AT 06:09</span>
                    </div>
                </a>
            </article>
        </div>
        <div class="col-md-6">
            @for ($i = 0; $i < 3; $i++)
                <article class="card-video">
                    <a href="#" class="box-click">
                        <div class="image-box">
                            <figure class="online-content image-16by9 mb-0">
                                <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="">
                                <span class="icon"> <img src="{{asset( config('images.icons.play'))}}" alt="play icon"></span>
                            </figure>
                        </div>
                        <div class="detail">
                            <span class="tag">พรีวิวโครงการ</span>
                            <p class="online-content sub-title mb-0">Project Highlight : Mulberry Grove The
                                                                     Forestias CondO
                            </p>
                            <span class="online-content sub-text-small">PUBLISHED : 23 AUG 2021 AT 06:09</span>
                        </div>
                    </a>
                </article>
            @endfor
        </div>
    </div>
    <div class="col-12 uk-text-center d-block d-md-none pt-4">
        <a href="#" class="button link">View More</a>
    </div>
</div>
