<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/Admin/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="{{asset('images/StepLogo.png')}}" type="image/x-icon">
    <title>Admin Dashboard</title>
    <style>

    </style>
</head>
<body>

    @include('layouts.Admin.sidebar')
    <section id="content">
        @include('layouts.Admin.navbar')
        <main>

            <ul class="box-info">
                <li>
                    <i class='bx bx-user' ></i>
                    <span class="text">
						<h3>{{$visitors}}</h3>
						<p>Visitors</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
						<h3>{{$condidat}}</h3>
						<p>Total Condidat</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
						<h3>{{$condidatPerDay}}</h3>
						<p>Condidat per day</p>
					</span>
                </li>
            </ul>
        </main>
    </section>


</body>
<script src="{{url('js/jquery/jquery.js')}}"></script>

<script src="{{url('js/Admin/js/script.js')}}"></script>




</html>
