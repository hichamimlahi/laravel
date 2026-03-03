<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/ajout">Ajouter un nouveau module</a>
    <h1>Les modules</h1>
    <table>
        <tr>
            <th>codem</th>
            <th>Titre</th>
            <th>Masse Horaire</th>
            <th></th>
        </tr>
        @foreach($modules as $module)
        <tr>
            <td>{{$module -> codem}}</td>
            <td>{{$module -> titre}}</td>
            <td>{{$module -> masseh}}</td>
            <td>
                <a href="/modif/{{$module -> codem}}">Modifier</a>
                <a href="/supp/{{$module -> codem}}">Supprimer</a>
            </td>
        </tr>
        @endforeach

        <form action="/Rechercher" method="get">
            <input type="codem" name="codem" placeholder="Search">
            <button type="submit">Search</button>
        </form>
        <div>
            <a href="/AfficherTs"><button type='button'>Afficher Tous</button>
        </div>
    </table>
</body>
</html>