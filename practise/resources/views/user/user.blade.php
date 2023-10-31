<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create document</title>
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mt-2">
        <form action="{{url('signup')}}" method="POST">

           @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
                <label>FullName</label>
                <input type="text" name="fullname" class="form-control" required>
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
                <label>Phone_number</label>
                <input type="number" name="phone" class="form-control" required>
                <label>is_active</label>
                <input type="number" name="is_active" class="form-control" maxlength=1 max=1 required>
            </div>
            <button type="submit" class="btn btn-primary form-control">signup</button>
            <a href="{{url('list')}}" class="btn btn-primary form-control mt-2">show list</a>
        </form>
       
            
    </div>
</body>
</html>