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
        <div class="col-md-3 sidebarhygiene" >&nbsp;&nbsp; Categories sidebar go here </div> 
        {{-- <div class="col-md-1 vertical-line"></div> --}}
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-5">
                  <img src="{{$produit->image}}" alt="imageLodingError" style="height: 400px; width: 400px">
                </div>
                <div class="col-md-6">
                  <h1 class="singleProductTitle">CeraVe Crème Hydratante Visage Peaux Normales à Sèches – 52ml</h1> {{--{{$produit->nom}}--}}
                  <hr style="color: #73b504; border:2px solid; border-radius:3px">
                  <p class="singleProductTags">Hydratant | Visage | Crème</p>
                  <p class="singleProductPrix">119 DH</p>{{--{{$produit->prix}}---}}
                  <p class="singleProductLittleDesc">Crème hydratante pour adultes. Application sur visage. Indiqué pour les peaux normales à sèches.

                    Achetez CeraVe Crème Hydratante Visage Peaux Normales à Sèches – 52ml sur PahrmacyShop.ma, votre pharmacie en ligne 100% digitale qui vous livre tous vos produits au Casablanca et aux meilleurs prix.
                  </p>
                  <button class="singleProductButton">Ajouter au panier</button> <br><br>
                  <p class="singleProductCategories">Categories: Hydratants visage, Skincare visage, Visage</p>
                </div>
              </div>
            </div>     
        </div><br><br>
        <div class="row">
          <div class="productDescription">
            <h3 class="productdescriptionTitle">Description</h3><br>
            <h5 class="productquestion">C'est quoi CeraVe Crème Hydratante Visage Peaux Normales à Sèches - 52ml ?</h5>
            <hr><br>
            <p class="productdetails">Pour les peaux normales à sèches

              Hydrate la peau en continu et aide à préserver la barrière protectrice du visage et du cou.
              Développée avec des dermatologues, la crème hydratante visage CeraVe hydrate au quotidien et aide à préserver la barrière protectrice du visage et du cou. Sa texture ultra légère, non grasse, enrichie aux 3 céramides essentiels et à l’acide hyaluronique procure une hydratation tout au long de la journée, et dès la première utilisation.
              
              Trois céramides essentiels pour aider à maintenir la peau hydratée et à restaurer la barrière cutanée.
              La Technologie MVE permet d’encapsuler les actifs et de les diffuser dans la peau en continu. Cela permet de restaurer la barrière cutanée et de l’hydrater tout au long de la journée après seulement une application.
              Caractéristiques et bénéfices produit:
              
              Non comédogène
              Doux Pour la Peau Convient aux peaux sensibles
              Sans Parfum.
            </p>
          </div>
          <div class="conseilsDapplication">
            <h3 class="conseilsDapplicationTitle">Conseils d'application</h3>
            <hr><br>
                <ul class="conseilsDapplicationDesc" >
                  <li>Appliquer aussi souvent que nécessaire.</li>
                  <li>Eviter le coutour des yeux.</li>
                <li>En cas de contact avec les yeux, les rincer immédiatement et abondamment.</li>
              </ul>  <br>          
          </div>
          <div class="avisSection">
            <h3 class="ProductAvisClientSTitle">Avis sur ce produit</h3>
            <hr>
            <div class="box-area">	
              <div class="img-area">
                <img src="portrait/portrait3.png" alt="">
              </div>	
              <h5>Salma</h5>
              <span></span>	{{--rating Goes Here--}}			
              <p class="client_opinion">
                J'adore ce produit de soin de la peau ! Il laisse ma peau douce, hydratée et radieuse. 
                Recommandé à tous ceux qui cherchent une routine de soins efficace..
              </p>
            </div> 
            @include('avisCreate') <br>
            {{-- @include('showAvis') --}}

          </div>
        </div>
       </div>
      </div>   
<br>
<br>
@include('footer')

@endsection