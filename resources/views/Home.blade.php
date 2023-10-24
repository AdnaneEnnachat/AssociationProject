<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/css/slick-theme.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body{
            min-width: 335px;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
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
            .about-container {
                flex-direction: row-reverse;
            }
            .about-container .about-content p{
                text-align: end;
            }
            .about-container .about-content h5{
                margin-left: AUTO;
            }
            .about-container .about-img img {
                width: 150px;
                height: 150px;
            }
            .about-container .about-img {
                margin-top: 10px;
            }
        .act-container .act-list {
            flex-direction: row-reverse;
        }
        .act-container h5 {
            width: 62px;
            margin-left: auto;
        }
        h5.news {
            padding-left: 0;
            padding-right: 50px;
            margin-left: auto;
        }
        @endif
    </style>

</head>
<body>

    <!--Top nav bar Code !-->
    @include('layouts.navbar')
    <!-- Slick !-->
    <div class="container-xxl">
        <div class="slick-container">
            <div class="slick-content"><img src="{{asset('images/ex1.jpg')}}"></div>
            <div class="slick-content"><img src="{{asset('images/ex2.jpg')}}"></div>
            <div class="slick-content"><img src="{{asset('images/ex3.jpg')}}"></div>
        </div>
    </div>
    <!-- About us !-->
    <div class="container">
        <div class="about-container" id="about">
            <div class="about-content fade-in" id="aboutContent">
                <h5>{{ __('messages.About') }}</h5>
                <p>{{ __('messages.about_desc') }}</p>
            </div>
            <div class="about-img fade-in" id="aboutImg">
                <img src="{{asset('images/StepLogo.png')}}" width="200px">
            </div>
        </div>
    </div>
    <!-- News !-->
    <div class="container">
            <h5 class="news">{{ __('messages.News')}}</h5>
            <div class="news-conatiner">
                <div class="news-section">
                    @foreach($news as $new)
                        @php $title = json_decode($new->title); @endphp
                        @if(App::getLocale()==='en')
                            <div class="news-content">
                                <a href="">
                                <div class="news-img">
                                    <img src="{{asset($new->image)}}" width="100px" alt="">
                                </div>
                                    <div class="news-title">
                                        <h5>{{$title->title_en}}</h5>
                                    </div>
                                <div class="news-date">
                                    <div class="news-date-img">
                                        <img src="{{asset('icons/clock.png')}}" alt="">
                                    </div>
                                    <div class="news-date-d">
                                        <span>{{$new->created_at}}</span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @else
                            <div class="news-content">
                                <a href="">
                                    <div class="news-img">
                                        <img src="{{asset($new->image)}}" width="100px" alt="">
                                    </div>
                                    <div class="news-title">
                                        <h5>{{$title->title_ar}}</h5>
                                    </div>
                                    <div class="news-date">
                                        <div class="news-date-img">
                                            <img src="{{asset('icons/clock.png')}}" alt="">
                                        </div>
                                        <div class="news-date-d">
                                            <span>{{$new->created_at}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    <!-- Awrach Section !-->
    <div class="container">
        <div class="awrach">
            <img src="{{asset('images/awrach.png')}}" alt="" srcset="">
            <a href="{{url('awrach-inscription')}}"><button>{{ __('messages.Awrach') }}</button></a>
        </div>
    </div>

    <!-- Activities !-->
    <div class="container ">
        <div class="act-container act-fade" id="actContainer">
            <h5>{{ __('messages.Our_Activities') }}</h5>
            <div class="act-list">
                <div class="act-content">
                    <div class="act-img">
                        <a href=""><img width="150px" src="{{asset('images/Education.jpg')}}"></a>
                    </div>
                    <div class="act-border">
                        <p class="act-title">{{ __('messages.act_education') }}</p>
                        <p class="act-text"></p>
                    </div>
                    <div class="act-index">
                        <p class="first-index">1</p>
                        <p class="seconde-index"></p>
                    </div>
                </div>
                <div class="act-content">
                    <div class="act-img">
                        <a href=""><img width="130px" src="{{asset('images/StepLogo.png')}}"></a>
                    </div>
                    <div class="act-border">
                        <p class="act-title">{{ __('messages.act_social') }}</p>
                        <p class="act-text"></p>
                    </div>
                    <div class="act-index">
                        <p class="first-index">2</p>
                        <p class="seconde-index"></p>
                    </div>
                </div>
                <div class="act-content">
                    <div class="act-img">
                        <a href=""><img width="130px" src="{{asset('images/Sport.png')}}"></a>
                    </div>
                    <div class="act-border">
                        <p class="act-title">{{ __('messages.act_sport') }}</p>
                        <p class="act-text"></p>
                    </div>
                    <div class="act-index">
                        <p class="first-index">3</p>
                        <p class="seconde-index"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer !-->
    @include('layouts.footer')
</body>
<script src="{{asset('js/jquery/jquery.js')}}"></script>
<script src="{{asset('js/slick/slick.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script>
    //slider
    $('.slick-container').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay:true,
        autoplaySpeed:1500,
    });

