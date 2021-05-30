<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div class="col">

    <div class="card mb-3">
        <img src="/images/sms.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">List of students</h5>
            <p class="card-text">You can find all the informations about students in the system.</p>

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Second Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
                </thead>
                <tbody>

                @foreach($students as $student)

                    <tr>

                        <td>{{ $student->cne }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->secondName }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">Show</a>
                            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>


</div>

</body>
</html>
