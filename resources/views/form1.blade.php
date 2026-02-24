<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <form action="/form2" method="post">
        @csrf
        <br><label>Name</label><br>
        <input type="text" class="form-control" name="name">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <br><label>email</label><br>
        <input type="text" class="form-control" name="email">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <br><label>Telephone</label><br>
        <input type="text" class="form-control" name="tele">
        @error('tele')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <br><label>Password</label><br>
        <input type="text" class="form-control" name="pw">
        @error('pw')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <br><label>Confirm Password</label><br>
        <input type="text" class="form-control" name="pw2">
        @error('pw2')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <br><input type="submit">
    </form>
</body>
</html>