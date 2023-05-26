<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <script src="https://kit.fontawesome.com/1a050fedc2.js" crossorigin="anonymous"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-3qWtBwpeytEJ2DsRm0z8AzDhMeZfez0LX34iu18vIitG3f/hyNffoQJ5c5v5oW2kiVTJrqST47XG/4I1b8W/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-Ks/Mb+arDQ2XKIKnDUkaJxBK/RpTmbn/hLDgAFxNc+TE0LJrZrN7axSMujOjKYZ7o+6H0U1aDd6jc0sl3sLsLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

     <!-- from youtube testimonial-->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <title>Pharmacie Shop</title>
</head>

<body>
  <div class="search-bar-container"style=" padding:0.5rem;" >
    <div class="row" >
      <div class="col-md-6 offset-md-3" >
      <a href="/" style="text-decoration: none !important; margin-top: 20px;"><span class="header"  >Pharmacy Shop</span></a>
      <div class="icons-cntainer">
        {{-- <a href="#"><img src="icons/user-interface.png" class="icon" id="search-icon" alt="icon"><!--<span class="span">Login</span>--></a>
        <a href="#"><img src="icons/shopping-cart.png" class="icon" id="search-icon" alt="icon"><!--<span class="span">Mon panier</span>--></a> --}}
      </div>
        <form class="form-inline my-2 my-lg-0 search-form" > 
          <input class="form-control mr-sm-2" type="search" placeholder="chercher un produit, categorie, marque..." aria-label="Search" id="search">
          {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
        </form>
      </div>
    </div>
  </div>  
  <div>
    <nav class="navbar navbar-expand-lg">
      {{-- <a class="navbar-brand" href="#">Categories</a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="icons/square.png" class="icon" alt="icon">
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          {{-- <li>    
            <a href=""><img src="icons/square.png" class="icon" id="icon" alt="icon"></a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <img src="icons/square.png" class="icon" id="icon" alt="icon"> --}}
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Hygiene produits</a>
              <a class="dropdown-item" href="#">Medicaments</a>
              {{-- <div class="dropdown-divider"></div> --}}
              <a class="dropdown-item" href="#">Complements alimentaires</a>
              <a class="dropdown-item" href="#">Skin Care</a>
              <a class="dropdown-item" href="#">Marques</a>
            </div>
          </li>
          <li class="nav-item "> {{-- class="active" --}}
            <a class="nav-link" href="/pagemedicaments">Medicaments </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hygiene">Higiene et Sante</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/beautes">Beaute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/complements">Complements Alimentaires</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Marques</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-shopping-cart" id="shoppingcartIcon" aria-hidden="true"></i> Panier <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">
                <div class="row total-header-section">
                  @php $total = 0 @endphp
                  @foreach((array) session('cart') as $id => $details)
                  @php $total += (float)$details['prix'] * $details['quantity'] @endphp
    
                  @endforeach
                  <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                      <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                  </div>
              </div>
              @if(session('cart'))
                  @foreach(session('cart') as $id => $details)
                      <div class="row cart-detail">
                          <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                              <img src="{{ asset('roche-posay') }}/{{ $details['image'] }}" />
                          </div>
                          <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                              <p>{{ $details['nom'] }}</p>
                              <span class="price text-info"> ${{ $details['prix'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                          </div>
                      </div>
                  @endforeach
              @endif
              <div class="row">
                  <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                      <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                  </div>
              </div>
              </a>
            </div>
        </li>        
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
      @endif
  </div>
  <main>@yield('content')</main>
    {{-- <h1>This is the main page of the website</h1> --}}
         @yield('scripts')
</body>
</html>