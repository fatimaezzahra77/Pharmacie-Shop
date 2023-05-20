@extends('/layout')
@section('content')

<!-- image slider -->
<div class="slideshow-container">
    <div class="mySlides">
        <img src="{{ asset('PS_images/m11.png') }}" alt="Image 1" style="width:100%; height:260px">
        <div class="caption"><b class="animate-charcter">Beaute et soins</b></div>
    </div>
    <div class="mySlides">
      <img src="{{ asset('PS_images/co2.png') }}" alt="Image 2" style="width:100%; height:260px">
     
    </div>
    <div class="mySlides">
      <img src="{{ asset('PS_images/m7.png') }}" alt="Image 3" style="width:100%; height:260px">
      <div class="caption"><b class="animate-charcter">Des complements alimentaire</b></div>
    </div> 
    <div class="mySlides">
      <img src="{{ asset('PS_images/co5.png') }}" alt="Image 2" style="width:100%; height:260px">
     
    </div>
    <div class="mySlides">
      <img src="{{ asset('PS_images/m13.jpg') }}" alt="Image 4" style="width:100%; height:260px">
      <div class="caption"><b class="animate-charcter">Naturelle pour votre sante</b></div>
    </div> 
    <div class="mySlides">
      <img src="{{ asset('PS_images/co3.jpeg') }}" alt="Image 5" style="width:100%; height:260px">
     
    </div>
    <div class="mySlides"> 
      <img src="{{ asset('PS_images/co4.png') }}" alt="Image 6" style="width:100%; height:260px">
      
    </div>
    <div style="text-align:center">
        <span class="demo"></span>
        <span class="demo"></span>
        <span class="demo"></span>
    </div>
    <!-- Next and previous buttons -->
    <a id="prevButton" class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a id="nextButton" class="next" onclick="plusSlides(1)">&#10095;</a>
  <br>
  <!-- Services de website -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
    <h3 class="service-header">Services & avantages</h3>
    <div class="service-container">
        <div class="item1">
            <img src="icons/promotions.png" class="icon" alt="icon">
            <p class="service-tite"><b>Promotions</b> </p>
        </div>
        <div class="item">
            <img src="icons/delivery.png" class="icon" alt="icon">
            <p class="service-tite"><b> Livraison gratuit a partir de 60dh</b></p>
        </div>
        <div class="item">
            <img src="icons/global.png" class="icon" alt="icon">
            <p class="service-tite"><b>Des marques mondiale</b></p>
        </div>
    </div>
  </div>
  </div>
  </div>
    <br>

    @include('products')<br><br>
<!-- Produits populaires maintenant-->
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3 class="popular-header">Actuellement populaire sur Pharmacie shop</h3>
      <div class="popular-container">
        <div class="itempopular">
            <a href=""><p class="popular-tite"><b>Doliprane</b> </p></a>
        </div>
        <div class="itempopular">
            <a href=""><p class="popular-tite"><b>Paracitamol</b></p></a>
        </div>
        <div class="itempopular">
           <a href=""><p class="popular-tite"><b>Magnesium</b></p></a>
        </div>
        <div class="itempopular">
          <a href=""><p class="popular-tite"><b>La roche posay</b></p></a>
       </div>
       <div class="itempopular">
        <a href=""><p class="popular-tite"><b>Serum</b></p></a>
       </div>
    </div>
  </div>
</div>
</div>
    <br>
    <!--Notre recommendation-->
    
    @include('recommandations')<br><br>

    <!-- Notre marques-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
    <h3 class="marques-header">Notre marques</h3>
    <div class="marques-container">
      <div class="item-marque">
          <a href=""><img class="marque-img" src="marques/CeraVe_Logo.jpg" alt=""></a>
      </div>
      <div class="item-marque">
          <a href=""><img class="marque-img" src="marques/LogoLaRochePosay.jpg" alt=""></a>
      </div>
      <div class="item-marque">
         <a href=""><img class="marque-img" src="marques/logo-biafine.png" alt=""></a>
      </div>
      <div class="item-marque">
        <a href=""><img class="marque-img" src="marques/Unicity-Logo.jpg" alt=""></a>
     </div>
    </div>
  </div>
</div>
  </div><br><br><br>


<!--Avis des clients-->
<div class="container">
  <div class="row">
    <div class="col-md-12">
<h3 class="avis-header">Avis des clients</h3>
			<section id="testimonial_area" class="section_padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testmonial_slider_area text-center owl-carousel">
								<div class="box-area">	
									<div class="img-area">
										<img src="portrait/portrait7.png" alt="">
									</div>	
									<h5>Person's name</h5>
									<span>Designation Goes Here</span>									
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-twitter"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="portrait/portrait2.png" alt="">
									</div>	
									<h5>Person's name</h5>
									<span>Designation Goes Here</span>									
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-twitter"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="portrait/portrait3.png" alt="">
									</div>	
									<h5>Person's name</h5>
									<span>Designation Goes Here</span>									
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-twitter"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="portrait/portrait15.png" alt="">
									</div>	
									<h5>Person's name</h5>
									<span>Designation Goes Here</span>									
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-twitter"></i>
									</h6>
								</div> 
							
								<div class="box-area">	
									<div class="img-area">
										<img src="portrait/portrait18.png" alt="">
									</div>	
									<h5>Person's name</h5>
									<span>Designation Goes Here</span>									
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-twitter"></i>
									</h6>
								</div> 

								<div class="box-area">	
									<div class="img-area">
										<img src="portrait/portrait20.png" alt="">
									</div>	
									<h5>Person's name</h5>
									<span>Designation Goes Here</span>									
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-twitter"></i>
									</h6>
								</div> 
							</div>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>
			</section> <br><br>

