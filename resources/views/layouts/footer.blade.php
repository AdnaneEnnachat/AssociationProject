@if(App::getLocale()==='ar')
    <style>
        .container-first-footer,.container-first-footer .social-info .detail-social,.seconde-footer .container-seconde-footer .copyright p  {
            flex-direction: row-reverse;
        }
        .first-footer .container-first-footer h5,.container-first-footer .step-info p{
            text-align: end;
        }
        .container-first-footer .detail-contact {
            flex-direction: row-reverse;
        }
        .container-first-footer .detail-contact img{
            transform: rotateY(180deg);
        }

    </style>
@endif
<footer>
    <div class="first-footer">
        <div class="container container-first-footer">
            <div class="step-info">
                <h5>{{ __('messages.Step_Academy') }}</h5>
                <p>{{ __('messages.step_desc') }}</p>
            </div>
            <div class="footer-hr"></div>
            <div class="contact-info">
                <h5>{{ __('messages.contact_us') }}</h5>
                <div class="section-contact">
                    <div class="detail-contact">
                        <img width="30px" src="{{asset('icons/location.png')}}">
                        <p>ERRAHMA 2 DAR BOUAZZA NOUACEUR</p>
                    </div>
                    <div class="detail-contact">
                        <img width="23px" src="{{asset('icons/telephone.png')}}">
                        <p>+212 703119099</p>
                    </div>
                    <div class="detail-contact">
                        <img width="23px" src="{{asset('icons/mail.png')}}">
                        <p>step.association2023@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="footer-hr"></div>
            <div class="social-info">
                <h5>{{ __('messages.follow') }}</h5>
                <div class="detail-social">
                    <a target="_blank" href="https://www.facebook.com/ALnakhil16?mibextid=ZbWKwL"><img src="{{asset('icons/facebook.png')}}" width="30px" alt="Facebook"></a>
                    <a target="_blank" href="https://instagram.com/step_academy111?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><img src="{{asset('icons/instagram.png')}}" width="30px" alt="instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="seconde-footer">
        <div class="container container-seconde-footer">
            <div class="copyright">
                <p>{{ __('messages.copyright') }}</p>
            </div>
        </div>
    </div>
</footer>
