@extends('../layout')

@section('content')
    <div class="card complementcard" > {{-- style="width: 18rem;" --}}
        <img src="{{$complement->image}}" class="card-img-top" alt="error">
        <div class="card-body">
         <h5 class="card-title">{{$complement->nom}}</h5>
          <p class="card-text">{{$complement->description}}</p>
          <p class="card-text">{{$complement->prix}}</p>
          <a href="#" class="btn ">{{$complement->marque}}</a>
        </div>
      </div>
      <a href="/complements"><p class="back">Back</p></a>    
@include('footer')

@endsection