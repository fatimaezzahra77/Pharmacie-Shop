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
    <div class="section testimonials container" id="testmonials"><!--testmonials start-->
      <h2>Testimonials</h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c1.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>Henery Nicholas</h4>
                    <p class="occupation">Photographer</p >
                    <div class="text">                
                      <p> Fatima ezzahra and I have worked together several times. He done job very fast. Very responsive,
                         I would not hesitate in recommending him and getting his help for this kind of jobs.</p >
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c2.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>Steve Anjali </h4>
                    <p class="occupation">Web Designer</p >
                    <div class="text">                
                      <p> She amaze me with quick delivery Communicate well, all expectations and requirements were communicated upfront. Highly recommended
                        Moreover, it is responsive. I'm very happy with the seller</p >
                    </div>
                  </div>
                </div>
              </div> 
               <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c3.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>sarina Willams </h4>
                    <p  class="occupation">GraphicDesigner</p >
                    <div class="text">                
                      <p> She is awesome ; professional and skilled He quickly converted my Figma file to Html, very skilled, 
                        strong communication & great attitude. He was a major asset to our project, I highly recommend it !</p >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c1.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>Henery Nicholas</h4>
                    <p class="occupation">Engineer</p >
                    <div class="text">                
                      <p>Fatima ezzahra and I have worked together several times. He done job very fast. Very responsive,
                        I would not hesitate in recommending him and getting his help for this kind of jobs.</p >
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c2.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>Steve Anjali </h4>
                    <p class="occupation">Engineer</p >
                    <div class="text">                
                      <p>She amaze me with quick delivery Communicate well, all expectations and requirements were communicated upfront. Highly recommended
                        Moreover, it is responsive. I'm very happy with the seller</p >
                    </div>
                  </div>
                </div>
              </div> 
               <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c3.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>sarina Willams </h4>
                    <p class="occupation">Engineer</p >
                    <div class="text">                
                      <p>She is awesome ; professional and skilled He quickly converted my Figma file to Html, very skilled, 
                        strong communication & great attitude. He was a major asset to our project, I highly recommend it !</p >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c1.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>Henery Nicholas</h4>
                    <p class="occupation">Photographer</p >
                    <div class="text">                
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet vero ex quo,
                         eaque quisquam consequatur dolor illum veritatis veniam itaque optio solut</p >
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c2.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>Mark waugh </h4>
                    <p class="occupation">Web Designer</p >
                    <div class="text">                
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet vero ex quo,
                         eaque quisquam consequatur dolor illum veritatis veniam itaque optio solut</p >
                    </div>
                  </div>
                </div>
              </div> 
               <div class="col-md-4 col-12">
                <div class="testimonials-single">
                  <div class="imgBox">
                    <img src="c3.jpg" alt="Henery"> 
                  </div>
                  <div class="content">
                    <h4>sarina Willams </h4>
                    <p class="occupation">GraphicDesigner</p >
                    <div class="text">                
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet vero ex quo,
                         eaque quisquam consequatur dolor illum veritatis veniam itaque optio solut</p >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--testmonials end-->
    
    
    
    
    


<script src="{{ asset('js/script.js') }}"></script>

@endsection