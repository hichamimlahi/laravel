<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/saveModif">
        @csrf
        <pre>
            <label>Code Module</label>
            <input type="text" name='codem' value="{{$mod[0]->codem}}">
            
            <label>titre Module</label>
            <input type="text" name='titre' value="{{$mod[0]->titre}}">
            
            <label>Masse Horaire</label>
            <input type="text" name='masseh' value="{{$mod[0]->masseh}}">

            <button>Modifier</button>
        </pre>
    </form>
</body>
</html>