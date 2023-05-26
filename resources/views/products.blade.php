<div class="container">
  <div class="row">
<div class="col-md-12" >
<div class="produits-header">
  <h3 class="produits-title">Nos medicaments sans ordonnance</h3>
  @if (count($medicaments) >= 10)
  <a href="{{ route('medicaments.showAll')}}" class="produits-seemore">Afficher plus</a>
  @endif
</div>

<div class="produitslist-container">
    @foreach ($medicaments as $medicament)
    <div class="card maincard" style="width: 15rem; cursor: pointer;">
      <a href="/medicaments/{{$medicament->idmedicament}}"><img style="height: 181px" src="{{$medicament->image}}" class="card-img-top" alt="image"></a>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    @endforeach 
</div>
</div>
</div>
</div>


