<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/Admin/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('images/StepLogo.png')}}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Condidat inscription</title>
    <style>

    </style>
</head>
<style>
    #sidebar .side-menu li {
        margin-left: -26px;
    }
    a{
        text-decoration: none;
    }
    select,select:focus,select:active,select:focus-visible{
        background: transparent;
        border: none;
        outline: none;
        text-align: center;
    }
    option{
        padding: 10px;
        border: none;
    }
    table{
        text-align: center;
    }
    .modal-content{
        max-width: 700px;
        width: 700px;
    }
    .paginate{
        background-color: transparent;
    }
    .paginate nav{
        background-color: transparent;
    }
    .paginate nav:before{
        content: "";
        background-color: transparent;
        box-shadow: none;
    }
</style>
<body>

@include('layouts.Admin.sidebar')
<section id="content">
    @include('layouts.Admin.navbar')
    <main>
        <table class="table table-tripted">
            <thead class="table-dark">
            <tr>
                <td>#</td>
                <td>fullname</td>
                <td>Email</td>
                <td>Phone</td>
                <td>photo</td>
                <td>Show Details</td>
                <td>delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($condidats as $cd)
                <tr>
                    <td>{{$cd->id}}</td>
                    <td>{{$cd->fullName}}</td>
                    <td>{{$cd->email}}</td>
                    <td>{{$cd->phone}}</td>
                    <td><img src="{{ asset('uploads/photos/'.$cd->photo) }}" width="40px" alt=""></td>
                    <td>
                        <!-- Button to trigger the modal -->
                        <button type="button" class="btn btn-primary show-details-btn" data-target="#candidateDetailsModal{{$cd->id}}">
                            Show Details
                        </button>
                    </td>
                    <td>
                        <form method="post" action="{{ url('admin/delete-condidat/'.$cd->id) }}" id="deleteForm{{ $cd->id }}">
                            @csrf
                            @method('delete')
                            <button type="button" style="border: none; background-color: transparent;" onclick="confirmDelete({{ $cd->id }})">
                                <i style="color: red; font-size: 20px" class="bx bx-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="paginate d-flex justify-content-center" style="margin-top: 30px">
            {!! $condidats->links() !!}
        </div>
    </main>
</section>

<!-- Modal for displaying detailed information in a table -->
@foreach($condidats as $cd)
    <div class="modal fade" id="candidateDetailsModal{{$cd->id}}" tabindex="-1" role="dialog" aria-labelledby="candidateDetailsModalLabel{{$cd->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="candidateDetailsModalLabel{{$cd->id}}">{{$cd->fullName}} - Details</h5>
                    <button type="button" class="close-modal-btn" style="border: none;background-color: transparent;font-size: 20px;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td><strong>Numero Dossier:</strong></td>
                            <td>{{$cd->numDossier}}</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>{{$cd->email}}</td>
                        </tr>
                        <tr>
                            <td><strong>Phone:</strong></td>
                            <td>{{$cd->phone}}</td>
                        </tr>
                        <tr>
                            <td><strong>Education Level</strong></td>
                            <td>{{$cd->educationLevel}}</td>
                        </tr>
                        <tr>
                            <td><strong>Commune</strong></td>
                            <td>{{$cd->commune}}</td>
                        </tr>
                        <tr>
                            <td><strong>Section</strong></td>
                            <td>{{$cd->section}}</td>
                        </tr>
                        <tr>
                            <td><strong>image:</strong></td>
                            <td><img src="{{asset('uploads/photos/'.$cd->photo)}}" alt="" width="100px" srcset=""></td>
                        </tr>
                        <tr>
                            <td><strong>diplome:</strong></td>
                            <td><a target="_blank" href="{{asset('uploads/diplomes/'.$cd->diplome)}}">Diplome</a></td>
                        </tr>
                        <tr>
                            <td><strong>cv:</strong></td>
                            <td><a target="_blank" href="{{asset('uploads/cv/'.$cd->cv)}}">cv</a></td>
                        </tr>
                        <tr>
                            <td><i class='bx bxs-download' >Registration form</i></td>
                            <td><form action="{{url('download-pdf').'/'.$cd->numDossier}}" method="POST"> @csrf <button style="border: none;padding: 10px;border-radius: 10px; " type="submit"><i class='bx bxs-download' ></i></button> </form></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary close-modal-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{url('js/jquery/jquery.js')}}"></script>
<script src="{{url('js/Admin/js/script.js')}}"></script>
<script>

    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this record!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + id).submit();
            }
        });
    }
    @if(Session::get('message')==='deleted')
    Swal.fire(
        'Good job!',
        'Condidat Deleted ',
        'success'
    )
    @endif
    $(document).ready(function() {
        $('.show-details-btn').on('click', function() {
            const targetModalId = $(this).data('target');
            $(targetModalId).modal('show');
        });

        // Use a separate class or attribute to identify the close button
        $('.close-modal-btn').on('click', function() {
            const targetModalId = $(this).closest('.modal').attr('id');
            $('#' + targetModalId).modal('hide');
        });
    });
</script>
</html>
