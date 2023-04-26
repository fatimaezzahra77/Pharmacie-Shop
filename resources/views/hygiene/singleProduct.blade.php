<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Pharmacie Shop</title>
</head>
<body>
    <div class="card" > {{-- style="width: 18rem;" --}}
        <img src="{{$produit->image}}" class="card-img-top" alt="error">
        <div class="card-body">
         <h5 class="card-title">{{$produit->nom}}</h5>
          <p class="card-text">{{$produit->description}}</p>
          <p class="card-text">{{$produit->prix}}</p>
          <a href="#" class="btn ">{{$produit->marque}}</a>
        </div>
      </div>
      <a href="/hygiene"><p class="back">Back</p></a>    
</body>
</html>