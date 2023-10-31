<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List the customer</title>
</head>
<body>
    <form action="submit" method="post">
        @csrf
        <label for="">Name:</label><br>
        <input type="text" name="name"><br>
        <label for="">phone:</label><br>
        <input type="tel" name="phone"><br>
        <label for="">email:</label><br>
        <input type="email" name="email"><br>
    <input type="submit">
  
    </form>
    <button ><a href="list"> list</a></button>
</body>
</html>