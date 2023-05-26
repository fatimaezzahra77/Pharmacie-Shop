@extends('../layout')
@section('content')

    <div class="card beautecard" > {{-- style="width: 18rem;" --}}
        <img src="{{$beaute->image}}" class="card-img-top" alt="error">
        <div class="card-body">
         <h5 class="card-title">{{$beaute->nom}}</h5>
          <p class="card-text">{{$beaute->description}}</p>
          <p class="card-text">{{$beaute->prix}}</p>
          <a href="#" class="btn ">{{$beaute->marque}}</a>
        </div>
      </div>
      <a href="/beautes"><p class="back">Back</p></a>    

@include('footer')

@endsection