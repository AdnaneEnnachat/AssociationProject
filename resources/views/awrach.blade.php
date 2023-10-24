<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awrach</title>
    <link rel="shortcut icon" href="{{asset('images/StepLogo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/inscriptionForm.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/css/slick-theme.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body{
            min-width: 335px;
        }
        .act-border{
            background-image: url("{{asset('images/border.svg')}}");
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 50px;
            width: 200px;
            min-height: 280px;
            margin-top: -10px;
            padding-left: 10px;
            padding-right: 10px;
        }
        .swal2-actions{
            display: none;
        }
        .swal2-confirm {
            display: none;
        }
        .hide-button .swal2-confirm {
            display: none;
        }
        /* Animations */
        .fade-in {
            opacity: 0;
            transition: opacity .7s ease-in-out;
        }

        .fade-in.active {
            opacity: 1;
            transition: opacity .7s ease-in-out;
        }
        .act-fade{
            opacity: 0;
            transition: opacity .7s ease-in-out;
        }
        .act-fade.active{
            opacity: 1;
            transition: opacity .7s ease-in-out;
        }

        @media screen and (max-width: 900px) {
            .about-container {
                flex-direction: column;
            }
        }
        @if(App::getLocale()==='ar')
        .errors{
            unicode-bidi: plaintext;
            text-align: initial;
        }
        .act-container .act-list {
            flex-direction: row-reverse;
        }
        .act-container h5 {
            width: 62px;
            margin-left: auto;
        }
        .formbold-form-input{
            text-align: end;
        }
        .formbold-form-label{
            text-align: end;
        }
        .formbold-form-select {
            text-align: end;
        }
        @endif
        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: #ffc107;
        }
        .slick-dots li button:before{
            font-size: 8px;
        }
    </style>

</head>
<body>
<!--Top nav bar Code !-->
@include('layouts.navbar')
<!-- Slick !-->
<div class="container-xxl">
    <div class="slick-container">
        <div class="slick-content"><img src="{{asset('images/awrach.png')}}"></div>
        <div class="slick-content"><img src="{{asset('images/awrach2.png')}}"></div>
        <div class="slick-content"><img src="{{asset('images/awrach3.png')}}"></div>
    </div>
