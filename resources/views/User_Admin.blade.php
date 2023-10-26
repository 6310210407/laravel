<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-danger-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('User_admin') }}">Using Laravel </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('User_admin') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Manager') }}">Manage</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('User') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-3">

        <h2 class="text text-center mt-5">User</h2>

        <div class="text text-center mt-5">


            <table class="table table-light">
                <thead class="table-danger">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">userfirst</th>
                        <th scope="col">userlast</th>
                        <th scope="col">useremail</th>
                        <th scope="col">POST</th>
                    </tr>
                </thead>
                @foreach ($Manage as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->userfristname }}</td>
                        <td>{{ $item->userlastname }}</td>
                        <td>{{ $item->useremail }}</td>
                        <td>{{ $item->post }}</td>

                    </tr>
                @endforeach
            </table>


        </div>


    </div>
</body>

</html>
