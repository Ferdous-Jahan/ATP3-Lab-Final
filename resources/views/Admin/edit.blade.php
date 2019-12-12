<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label>Name</label>
        <textarea type="text" class="form-control" rows="1" name="name" style="resize : none;">{{$medicine->name}}</textarea>
        <br><label>Vendor: </label>
        <textarea type="text" class="form-control" rows="1" name="vendor" style="resize : none;">{{$medicine->vendor}}</textarea>
        <br><label>Price: </label>
        <textarea type="number" class="form-control" rows="1" name="price" style="resize : none;">{{$medicine->price}}</textarea>
        <br><label>Quantity: </label>
        <textarea type="number" class="form-control" rows="1" name="quantity" style="resize : none;">{{$medicine->quantity}}</textarea>
        <input type="submit" name="submit" class="btn btn-outline-success" value="Update">
    </form>
</body>
</html>