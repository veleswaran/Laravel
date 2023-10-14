<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Property Upload</title>
</head>
<body>
    <form class="form" action="{{ url('images') }}" method="post" enctype="multipart/form-data">
        @csrf <!-- Add the CSRF token -->

        <label class="form-label" for="property">Name</label>
        <input type="text" class="form-control" name="property" id="property">
        
        <label class="form-label" for="image">Image</label>
        <input type="file" class="form-control" name="image" id="image">
        
        <input type="submit" class="form-control">
    </form>
</body>
</html>
