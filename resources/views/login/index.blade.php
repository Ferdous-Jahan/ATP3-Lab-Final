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
        <label>User Name : </label>
        <input type="text" class="form-control" id="username" name='username' required>
        <br>
        <label>Password : </label>
        <input type="text" class="form-control" id="password" name='password' required>
        <br>
        <input type="submit" name="submit" class="btn btn-outline-success" value="Submit">
        <br>
        <a href="/registration" class="btn btn-default">Sign Up</a>
    </form>
</body>
</html>