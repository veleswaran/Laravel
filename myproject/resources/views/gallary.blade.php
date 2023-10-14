<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Image Gallery</title>
</head>
<body>
    <h1>Persons</h1>
    @foreach ($images as $image)
    <div class="mb-4 d-flex justify-content-between content">
        <div class="ms-4">
            <img src="{{ asset('storage/images/' . $image->image) }}" class=" vel" alt="{{ $image->filename }}" width="20%" height="100%">
            <div >
                <h5 >{{ $image->property_name }}</h5>
            </div>
        </div>
        <form action="" method="post" class="ps-3 pe-5 pe-5">
            <label for="" class="form-label">name</label>
            <input type="text" class="form-control">
            <label for="" class="form-label">phone</label>
            <input type="text" class="form-control">
        </form>
    </div>
    @endforeach
    
</body>
</html>
