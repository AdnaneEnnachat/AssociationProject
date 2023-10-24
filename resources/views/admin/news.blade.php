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
        /* Basic styling for the form container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for form headings */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Style for form labels */
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        /* Style for form input fields */
        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Style for the submit button */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Style for error messages */
        .alert-danger {
            background-color: #f44336;
            color: #fff;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        /* Style for success messages */
        .alert-success {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

    </style>
</head>
<body>

@include('layouts.Admin.sidebar')
<section id="content">
    @include('layouts.Admin.navbar')
    <main>
        <div class="container">
            <h1>Submit News</h1>
            <form id="newsForm" action="{{url('admin/news/post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="headline">Tilte ENGLISH</label>
                    <input type="text" class="form-control" id="headline" name="title_en">
                </div>
                <div class="form-group">
                    <label for="headline">Tilte ARABE</label>
                    <input type="text" class="form-control" id="headline" name="title_ar">
                </div>
                <div class="form-group">
                    <label for="articleText">Content ENGLISH</label>
                    <textarea class="form-control" id="articleText" name="content_en" rows="6" ></textarea>
                </div>
                <div class="form-group">
                    <label for="articleText">Content ARABE</label>
                    <textarea class="form-control" id="articleText" name="content_ar" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
</section>


</body>
<script src="{{url('js/jquery/jquery.js')}}"></script>

<script src="{{url('js/Admin/js/script.js')}}"></script>




</html>
