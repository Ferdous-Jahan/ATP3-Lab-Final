<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Name : {{$medicine->name}}</p>
    <p>Vendor : {{$medicine->vendor}}</p>
    <p>Price : {{$medicine->price}}</p>
    <p>Quantity : {{$medicine->quantity}}</p>
    <a type="button" href="{{route('edit', $medicine->id)}}" class="btn btn-outline-primary">Edit</a>
    <a type="button" href="{{route('delete', $medicine->id)}}" class="btn btn-outline-danger">Delete</a>
</body>
</html>