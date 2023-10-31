<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create document</title>
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <form action="{{url('save')}}" method="POST">

           @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
                <label>Description</label>
                <input type="text" name="description" class="form-control" required>
                <label>mobile_number</label>
                <input type="number" name="mobile" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary form-control">vel</button>
        </form>
    </div>
</body>
</html>