<!-- Description de site -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="row" id="row">
        <div class="col-md-12  "id="column">
          <p class="descritpion-content">
          Bienvenue sur shop-pharmacie.fr,  votre pharmacie et parapharmacie en ligne pour la France.
           Commandez facilement en ligne des médicaments sans ordonnance et des cosmétiques, puis recevez-les 
           directement à votre domicile. Profitez d’une navigation facile et agréable grâce à nos différents 
           espaces qui vous permettront de trouver rapidement ce dont vous avez besoin pour vous et toute votre 
           famille. Produits santé et d’hygiène, cosmétiques, maternité et bébé ou encore produits diététiques 
           et minceur sont à votre disposition et ce à des prix attractifs. Nous vous proposons également de 
           nombreuses réductions tout au long de l'année. Intéressé(e) ? Rendez-vous sur notre page dédiée aux 
           bons de réductions et codes promo.
           Un des leaders européens de la pharmacie et parapharmacie en ligne depuis plus de 10 ans, ce sont 
           plus de 9,3 millions de clients à travers l’Europe (notamment en Allemagne et en Autriche) que nous 
           conseillons et qui bénéficient de notre large choix de produits et d’un service de qualité.
          </p>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col-md-12 "  id="column">
         <h4 class="descritpion-header">Retrouvez toutes vos marques et produits préférés </h4>          
         <p class="descritpion-content"> Le catalogue de shop-pharmacie.fr comprend une large sélection de produits issus de marques et de 
          laboratoires réputés : Vichy, La Roche Posay, Bioderma, Nuxe, Roger&Gallet, Mustela ou encore Oenebiol
          , parmi tant d’autres. Notre engagement est d’offrir à nos clients les meilleurs marques et produits 
          pour garantir une qualité optimale et prendre soin de vous et de votre famille en toute confiance.  
          À la recherche d’une marque ou d’un produit particulier ? Vous pouvez effectuer une recherche par 
          marque ou taper le nom d’un produit dans la barre de recherche.
        </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row" id="row">
        <div class="col-md-12" id="column">
          <h4 class="descritpion-header">Un service de livraison efficace</h4>
          <p class="descritpion-content">
          Commandez sur shop-pharmacie.fr en quelques clics, 24h sur 24 et 7 jours sur 7. Faites-vous livrer en
          quelques jours tous vos médicaments sans ordonnance et vos produits préférés en France métropolitaine.
          Vous pouvez opter pour la livraison à domicile ou pour la livraison en Point Relais®. À partir de 49 €
          d'achat, nous vous offrons les frais de livraison !
          </p>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col-md-12" id="column">
          <h4 class="descritpion-header">Un service client à votre écoute</h4>
          <p class="descritpion-content">
          Besoin d’un conseil beauté, minceur ou bien-être ? N’hésitez pas à contacter notre service client pour
          recevoir des conseils personnalisés. Nos conseillers sont à votre disposition du lundi au vendredi de 
          8h à 20h et le samedi de 8h à 16h et joignables gratuitement pour répondre à toutes vos questions au 
          sujet de nos produits ou de la livraison de votre colis.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<footer class="bg-dark text-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mx-auto text-center">
        <h5>Moyens de paiement</h5>
        <img  id="payement" src="livraison/bitcoin.png" width="100px" height="50px" alt="">
        <img  id="payement"src="livraison/paypal.png" width="100px" height="50px" alt="">
        <img  id="payement"src="livraison/virement.png"  width="100px" height="50px" alt="">
      </div>
    </div>
    </div><br><br>
    <div class="row">
      <div class="col-md-4">
        <h5>A propos de nous</h5>
        <p>Nous sommes une entreprise qui ...</p>
        <a href="#">Aide</a>
        <a href="#">Livraison</a>
      </div>
      <div class="col-md-4">
        <h5>Contactez nous</h5>
        <ul class="list-unstyled">
          <li>Address: Casablanca, Morocco</li>
          <li>Phone: XXX-XXX-XXXX</li>
          <li>Email: pharmacieShop@gmail.com</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Connecter avec nous</h5>
        <ul class="list-unstyled">
          <li><i></i><a href="#">Facebook</a></li>
          <li><i></i><a href="#">Twitter</a></li>
          <li><i></i><a href="#">Instagram</a></li>
          <li><i></i><a href="#">Linkedin</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row md-4">
    <div class="col-md-12 text-center">
      <p>&copy; 2023 Pharmacy Shop. All rights reserved.</p>
    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
        $(".testmonial_slider_area").owlCarousel({
				autoplay: true,
				slideSpeed:1000,
				items : 3,
				loop: true,
				nav:true,
				navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
				margin: 30,
				dots: true,
				responsive:{
					320:{
						items:1
					},
					767:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					}
				}	
			});
</script>
<script src="{{ asset('javascript/script.js') }}"></script>
@endsection
</body>
</html>