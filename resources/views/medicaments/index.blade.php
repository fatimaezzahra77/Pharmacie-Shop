@extends('../layout')

@section('content')

<div class="container"  id="hygienesante">
  <div class="row">
    <div class="col-md-2">
      <!-- Categories go here -->
    </div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-12">
          <br>
          {{-- <div class="container">
            @if(session('success'))
              <div class="alert alert-success">
                {{session('success')}}
              </div>
              @endif
          </div> --}}
          <h2 id="header">Medicaments</h2>
          <div class="produitslist-container">
            @foreach ($medicaments as $medicament)
            <div class="card" style="width: 15rem; cursor: pointer;">
              <a href="/recommandations/{{$medicament->idmedicament}}"><img style="height: 181px" src="{{$medicament->image}}" class="card-img-top" alt="image"></a>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            @endforeach 
        </div>
          <br><br>
          <div>
            {{ $medicaments->links('pagination::bootstrap-4') }}
          </div>
        </div>
      </div>
        <br><br>
      <div class="row">
        <div class="col-md-12">
          <h3 class="marques-header2">Notre marques</h3>
          <div class="marques-container2">
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/CeraVe_Logo.jpg" alt=""></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/LogoLaRochePosay.jpg" alt=""></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/logo-biafine.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item-marque2">
                <a href=""><img class="marque-img2" src="marques/Unicity-Logo.jpg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><br><br>
<br>



@include('footer')

@endsection
