@extends('../layout')
@section('content')

    {{-- <div class="card beautecard" >
        <img src="{{$beaute->image}}" class="card-img-top" alt="error">
        <div class="card-body">
         <h5 class="card-title">{{$beaute->nom}}</h5>
          <p class="card-text">{{$beaute->description}}</p>
          <p class="card-text">{{$beaute->prix}}</p>
          <a href="#" class="btn ">{{$beaute->marque}}</a>
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
                  <img src="{{$beaute->image}}" alt="imageLodingError" style="height: 400px; width: 400px">
                </div>
                <div class="col-md-6">
                  <h1 class="singleProductTitle">Resultime Masque Anti-Âge Express Micro-Diffusion Collagène – 10ml</h1> {{--{{$beaute->nom}}---}}
                  <hr style="color: #73b504; border:2px solid; border-radius:3px">
                  <p class="singleProductTags">Anti-Âge | Visage | Masque</p>
                  <p class="singleProductPrix">{{$beaute->prix}}DH</p>
                  <p class="singleProductLittleDesc">Masque anti-âge pour adultes. Application sur visage. Indiqué pour tous types de peaux.
                    Achetez Resultime Masque Anti-Âge Express Micro-Diffusion Collagène – 10ml sur PahrmacyShop.ma, votre pharmacie en ligne 
                    100% digitale qui vous livre tous vos produits au Casablanca et aux meilleurs prix.
                  </p>
                  <button class="singleProductButton">Ajouter au panier</button> <br><br>
                  <p class="singleProductCategories">Categories: Soins anti-âge visage, Soins de jour anti-âge visage, Soins de nuit anti-âge visage, Visage</p>
                </div>
              </div>
            </div>     
        </div><br><br>
        <div class="row">
          <div class="productDescription">
            <h3 class="productdescriptionTitle">Description</h3><br>
            <h5 class="productquestion">C'est quoi Resultime Masque Anti-Âge Express Micro-Diffusion Collagène - 10ml ?</h5>
            <hr><br>
            <p class="productdetails">Le masque anti-âge Express de Resultime est un soin visage à base de collagène qui lutte contre les signes visibles de l’âge. En seulement quelques minutes, la peau est repulpée, rebondie, lissée et elle est visiblement plus éclatante. Ce masque tissu collagène apporte un shot instantané de fraîcheur et d’éclat à la peau. Sa formule aux collagènes repulpants, aussi concentrée qu’un sérum et surboostée en Collagène Natif, diffuse ses puissants bienfaits, grâce à l’expertise de son support biocellulose high tech. En 10 minutes chrono, la peau est lissée et rebondie.

              Le masque anti-âge Express Resultime fonctionne par micro-diffusion de collagène. Le collagène est une protéine constituante de l’épiderme, c’est elle qui donne son élasticité à la peau. Mais avec l’âge, la production naturelle de collagène par le corps diminue, c’est pourquoi la peau perd de sa fermeté et que des rides et ridules se forment. Ce masque anti-âge de Resultime est donc concentré en sérum à base de collagène, pour une peau hydratée, lissée et plus rebondie. Il contient également 2 actifs hydratants incontournables : de l’acide hyaluronique qui offre une action repulpante et de la glycérine pour son effet lissant. L’extrait de laitue de mer protecteur et l’extrait de Chlorella vulgaris nourrissante viennent compléter cette formulation.
              
              Les collagènes repulpants une association d’actifs anti-âge ultra-performants laissant la peau comme régénérée : Micro-Collagène Vectorisé (technologie anti-âge exclusive brevetée) + Pro-Collagène pour une peau rebondie + Collagène Natif, à l’effet hydratant et lissant en surface.
              Support high tech dernière génération : En fibres de biocellulose, ce tissu épouse le micro-relief cutané pour une micro-diffusion express et continue des actifs.
              FR, DE, GB, IT, ES,BE, CH, LU. **Test consommateur – 71 femmes. % de satisfaction après 1 application.
              
        </p>
            </div>
          <div class="conseilsDapplication">
            <h3 class="conseilsDapplicationTitle">Conseils d'application</h3>
            <hr><br>
                <ul class="conseilsDapplicationDesc" >
                  <li>Utilisez ce masque à usage unique 1 à 2 fois par semaine.</li>
                  <li>Il est enveloppé dans 2 films de protection pour préserver sa fraîcheur et son efficacité.</li>
                <li>Dépliez le avec précaution, en vous aidant du filet blanc, puis retirez ce filet de protection.</li>
              <li>Appliquez le sur peau sèche, face humide contre le visage.</li>  
              <li>Ajustez et lissez pour bien épouser ses contours.</li>  
              <li>Retirez le film bleu qui se trouve sur l’extérieur en le décollant soigneusement à partir des découpes situées près des oreilles.              </li>  
              <li>Complétez votre routine avec les autres soins aux Collagènes Régénérants.
              </li>  
              </ul> 
            <br>          
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
      <a href="/beautes"><p class="back">Back</p></a>    

@include('footer')

@endsection