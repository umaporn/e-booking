<div class="container online-content content-padding">
    <div class="mb-5">
        <div class="title-project-center mb-1">
            <h2 class="article-title mb-0">RELATED PROJECTS</h2>
            <a href="#" class="d-none d-md-block button more-text">ALL PROJECT</a>
        </div>
    </div>
    <div class="row">
        @for ($i = 0; $i < 3; $i++)
            <div class="col-md-4 mb-4">
                <article class="card-project">
                    <a href="#" class="box-click">
                        <figure class="logo">
                            <img src="{{asset('images/theme/example-project.svg')}}" alt="example logo alt">
                        </figure>
                        <figure class="image my-0">
                            <img src="{{asset('images/theme/example-img-banner-01.jpg')}}" alt="example image alt">
                            <div class="status">
                                <p class="new mb-2">New</p>
                                <p class="move mb-0">Ready to move</p>
                            </div>
                            <span class="name">Whizdom The Forestias</span>
                        </figure>
                        <section class="detail">
                            <p class="property-type">condo</p>
                            <p class="online-content color-link font-bold mb-0">เริ่มต้น 3.99 ล้านบาท</p>
                            <h3 class="online-content sub-title my-0">Mulberry Grove The Forestias Condominiums</h3>
                            <p class="online-content sub-text location">
                                <img src="{{asset( config('images.icons.location'))}}" alt="">
                                Khlong Toei, Bangkok Near BTS Ekkamai
                            </p>
                        </section>
                        <div class="button link d-block text-center">UNIT IN PROJECT</div>
                    </a>
                </article>
            </div>
        @endfor
    </div>
    <div class="col-12 uk-text-center d-block d-md-none pt-4">
        <a href="#" class="button link">All PROJECT</a>
    </div>
</div>
