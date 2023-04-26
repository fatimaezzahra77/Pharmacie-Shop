@extends('/layout')
@section('content')

<!-- Container for the image slider -->
<div class="slideshow-container">
    <!-- Full-width images with number text -->
    <div class="mySlides">
        <img src="{{ asset('PS_images/m11.png') }}" alt="Image 1" style="width:100%; height:260px">
        <div class="caption"><b class="animate-charcter">Beaute et soins</b></div>
    </div>
    <div class="mySlides">
      <img src="{{ asset('PS_images/m12.png') }}" alt="Image 2" style="width:100%; height:260px">
      <div class="caption"><b class="animate-charcter">Produits pour votre propre besoin </b></div>
    </div>
    <div class="mySlides">
      <img src="{{ asset('PS_images/m3.png') }}" alt="Image 3" style="width:100%; height:260px">
      <div class="caption"><b class="animate-charcter">Des complements alimentaire</b></div>
    </div> 
    <div class="mySlides">
      <img src="{{ asset('PS_images/m13.png') }}" alt="Image 4" style="width:100%; height:260px">
      <div class="caption"><b class="animate-charcter">Naturelle pour votre sante</b></div>
    </div> 
    <div class="mySlides">
      <img src="{{ asset('PS_images/m7.png') }}" alt="Image 5" style="width:100%; height:260px">
      <div class="caption"><b class="animate-charcter">Livraison a votre domicile!</b></div>
    </div>
    <div class="mySlides"> 
      <img src="{{ asset('PS_images/m10.png') }}" alt="Image 6" style="width:100%; height:260px">
      <div class="caption"><b class="animate-charcter">A un prix qui vous convient!</b></div>
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
    </div><br>

    @include('products')<br>

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
    </div><br>

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
									    <i class="fa fa-youtube"></i>
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
									    <i class="fa fa-youtube"></i>
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
									    <i class="fa fa-youtube"></i>
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
									    <i class="fa fa-youtube"></i>
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
									    <i class="fa fa-youtube"></i>
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
									    <i class="fa fa-youtube"></i>
									</h6>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</section>

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

<script src="{{ asset('js/script.js') }}"></script>

@endsection
</body>
</html>