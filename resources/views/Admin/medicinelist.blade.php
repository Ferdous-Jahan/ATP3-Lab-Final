<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($medicines as $medicine)
        <h3><a href="{{route('show', $medicine->id)}}">{{$medicine->name}}</h3>
    @endforeach
</body>
</html>