</div>
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">

        <center><h4>{{ __('messages.awrach-inscription') }}</h4></center>
        <form action="{{url('awrach-inscription')}}" method="POST" id="myForm" enctype="multipart/form-data">
            @csrf
            <div class="formbold-input-group">
                <label for="name" class="formbold-form-label"> {{ __('messages.fullname') }} <span>*</span></label>
                @error('fullname')
                <p class="errors">{{ $message ?? '' }}</p>
                @enderror
                <input
                    type="text"
                    name="fullname"
                    id="name"
                    placeholder=""
                    class="formbold-form-input"
                    value="{{old('fullname')}}"
                />
            </div>

            <div class="formbold-input-group">
                <label for="email" class="formbold-form-label">{{ __('messages.email') }}<span>*</span></label>
                @error('email')
                <p class="errors">{{ $message ?? '' }}</p>
                @enderror
                <input
                    type="text"
                    name="email"
                    id="email"
                    placeholder=""
                    class="formbold-form-input"
                    value="{{old('email')}}"
                />
            </div>

            <div class="formbold-input-group">
                <label for="phone" class="formbold-form-label"> {{ __('messages.phone') }} <span>*</span>  </label>
                @error('phone')
                <p class="errors">{{ $message ?? '' }}</p>
                @enderror
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder=""
                    class="formbold-form-input"
                    value='{{old('phone')}}'
                />

            </div>
            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    {{ __('messages.chose-Section') }}<span>*</span>
                </label>
                @error('section')
                <p class="errors">{{ $message ?? '' }}</p>
                @enderror
                <select class="formbold-form-select" name="section" id="occupation">
                    <option value="Education">{{ __('messages.education') }}</option>
                    <option value="Health">{{ __('messages.Health') }}</option>

                </select>
            </div>
            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    {{ __('messages.educationLevel') }} <span>*</span>
                </label>
                @error('educationLevel')
                <p class="errors">{{ $message ?? '' }}</p>
                @enderror
                <select class="formbold-form-select" name="educationLevel" id="occupation">
                    <option value="Bac+2">Bac+2</option>
                    <option value="Bac+3">Bac+3</option>
                    <option value="Bac+4">Bac+4</option>
                    <option value="Superior to Bac+4">Superior to Bac+4</option>
                </select>
            </div>
            <div class="formbold-input-group">
                <label class="formbold-form-label">
                    {{ __('messages.commune-choose') }} <span>*</span>
                </label>
                @error('commune')
                <p class="errors">{{ $message ?? '' }}</p>
                @enderror
                <select class="formbold-form-select" name="commune" id="occupation">
                    <option value="Dar Bouazza">{{ __('messages.dar-bouazza') }}</option>
                    <option value="Oulad Salah">{{ __('messages.Oulad-Salah') }}</option>
                    <option value="Bouskoura">{{ __('messages.Bouskoura') }}</option>
                    <option value="Nouaceur">{{ __('messages.Nouaceur') }}</option>
                    <option value="Oulad Azouz">{{ __('messages.Oulad-Azouz') }}</option>
                </select>
            </div>
            <div class="formbold-input-group">
                    <label for="cv" class="formbold-form-label">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1670_1531)">
                                <path d="M12.3568 6.4644L7.64349 11.1786C7.5639 11.2554 7.50041 11.3474 7.45674 11.4491C7.41307 11.5507 7.39008 11.6601 7.38912 11.7707C7.38815 11.8814 7.40924 11.9911 7.45114 12.0935C7.49304 12.1959 7.55492 12.289 7.63316 12.3672C7.71141 12.4455 7.80445 12.5073 7.90686 12.5492C8.00928 12.5912 8.11901 12.6122 8.22966 12.6113C8.34031 12.6103 8.44966 12.5873 8.55133 12.5436C8.653 12.5 8.74495 12.4365 8.82182 12.3569L13.536 7.64356C14.0049 7.17468 14.2683 6.53875 14.2683 5.87565C14.2683 5.21255 14.0049 4.57661 13.536 4.10773C13.0671 3.63885 12.4312 3.37544 11.7681 3.37544C11.105 3.37544 10.469 3.63885 10.0002 4.10773L5.28599 8.8219C4.89105 9.20701 4.57652 9.6667 4.36062 10.1743C4.14473 10.6819 4.03178 11.2274 4.02832 11.779C4.02487 12.3306 4.13097 12.8774 4.34049 13.3877C4.55 13.8979 4.85876 14.3615 5.24884 14.7516C5.63892 15.1416 6.10256 15.4503 6.61287 15.6597C7.12318 15.8692 7.67 15.9752 8.2216 15.9717C8.77321 15.9681 9.31862 15.8551 9.82621 15.6391C10.3338 15.4232 10.7934 15.1086 11.1785 14.7136L15.8927 10.0002L17.071 11.1786L12.3568 15.8927C11.8151 16.4344 11.172 16.8641 10.4643 17.1573C9.75649 17.4505 8.99791 17.6014 8.23182 17.6014C7.46574 17.6014 6.70716 17.4505 5.99939 17.1573C5.29162 16.8641 4.64853 16.4344 4.10682 15.8927C3.56512 15.351 3.13542 14.7079 2.84225 14.0002C2.54908 13.2924 2.39819 12.5338 2.39819 11.7677C2.39819 11.0016 2.54908 10.2431 2.84225 9.5353C3.13542 8.82753 3.56512 8.18443 4.10682 7.64273L8.82182 2.9294C9.60767 2.17041 10.6602 1.75043 11.7527 1.75992C12.8451 1.76942 13.8902 2.20762 14.6627 2.98015C15.4353 3.75269 15.8735 4.79774 15.883 5.89023C15.8925 6.98271 15.4725 8.03522 14.7135 8.82106L10.0002 13.5369C9.76794 13.7691 9.49226 13.9532 9.18887 14.0788C8.88548 14.2045 8.56032 14.2691 8.23195 14.2691C7.90357 14.269 7.57843 14.2043 7.27507 14.0786C6.97171 13.9529 6.69607 13.7687 6.46391 13.5365C6.23174 13.3043 6.04759 13.0286 5.92196 12.7252C5.79633 12.4218 5.7317 12.0966 5.73173 11.7683C5.73177 11.4399 5.79649 11.1148 5.92219 10.8114C6.04788 10.508 6.2321 10.2324 6.46432 10.0002L11.1785 5.28606L12.3568 6.4644Z" fill="#07074D"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1670_1531">
                                    <rect width="20" height="20" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        {{ __('messages.cv') }}<span>*</span>
                        <input type="file" name="cv"  id="cv" hidden>
                    </label>
                    @error('cv')
                    <p class="errors">{{ $message ?? '' }}</p>
                @enderror
            </div><br>
            <div class="formbold-input-group">
                <label for="photo" class="formbold-form-label">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1670_1531)">
                            <path d="M12.3568 6.4644L7.64349 11.1786C7.5639 11.2554 7.50041 11.3474 7.45674 11.4491C7.41307 11.5507 7.39008 11.6601 7.38912 11.7707C7.38815 11.8814 7.40924 11.9911 7.45114 12.0935C7.49304 12.1959 7.55492 12.289 7.63316 12.3672C7.71141 12.4455 7.80445 12.5073 7.90686 12.5492C8.00928 12.5912 8.11901 12.6122 8.22966 12.6113C8.34031 12.6103 8.44966 12.5873 8.55133 12.5436C8.653 12.5 8.74495 12.4365 8.82182 12.3569L13.536 7.64356C14.0049 7.17468 14.2683 6.53875 14.2683 5.87565C14.2683 5.21255 14.0049 4.57661 13.536 4.10773C13.0671 3.63885 12.4312 3.37544 11.7681 3.37544C11.105 3.37544 10.469 3.63885 10.0002 4.10773L5.28599 8.8219C4.89105 9.20701 4.57652 9.6667 4.36062 10.1743C4.14473 10.6819 4.03178 11.2274 4.02832 11.779C4.02487 12.3306 4.13097 12.8774 4.34049 13.3877C4.55 13.8979 4.85876 14.3615 5.24884 14.7516C5.63892 15.1416 6.10256 15.4503 6.61287 15.6597C7.12318 15.8692 7.67 15.9752 8.2216 15.9717C8.77321 15.9681 9.31862 15.8551 9.82621 15.6391C10.3338 15.4232 10.7934 15.1086 11.1785 14.7136L15.8927 10.0002L17.071 11.1786L12.3568 15.8927C11.8151 16.4344 11.172 16.8641 10.4643 17.1573C9.75649 17.4505 8.99791 17.6014 8.23182 17.6014C7.46574 17.6014 6.70716 17.4505 5.99939 17.1573C5.29162 16.8641 4.64853 16.4344 4.10682 15.8927C3.56512 15.351 3.13542 14.7079 2.84225 14.0002C2.54908 13.2924 2.39819 12.5338 2.39819 11.7677C2.39819 11.0016 2.54908 10.2431 2.84225 9.5353C3.13542 8.82753 3.56512 8.18443 4.10682 7.64273L8.82182 2.9294C9.60767 2.17041 10.6602 1.75043 11.7527 1.75992C12.8451 1.76942 13.8902 2.20762 14.6627 2.98015C15.4353 3.75269 15.8735 4.79774 15.883 5.89023C15.8925 6.98271 15.4725 8.03522 14.7135 8.82106L10.0002 13.5369C9.76794 13.7691 9.49226 13.9532 9.18887 14.0788C8.88548 14.2045 8.56032 14.2691 8.23195 14.2691C7.90357 14.269 7.57843 14.2043 7.27507 14.0786C6.97171 13.9529 6.69607 13.7687 6.46391 13.5365C6.23174 13.3043 6.04759 13.0286 5.92196 12.7252C5.79633 12.4218 5.7317 12.0966 5.73173 11.7683C5.73177 11.4399 5.79649 11.1148 5.92219 10.8114C6.04788 10.508 6.2321 10.2324 6.46432 10.0002L11.1785 5.28606L12.3568 6.4644Z" fill="#07074D"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1670_1531">
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __('messages.photo') }} <span>*</span>
                    <input type="file" name="photo"  id="photo" hidden>
                </label>@error('photo')
                <p class="errors">{{ $message ?? '' }}</p>
                @enderror </div><br>
                <div class="formbold-input-group">
                    <label for="diplome" class="formbold-form-label">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1670_1531)">
                                <path d="M12.3568 6.4644L7.64349 11.1786C7.5639 11.2554 7.50041 11.3474 7.45674 11.4491C7.41307 11.5507 7.39008 11.6601 7.38912 11.7707C7.38815 11.8814 7.40924 11.9911 7.45114 12.0935C7.49304 12.1959 7.55492 12.289 7.63316 12.3672C7.71141 12.4455 7.80445 12.5073 7.90686 12.5492C8.00928 12.5912 8.11901 12.6122 8.22966 12.6113C8.34031 12.6103 8.44966 12.5873 8.55133 12.5436C8.653 12.5 8.74495 12.4365 8.82182 12.3569L13.536 7.64356C14.0049 7.17468 14.2683 6.53875 14.2683 5.87565C14.2683 5.21255 14.0049 4.57661 13.536 4.10773C13.0671 3.63885 12.4312 3.37544 11.7681 3.37544C11.105 3.37544 10.469 3.63885 10.0002 4.10773L5.28599 8.8219C4.89105 9.20701 4.57652 9.6667 4.36062 10.1743C4.14473 10.6819 4.03178 11.2274 4.02832 11.779C4.02487 12.3306 4.13097 12.8774 4.34049 13.3877C4.55 13.8979 4.85876 14.3615 5.24884 14.7516C5.63892 15.1416 6.10256 15.4503 6.61287 15.6597C7.12318 15.8692 7.67 15.9752 8.2216 15.9717C8.77321 15.9681 9.31862 15.8551 9.82621 15.6391C10.3338 15.4232 10.7934 15.1086 11.1785 14.7136L15.8927 10.0002L17.071 11.1786L12.3568 15.8927C11.8151 16.4344 11.172 16.8641 10.4643 17.1573C9.75649 17.4505 8.99791 17.6014 8.23182 17.6014C7.46574 17.6014 6.70716 17.4505 5.99939 17.1573C5.29162 16.8641 4.64853 16.4344 4.10682 15.8927C3.56512 15.351 3.13542 14.7079 2.84225 14.0002C2.54908 13.2924 2.39819 12.5338 2.39819 11.7677C2.39819 11.0016 2.54908 10.2431 2.84225 9.5353C3.13542 8.82753 3.56512 8.18443 4.10682 7.64273L8.82182 2.9294C9.60767 2.17041 10.6602 1.75043 11.7527 1.75992C12.8451 1.76942 13.8902 2.20762 14.6627 2.98015C15.4353 3.75269 15.8735 4.79774 15.883 5.89023C15.8925 6.98271 15.4725 8.03522 14.7135 8.82106L10.0002 13.5369C9.76794 13.7691 9.49226 13.9532 9.18887 14.0788C8.88548 14.2045 8.56032 14.2691 8.23195 14.2691C7.90357 14.269 7.57843 14.2043 7.27507 14.0786C6.97171 13.9529 6.69607 13.7687 6.46391 13.5365C6.23174 13.3043 6.04759 13.0286 5.92196 12.7252C5.79633 12.4218 5.7317 12.0966 5.73173 11.7683C5.73177 11.4399 5.79649 11.1148 5.92219 10.8114C6.04788 10.508 6.2321 10.2324 6.46432 10.0002L11.1785 5.28606L12.3568 6.4644Z" fill="#07074D"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1670_1531">
                                    <rect width="20" height="20" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        {{ __('messages.diplome') }}<span>*</span>
                        <input type="file" name="diplome"  id="diplome" hidden>
                    </label>
                    @error('diplome')
                    <p class="errors">{{ $message ?? '' }}</p>
                    @enderror

                </div>
                <p class="formbold-form-label"> <span> (*) </span> Required field</p>
                <button class="formbold-btn">{{ __('messages.register') }}</button>
        </form>
    </div>
</div>
</div>
<!-- footer !-->
@include('layouts.footer')
</body>
<script src="{{asset('js/jquery/jquery.js')}}"></script>
<script src="{{asset('js/slick/slick.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script>
    //slider
    $('.slick-container').slick({
        dots: true,
        infinite: false,
        speed: false,
        fade: false,
        cssEase: 'linear',
        arrows:false,
        autoplay:false,
        autoplaySpeed:false,
    });


    @if (session('success_message'))
        Swal.fire({
        title: '{{__("messages.successfully")}}',
        html: '<form action="{{url('download-pdf').'/'.session('Dossier')}}" method="POST"> @csrf <button style="border: none;padding: 10px;border-radius: 10px; " type="submit">{{__("messages.pdf")}}</button> </form>',
        icon: 'success',
        confirmButton:false,
        confirmButtonText: "",
        customClass: {
            confirmButton: "hide-button"
        }
    })
    @endif
    @if (session('success_message'))
        document.getElementById("myForm").reset();
    @endif



</script>
</html>
