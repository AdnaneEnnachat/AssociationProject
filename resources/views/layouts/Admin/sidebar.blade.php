
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">STEP ACADEMY</span>
    </a>
    <ul class="side-menu top">
        <li class="">
            <a href="{{url('/admin/panel')}}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{url('/admin/condidat/inscription')}}">
                <i class='bx bxl-product-hunt'></i>
                <span class="text">Condidat</span>
            </a>
        </li>
        <li>
            <a href="{{url('/admin/news')}}">
                <i class='bx bx-news'></i>
                <span class="text">News</span>
            </a>
        </li>

    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <form method="post" action="{{Route('logout')}}">
                @csrf
                    <button style="border: none;color: red ;background-color: transparent;" class="text">
                        <a class="logout">
                            <i class='bx bxs-log-out-circle' ></i>
                        Logout</a></button>

            </form>

        </li>
    </ul>
</section>

