@extends('../layout')

@section('content')
    {{-- <div class="card complementcard" >
        <img src="{{$complement->image}}" class="card-img-top" alt="error">
        <div class="card-body">
         <h5 class="card-title">{{$complement->nom}}</h5>
          <p class="card-text">{{$complement->description}}</p>
          <p class="card-text">{{$complement->prix}}</p>
          <a href="#" class="btn ">{{$complement->marque}}</a>
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
                  <img src="{{$complement->image}}" alt="imageLodingError" style="height: 400px; width: 400px">
                </div>
                <div class="col-md-6">
                  <h1 class="singleProductTitle">Hawaii Noni</h1> {{--{{$complement->nom}}---}}
                  <hr style="color: #73b504; border:2px solid; border-radius:3px">
                  <p class="singleProductTags">Support immunitaire | Complement</p>
                  <p class="singleProductPrix">120DH</p> {{--{{$complement->prix}}--}}
                  <p class="singleProductLittleDesc">Sachets à usage unique faciles à utiliser
                    · Formule multi-facettes
                    · Excellent ajout à n'importe quel Unicity
                    poudre de protéine
                    · Excellent ajout à votre favori
                    Produits Unicity
                    · Sans sucre ajouté
                  </p>
                  <button class="singleProductButton">Ajouter au panier</button> <br><br>
                  <p class="singleProductCategories">Categories: Complements alimentaire, sante</p>
                </div>
              </div>
            </div>     
        </div><br><br>
        <div class="row">
          <div class="productDescription">
            <h3 class="productdescriptionTitle">Description</h3><br>
            <h5 class="productquestion">C'est quoi Hawaiin Noni ?</h5>
            <hr><br>
            <p class="productdetails">Dans le monde d’aujourd’hui, nous sommes régulièrement confrontés à des facteurs liés au mode de vie qui peuvent nuire à notre santé: aliments transformés, nutrition à calories vides, exercice insuffisant, etc. Avec tous ces combattants, il est clair que nos corps ont besoin d’un soutien supplémentaire.
              .Pendant des générations, les cultures du Pacifique ont utilisé le noni pour le soutien sanitaire. La combinaison du fruit du noni avec des vitamines et des minéraux essentiels, tels que le zinc et les antioxydants à base de plantes, a conduit au noni hawaïen, un mélange unique qui favorise à la fois la santé immunitaire et intestinale. 
              .Le mélange comprend également des fructooligosaccharides (FOS), qui soutiennent la croissance de bonnes bactéries dans le microbiome (les bactéries vivant dans l’intestin). Ajoutez une touche de kiwi et de baies, et vous avez une boisson qui favorise la santé globale et le goût d’une journée à la plage.
          </p>
            </div>
          <div class="conseilsDapplication">
            <h3 class="conseilsDapplicationTitle">Conseils d'application</h3>
            <hr><br>
                <ul class="conseilsDapplicationDesc" >
                  <li>Prendre un sachet (15 grammes) une fois par jour avec 5 à 7 onces d'eau.</li>
                  <li>Mélangez ou secouez bien. Les fructo-oligosaccharides peuvent prendre
                    le temps de se dissoudre dans l'eau.</li>
            </ul> <br>          
          </div>
          <div class="conseilsDapplication">
              <h3 class="conseilsDapplicationTitle">Benefits</h3>
              <hr><br>
              <ul class="conseilsDapplicationDesc">
                <li>Soutient la santé immunitaire.</li>
                <li>Soutient la fonction digestive.</li>
                <li>Favorise la santé intestinale et du côlon.</li>
              </ul>
          </div>
          <div class="avisSection">
            <h3 class="ProductAvisClientSTitle">Avis sur ce produit</h3>
            <hr>
            <div class="box-area">	
              <div class="img-area">
                <img src="portrait/portrait2.png" alt="">
              </div>	
              <h5>Salma</h5>
              <span></span>			{{--rating Goes Here--}}						
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
      <a href="/complements"><p class="back">Back</p></a>    
@include('footer')

@endsection