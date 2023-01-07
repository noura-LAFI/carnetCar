<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1 style= "color:red "> Carnet d'address  </h1>
    <table border=1 width=70% >
<tr>
    <th>id </th>
    <th>Nom  </th>
    <th> prenom</th>
    <th>Tel</th>
    <th>Email</th>
    <th>addrese</th>
</tr>
@foreach ($data as $p)
<tr>

    <td> {{$p->id}} </td>
    <td>{{$p->nom}}</td>
    <td>{{$p->prenom}}</td>
    <td>{{$p->tel}}</td>
    <td>{{$p->email}}</td>
    <td>{{$p->addresse}}</td>
    
</tr>
@endforeach
<tr>
    <td> <a type="" href='AjouterPer' value="">Ajouter personne</a> </td>
    <td> <a type="" href='MoPer' value="">Modifier personne</a> </td>
    </tr>
    <tr>
    <td> <a type="" href='recherche1' value="">Rechercher personne</a> </td>
    <td> <a  href='supPer'  value="">Supprimer</a></td>
<!-- <td> <button type="" onclick="window.location.href = 'AjouterPer';"  value="">ajouter</button> </td> -->
</tr>
</table></center>

</body>

</html>