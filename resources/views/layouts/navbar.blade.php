
@if(App::getLocale()==='ar')
    <style>
        .main-nav{
            flex-direction: row-reverse;
        }
        .main-nav .list-links{
            flex-direction: row-reverse;
        }
        @media (max-width: 770px){
            .main-nav-links{
                right: -300px;
                left: auto;
            }
        }
        .active-list{
            right: 0;
            transition: all .5s ease-in;
            }
</style>
@endif

<!--Top nav bar Code !-->
<div class="container-top-nav">
    <div class="container top-nav">
        <div class="first-of-topNav">
            <div><a href="{{url('changelang/en')}}">ENGLISH</a></div>
            <div class="hr"></div>
            <div><a href="{{url('changelang/ar')}}">ARABIC</a></div>
        </div>
        <div class="seconde-of-topNav">
            <div><a target="_blank" href="https://www.facebook.com/ALnakhil16?mibextid=ZbWKwL"><img  src="{{asset('icons/facebook.png')}}" width="20px"></a></div>
            <div class="hr"></div>
            <div><a target="_blank" href="https://instagram.com/step_academy111?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><img src="{{asset('icons/instagram.png')}}" width="20px"></a></div>
        </div>
    </div>
</div>

<div class="container-main-nav">
    <div class="container main-nav">
        <div class="logo">
            <img width="80px" src="{{asset('images/StepLogo.png')}}">
        </div>
        <div class="main-nav-links" id="list">
            <div>
                <ul class="list-links">
                    <li><a href="{{url('home')}}">{{ __('messages.Home') }}</a></li>
                    <li><a href="#about">{{ __('messages.About') }}</a></li>
                    <li><a href="">{{ __('messages.Activities') }}</a></li>
                    <li><a href="">{{ __('messages.Contact') }}</a></li>
                </ul>
            </div>
            <div>
                <div class="inscription">
                    <a href="{{url('awrach-inscription')}}"><button>{{ __('messages.Awrach') }}</button></a>
                </div>
            </div>

        </div>
        <div class="menu">
            <img src="{{asset('icons/menu.png')}}" id="menu" width="30px" alt="">
        </div>
    </div>
</div>
</body>
<script src="{{asset('js/jquery/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    //Nav bar responsive
    let menu = document.getElementById('menu')
    let list = document.getElementById('list')
    menu.addEventListener('click',function (){
        list.classList.toggle('active-list')
    })
    menu.classList.add('.active-list')
</script>
</html>
