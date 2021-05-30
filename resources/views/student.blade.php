<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Student Management System</title>
</head>

<body>
@include("navbar")

{{--<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management system</h1>
    </div>
</div>--}}

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>


@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>

@elseif($layout == 'create')
    <div class="container-fluid mt-4" id="create-form">
        <div class="row">
        <section class="col-md-7">
            @include("studentslist")
        </section>
        <section class="col-md-5">

            <div class="card mb-3">
                <img src="/images/crt.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Enter the information of the new student</h5>

                    <form action="{{ url('/store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="" class="">CNE</label>
                            <input type="text" name="cne" class="form-control" placeholder="Enter cne">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Frist Name</label>
                            <input type="text" name="firstName" class="form-control" placeholder="Enter your first name">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Second Name</label>
                            <input type="text" name="secondName" class="form-control" placeholder="Enter your second name">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Age</label>
                            <input type="text" name="age" class="form-control" placeholder="Enter your age">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Speciality</label>
                            <input type="text" name="speciality" class="form-control" placeholder="Enter your speciality">
                        </div>

                        <input type="submit" class="btn btn-info" value="save">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>

                </div>
            </div>

        </section>
        </div>
    </div>

@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col">
            @include("studentslist")
        </section>
        <section class="col"></section>
        </div>
    </div>

@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col-md-7">
            @include("studentslist")
        </section>
        <section class="col-md-5">

            <div class="card mb-3">
                <img src="/images/crt.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Update information of student</h5>
                    <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="" class="">CNE</label>
                            <input type="text" value="{{ $student->cne }}" name="cne" class="form-control" placeholder="Enter cne">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Frist Name</label>
                            <input type="text" value="{{ $student->firstName }}" name="firstName" class="form-control" placeholder="Enter your first name">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Second Name</label>
                            <input type="text" value="{{ $student->secondName }}" name="secondName" class="form-control" placeholder="Enter your second name">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Age</label>
                            <input type="text" value="{{ $student->age }}" name="age" class="form-control" placeholder="Enter your age">
                        </div>

                        <div class="form-group">
                            <label for="" class="">Speciality</label>
                            <input type="text" value="{{ $student->speciality }}" name="speciality" class="form-control" placeholder="Enter your speciality">
                        </div>

                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                </div>
            </div>

        </section>
        </div>
    </div>

@endif

<footer></footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>
