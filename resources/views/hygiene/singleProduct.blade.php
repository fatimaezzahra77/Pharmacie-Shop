@extends('../layout')

@section('content')
      {{-- style="width: 18rem;" --}}
      {{-- <div class="card hygeienecard" > 
        <img src="{{$produit->image}}" class="card-img-top" alt="error">
        <div class="card-body">
         <h5 class="card-title">{{$produit->nom}}</h5>
          <p class="card-text">{{$produit->description}}</p>
          <p class="card-text">{{$produit->prix}}</p>
          <a href="#" class="btn ">{{$produit->marque}}</a>
        </div>
      </div>
      <a href="/hygiene"><p class="back">Back</p></a>  --}}
      {{-- <div class="container"> --}}
        {{-- <div class="hygieneContainer">
          <div class="row content-row ">
            <div id="hygiene-sidebar" class="col-md-2 ">
              sidbar
            </div>
          <div class="col large-10">
            <div class="row">
              <div class="large-6 col">
                <img src="{{$produit->image}}" alt="error-image" style="height: 400px; width: 400px">
              </div>
              <div class="product-info summary entry-summary col col-fit product-summary text-left form-minimal">
                <div>
                  <h1>sgsbhio</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit earum ad illum aspernatur sint eveniet, in esse dolore? Numquam repudiandae dolor labore ducimus 
                    saepe deserunt quisquam cumque aliquid fugit molestiae!</p>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid sed vitae omnis earum, libero 
                      architecto nesciunt quae aperiam. Maiores facere fuga dolor ut recusandae, optio atque nam r
                      epellendus eligendi deleniti?
                    </p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab obcaecati dolores sed esse beatae modi odit aspernatur voluptas et, quas officiis! Adipisci ut quibusdam quia autem quis minima architecto omnis.</p>
              </div>
          </div>
        </div>
        </div>
        </div> --}}

      <div class="row hygieneContainer" >
        <div class="col-md-3 categoriesHygiene" >Categories menues go here</div>
        <div class="col-md-4">
          <img src="{{$produit->image}}" alt="error-image" style="height: 400px; width: 400px">
        </div>
        <div class="col-md-5">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab obcaecati dolores sed esse beatae
             modi odit aspernatur voluptas et, quas officiis! Adipisci ut quibusdam quia autem quis minima 
             architecto omnis.</p>
             <div>
              <h1>sgsbhio</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit earum ad illum aspernatur sint eveniet, in esse dolore? Numquam repudiandae dolor labore ducimus 
                saepe deserunt quisquam cumque aliquid fugit molestiae!</p>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid sed vitae omnis earum, libero 
                  architecto nesciunt quae aperiam. Maiores facere fuga dolor ut recusandae, optio atque nam r
                  epellendus eligendi deleniti?
                </p>
            </div>
        </div>
      </div>
   
<br>
<br>
@include('footer')

@endsection