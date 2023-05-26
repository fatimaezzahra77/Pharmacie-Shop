@extends('../layout')
@section('content')

<div class="card medicamentcard" style="width: 15rem; cursor: pointer;">
<img style="height: 181px" src="{{$medicament->image}}" class="card-img-top" alt="image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
<a href="/"><p class="back">Back</p></a> 
@endsection
