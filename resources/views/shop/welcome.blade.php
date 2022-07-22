<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

</head>
<header>
    @include('shop.navbar')
    <h2 class="center-text normal basbas"> Bienvenue dans la boutique. </h2>

</header>

<body>
<table class="table table-bordered  table-nonfluid margin-top center">
    <tr>
        <th>Titre</th>
        <th>Prix</th>
        <th>Description</th>
        <th width="280px">Action</th>

    </tr>
    @foreach ($index as $produit)
        <tr>

            <td>{{ $produit->titre }}</td>
            <td>{{ $produit->prix }}</td>
            <td>{{ $produit->description }}</td>
            <td>
                <form action="{{ route('produits.destroy',$produit->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route("produits.edit",$produit->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
