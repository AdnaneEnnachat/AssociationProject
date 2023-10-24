<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .img-logo {
        display: flex;
        justify-content: center;
        margin-top: -40px;
    }
    table,tr,td,th{
        border: 1px solid rgba(0, 0, 0, 0.33);
        text-align: center;
    }
    thead{
        background-color: rgba(0, 0, 0, 0.91);
        color: #FFFFFF;
    }
    tr,td{
        padding: 7px;
    }
    th{
        font-family: monospace;
        font-weight: bold;
    }
    td{
        font-family: sans-serif;
    }


</style>
<body>
<div class="dossier" style="margin-top: 10px">
    <div class="img-logo">
        @if($info->section=='Health')
            <center><img src="{{public_path('images/StepLogo.png')}}" width="250px"></center>
        @else
            <center><img src="{{public_path('images/Education.jpg')}}" width="250px"></center>
        @endif

    </div>
</div>
<div class="" style="margin:50px 20px 50PX 0PX">
    <table class="table" style="width: 100%">
        <thead class="table-dark">
        <tr>
            <th style="text-align: center;font-size: 25px;font-family: monospace; padding: 3px" colspan="2">CONDIDAT INFORMATIONS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>Numero Dossier</th>
            <td>{{$info->numDossier}}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img src="{{public_path('uploads/photos/'.$info->photo)}}" width="130px"></td>
        </tr>
        <tr>
            <th>Fullname</th>
            <td>{{$info->fullName}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$info->email}}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{$info->phone}}</td>
        </tr>
        <tr>
            <th>Education level</th>
            <td>{{$info->educationLevel}}</td>
        </tr>
        <tr>
            <th>Section</th>
            <td>{{$info->section}}</td>
        </tr>
        <tr>
            <th>Commune</th>
            <td>{{$info->commune}}</td>
        </tr>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
