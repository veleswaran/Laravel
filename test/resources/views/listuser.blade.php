<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <table action="list" method="post">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($list as $li)
        <tr>
            <td>{{$li['name']}}</td>
            <td>{{$li['email']}}</td>
            <td>{{$li['phone']}}</td>
            <td>
                <button><a href="{{url('delete',$li['id'])}}">delete</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>