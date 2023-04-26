
@extends('layout')
@section('content')
<h3 class="produits-title2">Medicaments sans ordonnance</h3>
<div class="produitslist-container">
    @foreach ($medicaments as $medicament)
    <div class="card" style="width: 15rem; cursor: pointer;">
      <a href="/medicaments/{{$medicament->idmedicament}}"><img style="height: 181px" src="{{$medicament->image}}" class="card-img-top" alt="image"></a>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    @endforeach 
</div>
<a href="/"><p class="back">Back</p></a> 

@endsection
