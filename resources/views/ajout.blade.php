<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/saveAjout">
        @csrf
        <pre>
            <label>Code Module</label>
            <input type="number" name="codem" id="codem">
            
            <label>Titre Module</label>
            <input type="text" name="titrem" id="codem">
            
            <label>Masse Horaire</label>
            <input type="number" name="masseh" id="masseh">

            <button>Ajouter</button>
        </pre>
        <!-- <a href="/">retourner</a> -->
    </form>
</body>
</html>