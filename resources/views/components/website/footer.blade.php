
<footer id="footer">
    {{-- <x-newsletter /> --}}

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <img src="{{ asset("./img/full_orgondiesel.png") }}" alt="ORGON" class="img-fluid">
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">

                    <h4>Dirección</h4>
                    <p>
                        Avenida Petapa <br>
                        50-40 Zona 12, 01012 <br>
                        Guatemala, Guatemala, C.A.<br><br>
                        <strong>@lang('Phone'):</strong> (+502) 2500-0200<br>
                        <strong>@lang('Email'):</strong> info@orgondiesel.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="">@lang('Enterprice')</a></li>
                        <li><a href="">@lang('Our brand')</a></li>
                        <li><a href="">@lang('Job')</a></li>
                        <li><a href="">@lang('Terms of service')</a></li>
                        <li><a href="">@lang('Privacy policy')</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Redes sociales</h4>
                    <p>Siguenos en nuestras redes sociales</p>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/orgondiesel/" class="facebook" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py4">
        <dic class="copyright">
            {{date('Y')}} &copy; Orgon Diesel. @lang('All Rights Reserved')
        </dic>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
