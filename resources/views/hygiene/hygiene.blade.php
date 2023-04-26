@extends('../layout')
@section('content')

<h1 id="header">{{$heading}}</h1>
@foreach ($produits as $produit)
<div class="card" > {{-- style="width: 18rem;" --}}
    <a href="/produits/{{$produit->id}}"><img src="{{$produit->image}}" class="card-img-top" alt="..."></a>
    <div class="card-body">
    <h5 class="card-title">{{$produit->nom}}</h5>
      <p class="card-text">{{$produit->description}}</p>
      <p class="card-text">{{$produit->prix}}</p>
      <a href="#" class="btn ">{{$produit->marque}}</a>
    </div>
  </div>
@endforeach
{{-- <img src="{{ asset('images/m1.jpg') }}" alt="Image 1" style="width:100%"> --}}

@endsection