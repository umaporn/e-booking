<footer class="online-footer">
    <div class="container online-content content-padding">
        <div class="row">
            <div class="col-md-2 order-md-4 pt-md-5">
                <figure class="svg-white logo-footer">
                    <img src="{{asset( config('images.logos.mqdc-all'))}}" alt="@lang('nav.logo-alt')">
                </figure>
            </div>
            <div class="col-md-5 order-md-1 mb-3 mb-md-0">
                <div class="row a-block pt-md-5">
                    <div class="col">
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <a href="#">Our Business</a>
                        <a href="#">Living Innovation</a>
                        <a href="#">Privileges</a>
                    </div>
                    <div class="col">
                        <a href="#">After-Sales Services</a>
                        <a href="#">News</a>
                        <a href="#">CSR</a>
                        <a href="#">Contact Us</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
            </div>
            <div class="col-md order-md-2">
                <p class="header-footer">Address</p>
                <p><b>Magnolia Quality Development Corporation Limited</b><br>
                695 Soi Sukumvit 50,
                Sukumvit Rd. Phrakanong,
                Klong Toey, Bangkok
                10260</p>
            </div>
            <div class="col-md order-md-3">
                <p class="header-footer">Connect</p>
                <div class="with-icon">
                    <figure class="svg-white mb-0">
                        <img src="{{asset( config('images.icons.mail'))}}">
                    </figure>
                    <a href="#" class="online-content color-white"> mqdc@mqdc.com</a>
                </div>
                <div class="with-icon">
                    <figure class="svg-white mb-0">
                        <img src="{{asset( config('images.icons.callcenter'))}}">
                    </figure>
                    <a href="#" class="online-content color-white"> Call center :  1265</a>
                </div>
                <p class="my-0">Opening hours<br>08.00 - 22.00 hrs.</p>  
                <p class="my-0">International Call <br><a href="#" class="online-content color-white">+662-012-4555</a></p>
                <ul class="social-footer">
                    <li><a href="#"><img src="{{asset( config('images.icons.social.fb'))}}"></a></li>
                    <li><a href="#"><img src="{{asset( config('images.icons.social.tw'))}}"></a></li>
                    <li><a href="#"><img src="{{asset( config('images.icons.social.ig'))}}"></a></li>
                    <li><a href="#"><img src="{{asset( config('images.icons.social.yt'))}}"></a></li>
                    <li><a href="#"><img src="{{asset( config('images.icons.social.line'))}}"></a></li>
                </ul>
            </div>
        </div>
        <div class="copyright mt-4">
            <p class="online-content white mb-0">© <?php echo date( 'Y' ) ?> Magnolia Quality Development Corporation Limited. All Rights Reserved.</p>
            <div class="policy-box">
                <a href="#" class="my-0">Privacy</a>
                <a href="#" class="my-0">Cookie Policy</a>
                <a href="#" class="my-0">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>