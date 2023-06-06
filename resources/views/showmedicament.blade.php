@extends('../layout')
@section('content')

{{-- <div class="card medicamentcard" style="width: 15rem; cursor: pointer;">
<img style="height: 181px" src="{{$medicament->image}}" class="card-img-top" alt="image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> --}}


  <div class="row hygieneContainer" >
    <div class="col-md-3 sidebarhygiene" >&nbsp;&nbsp; Categories sidebar go here </div> 
    {{-- <div class="col-md-1 vertical-line"></div> --}}
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-5 ">
              <img src="{{$medicament->image}}" alt="imageLodingError" style="height: 400px; width: 400px">
            </div>
            <div class="col-md-6">
              <h1 class="singleProductTitle">{{$medicament->nom}}</h1>
              <hr style="color: #73b504; border:2px solid; border-radius:3px">
              <p class="singleProductTags">Anti-Âge | Visage & Corps | Flacon Buvable | Complement</p>
              <p class="singleProductPrix">{{$medicament->prix}}DH</p>
              <p class="singleProductLittleDesc">Quick description Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsam cumque saepe officiis ipsa maiores, tempora, doloremque, molestiae vero quibusdam 
                exercitationem placeat eaque pariatur quo sed minima tempore dicta reiciendis quidem.
              </p>
              <button class="singleProductButton">Ajouter au panier</button> <br><br>
              <p class="singleProductCategories">Categories: Compléments anti-âge, Corps, Skincare corps, Soins anti-âge visage, Soins de jour anti-âge 
                visage, Visage</p>
            </div>
          </div>
        </div>     
    </div><br><br>
    <div class="row">
      <div class="productDescription">
        <h3 class="productdescriptionTitle">Description</h3><br>
        <h5 class="productquestion">C'est quoi Auracos Pro.Collagenium Elixir Anti-Âge Collagène Marin Buvable – 14 Flacons ?</h5>
        <hr><br>
        <p class="productdetails">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab obcaecati dolores sed esse beatae
         modi odit aspernatur voluptas et, quas officiis! Adipisci ut quibusdam quia autem quis minima 
         architecto omnis
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit earum ad illum aspernatur sint eveniet, in esse dolore? Numquam repudiandae dolor labore ducimus 
            saepe deserunt quisquam cumque aliquid fugit molestiae!
         
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid sed vitae omnis earum, libero 
              architecto nesciunt quae aperiam. Maiores facere fuga dolor ut recusandae, optio atque nam r
              epellendus eligendi deleniti?
          
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita alias eveniet ducimus 
              beatae, maiores, omnis, quod unde sunt ex quas deleniti voluptatem nostrum non eius sapiente
              deserunt ratione ipsam perspiciatis!
      </div>
      <div class="conseilsDapplication">
        <h3 class="conseilsDapplicationTitle">Conseils d'application</h3>
        <hr><br>
            <ul class="conseilsDapplicationDesc" >
              <li>Dans un 1er temps, commandez votre cure de 3 mois, c’est-à-dire 6 boites de Pro-Collagenium.</li>
              <li>Tous les jours buvez 1 flacon de Pro-Collagenium, à consommer le matin au moment du petit déjeuner.</li>
            <li>Une fois votre cure terminé, reprenez 6 autres boites 6 mois après le commencement de votre traitement.</li>
          <li>Auracos Pro-Collagenium est un produit à base de poisson et contient du Gluten, les personnes allergiques ne doivent surtout pas en consommer.</li>  
          </ul>  <br>          
      </div>
      <div class="avisSection">
        <h3 class="ProductAvisClientSTitle">Avis sur ce produit</h3>
        <hr>
        <div class="box-area">	
          <div class="img-area">
            <img src="portrait/portrait2.png" alt="">
          </div>	
          <h5>Salma</h5>
          <span>rating Goes Here</span>									
          <p class="client_opinion">
            Lorem Ipsum is simply dummy text of the printing and 
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
            ever since.
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
<a href="/pagemedicaments"><p class="back">Back</p></a> 

{{-- <a href="/"><p class="back">Back</p></a>  --}}
@include('footer')
@endsection
