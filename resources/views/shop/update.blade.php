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
    <h2 class="center-text normal basbas"> Update {{$produit -> titre}} </h2>
</header>

<body>
<form action="{{ route('produits.update', $produit) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container-input">
    <div class="mb-3">
        <label for="produit-titre" class="form-label ">Titre</label>
        <input type="text" name="titre" class="form-control  table-nonfluid" value="{{$produit -> titre}}" >

    </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control  table-nonfluid " value="{{$produit -> prix}}" >
        </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" name="description" class="form-control  table-nonfluid " value="{{$produit -> description}}">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


</body>
</html>