</script>
<script>
    // Function to add ScrollTrigger animations
    function animateWithScrollTrigger() {
        // Define the animations using GSAP and ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);
        if(window.innerWidth<850){
            gsap.fromTo(
                "#aboutContent",
                { x: -10, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutContent",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    }
                }
            );
            gsap.fromTo(
                "#aboutImg",
                { x: 10, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutImg",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    },
                    delay: 0.6, // Stagger the image animation by 0.6 seconds
                }
            );
        }
        else if(window.innerWidth<650){
            gsap.fromTo(
                "#aboutContent",
                { x: 0, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutContent",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    }
                }
            );
            gsap.fromTo(
                "#aboutImg",
                { x: 0, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutImg",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    },
                    delay: 0.6, // Stagger the image animation by 0.6 seconds
                }
            );
        }
        else if(window.innerWidth<450){
            gsap.fromTo(
                "#aboutContent",
                { x: 0, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutContent",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    }
                }
            );
            gsap.fromTo(
                "#aboutImg",
                { x: 0, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutImg",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    },
                    delay: 0.6, // Stagger the image animation by 0.6 seconds
                }
            );
            gsap.fromTo(
                "#act-content",
                { x: 0, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutImg",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    },
                    delay: 0.6, // Stagger the image animation by 0.6 seconds
                }
            );

        }
        else if(window.innerWidth<860){
            gsap.fromTo(
                "#aboutContent",
                { x: -100, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutContent",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    }
                }
            );

            gsap.fromTo(
                "#aboutImg",
                { x: 100, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: "#aboutImg",
                        start: "top 80%", // Animation starts when 80% of the element is in the viewport
                        end: "top 50%", // Animation ends when 50% of the element is in the viewport
                        toggleActions: "play none none reset", // Animation plays on enter and resets on exit
                    },
                    delay: 0.6, // Stagger the image animation by 0.6 seconds
                }
            );

        }


    }

    // Function to add 'active' class to elements with 'fade-in' class when they are in the viewport
    function animateOnScroll() {
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach((element) => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (elementTop < windowHeight - 50) {
                element.classList.add('active');
            }
            else if(elementTop < windowHeight +100){
                element.classList.remove('active');
            }
        });
    }
    // Attach the 'scroll' event listener to call the animation function when scrolling
    window.addEventListener('scroll', function () {
        animateOnScroll();
        console.log(document.getElementById('actContainer').getBoundingClientRect().top)
        console.log(window.innerHeight+300)
        if(document.getElementById('actContainer').getBoundingClientRect().top < window.innerHeight-130){
            document.getElementById('actContainer').classList.add('active')
        }
        else if(document.getElementById('actContainer').getBoundingClientRect().top < window.innerHeight+230){
            document.getElementById('actContainer').classList.remove('active')
        }
    });

    // Initial animation call when the page loads
    animateOnScroll();
    animateWithScrollTrigger(); // Call GSAP ScrollTrigger animations on page load
</script>

</html>
