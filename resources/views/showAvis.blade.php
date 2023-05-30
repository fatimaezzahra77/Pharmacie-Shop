@extends('/layout')
@section('content')

<div class="avisSection">
    <h3>Avis sur ce produit</h3>
    <hr>
    <div class="box-area">	
        <div class="img-area">
            <img class="hidden w-48 mr-6 md:block" style="height:100px" src="{{$avi->image ? asset('storage/' . $avi->image ) : asset('images/no-image.png')}}" alt=""/>
        </div>
        <h5>{{$avi->name}}</h5>
        <p class="client's opinion">
            @for ($i = 0; $i < $avi->rate; $i++)
                <i class="fas fa-star"></i>
            @endfor 
            , {{$avi->avis}}
        </p>
        <button>Supprimer</button>
    </div>
</div>
@endsection