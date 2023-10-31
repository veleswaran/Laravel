<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="row mt-5">
    <div class="col-md-12 ">
        @if(Session::has('message'))
        <div class="alert alert-{{Session::get('class')}} alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
        <table class="table table-bordered">
            @csrf
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
            <?php //echo '<pre>';print_r($details); exit?>
            @foreach($customer as $cust)
                <tr>
                    <td>{{$cust->username}}</td>
                    <td>{{$cust->fullname}}</td>
                    <td>{{$cust->email}}</td>
                    <td>{{$cust->password}}</td>
                    <td>{{$cust->phone}}</td>
                    <td>
                        <a href="{{url('Users',$cust->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('delete',$cust->id)}}" class="btn btn-warning">Delete</a>
                </tr>
            @endforeach
            </tbody>  
        </table>     
    </div>
</div>
</body>
</html>