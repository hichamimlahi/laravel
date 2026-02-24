<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form2" method="post">
        @csrf
        <label>Prenom & Nom</label><br>
        <input type="text" name="name"><br>
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="pw"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>