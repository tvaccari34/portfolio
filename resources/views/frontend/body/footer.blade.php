@php
    $footer = App\Models\Footer::first();

@endphp

<!-- Footer-area -->
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{$footer->footer_phone_number}}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{$footer->footer_short_description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">my address</h5>
                        <h4 class="title">{{$footer->footer_country}}</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{$footer->footer_address}}</p>
                        <a href="mailto:{{$footer->footer_email}}" class="mail">{{$footer->footer_email}}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Follow me</h5>
                        <h4 class="title">{{$footer->footer_social_title}}</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>{{$footer->footer_social_description}}</p>
                        <ul class="footer__social__list">
                            @if ($footer->footer_social_facebook)
                                <li><a href="{{$footer->footer_social_facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if ($footer->footer_social_twitter)
                                <li><a href="{{$footer->footer_social_twitter}}"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if ($footer->footer_social_behance)
                                <li><a href="{{$footer->footer_social_behance}}"><i class="fab fa-behance"></i></a></li>
                            @endif
                            @if ($footer->footer_social_linkedin)
                                <li><a href="{{$footer->footer_social_linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                            @endif
                            @if ($footer->footer_social_instagram)
                                <li><a href="{{$footer->footer_social_instagram}}"><i class="fab fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{$footer->footer_copyright}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-area-end -->
