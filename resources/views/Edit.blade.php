<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text text-center mt-5">EditPost</h1>
    <form class="ps-5" action="{{ route('Edit2',$Manage2->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <h4>Userfristname</h4>
            <input type="text" class="form-control" name="userfristname" value="{{ $Manage2->userfristname }}">
        </div>

        <div class="mb-3">
            <h4>userlastname</h4>
            <input type="text" class="form-control" name="userlastname" value="{{ $Manage2->userlastname }}">
        </div>

        <div class="mb-3">
            <h4>useremail</h4>
            <input type="email" class="form-control"name="useremail" value="{{ $Manage2->useremail }}" >
        </div>

        <div class="mb-3">
            <h4>Post</h4>
            <input type="text" class="form-control" name="post" value="{{ $Manage2->post }}">
        </div>

        <button class="btn btn-primary mt-4">Edit</button>
        <a href="{{route('Manager')}}" class="btn btn-primary mt-4">Black</a>
    </form>
</body>

</html>
