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
        <label>Medicine Name : </label>
        <input type="text" class="form-control" id="name" name='name' required>
        <br>
        <label>Vendor Name : </label>
        <input type="text" class="form-control" id="vendor" name='vendor' required>
        <br>
        <label>Price : </label>
        <input type="number" class="form-control" id="price" name='price' required>
        <br>
        <label>Quantity : </label>
        <input type="number" class="form-control" id="quantity" name='quantity' required>
        <br>
        <input type="submit" name="submit" class="btn btn-outline-success" value="Submit">
    </form>
</body>
</html>