@extends('layout')
@section('title', 'Home')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Manage</title>
    </head>

    <body>
        
        <h2 class="text text-center mt-5">Manage</h2>
        <div><a href="{{route('Createpost')}}" class="btn   btn-success ">CREATEPOST</a></div>

            <div class="text text-center mt-5"> 
                
                <table class="table table-light">
                    <thead class="table-danger">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">userfirst</th>
                        <th scope="col">userlast</th>
                        <th scope="col">useremail</th>
                        <th scope="col">POST</th>
                        <th scope="col">EDIT</th>
                        <th scope="col">DELETE</th>
                      </tr>
                    </thead>
                    @foreach ($Manage as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->userfristname }}</td>
                        <td>{{ $item->userlastname }}</td>
                        <td>{{ $item->useremail}}</td>
                        <td>{{ $item->post }}</td>

                        <td>
                            <a href="{{route('Edit',$item->id)}}" class="btn   btn-warning ">Edit</a>
                        </td>


                        <td>
                            <a href="{{route('Delete',$item->id)}}" class="btn   btn-danger  ">Delete</a>
                        </td>


                    </tr>
                    @endforeach
                  </table>

            </div>
            


    </body>

    </html>
@endsection
