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
    <h2 class="center-text normal basbas"> Ajouter un Produit </h2>
</header>

<body>
<form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-input">
    <div class="mb-3">
        <label for="produit-titre" class="form-label ">Titre</label>
        <input type="text" name="titre" class="form-control  table-nonfluid"  >

    </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control  table-nonfluid " >
        </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" name="description" class="form-control  table-nonfluid ">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


</body>
</html>
