@extends('../layout')

@section('content')
    <div class="card medicamentcard" > {{-- style="width: 18rem;" --}}
        <img src="{{$medicamentsproduit->image}}" class="card-img-top" alt="error">
        <div class="card-body">
         <h5 class="card-title">{{$medicamentsproduit->nom}}</h5>
          <p class="card-text">{{$medicamentsproduit->description}}</p>
          <p class="card-text">{{$medicamentsproduit->prix}}</p>
          <a href="#" class="btn ">{{$medicamentsproduit->marque}}</a>
        </div>
      </div>
      <a href="/pagemedicaments"><p class="back">Back</p></a>    
@include('footer')

@endsection

