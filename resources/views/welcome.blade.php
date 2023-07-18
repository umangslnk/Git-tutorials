
<head>
    <link rel="icon" type="image/x-icon" href="img/pngwing.com (6).png">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Main Css-->
      
      <!--Font Awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <!--Font Awesome-->
      
      <!--Google Font-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@500;800&family=Oswald:wght@300&family=Poppins:wght@300;400&family=Roboto+Condensed:wght@300&family=Urbanist:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">
      <!--Font
      font-family: 'Dancing Script', cursive;
      font-family: 'Open Sans', sans-serif;
      font-family: 'Oswald', sans-serif;
      font-family: 'Poppins', sans-serif;
      font-family: 'Roboto Condensed', sans-serif;
      font-family: 'Urbanist', sans-serif;-->
      <!--Google Font-->
      
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  
      
      <!--Main Css-->
      <link rel="stylesheet" href="mobile.css">
      <link rel="stylesheet" href="all_products.css">
      <link rel="stylesheet" href="css/styale.css">
      <link rel="stylesheet" href="about.css">
  
  
      <title>FASC</title>
    </head>
    @include('hearder')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('/public/img/pexels-johannes-plenio-1642770 (1).jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/public/img/pexels-quang-nguyen-vinh-2563129.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/public/img/pexels-quang-nguyen-vinh-2563129.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              
@include('footer')                