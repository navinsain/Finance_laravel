<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gohashinclude</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body style="background-color:maroon">
   <header>
<script>
  document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
</script>

<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light " style="background-color:maroon;">
 <div class="container">
  <a class="navbar-brand text-light" href="#"><b>AR ASSOCIACETS</b></a>
  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link text-light" href="/index">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="about">ABOUT</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="gallery" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SERVICE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:maroon">
          <a class="dropdown-item text-light" href="Coaching">Coaching & Training Institute</a>
          <a class="dropdown-item text-light" href="Finance">Finance & Investments</a>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link text-light"  href="network">NETWORK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light"  href="contact">CONTACT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="logout">Logout</a>
      </li>
    </ul>
  </div>
</div>
</nav>
   
</header>
<section>
    <!--slider image start-->
  <div id="carouselExampleSlidesOnly" class="carousel slide mt-2" data-ride="carousel">
  <div class="carousel-inner"data-interval="1000">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="{{asset('images/gyan vihar banner 1.jpg')}}" class="img-fluid" style="background-size: cover;background-repeat: no-repeat;opacity:1;" alt="First slide">
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100 img-fluid" src="{{asset('images/gyan vihar banner 2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item"  >
      <img class="d-block w-100 img-fluid" src="{{asset('images/gyan vihar banner 3.jpg')}}" alt="Third slide">
    </div>
  </div>
</div>
<!--slider image end-->

<!--footer start-->
<div style="background-color:maroon;" class="p-2 mt-5 border border-dark">
    <div class="row">
      <div class="col-6">
    <p class="text-light"style="font-size: 12px;"><b>AR ASSOCIACETS
. All Rights Reserved (Terms of use)</b></p>
    <p class="text-light"style="font-size: 12px;"> Developed and Managed by gohashinclude Limited</p>
  </div>
  <div class="col">
    <div>
    <a href="https://vgu.ac.in/"><img src="{{asset('images/vgu.png')}}" class="img-fluid float-end" style="width: 83%;"></a>
  </div>
</div>
  <div class="col">
  <div>
    <a href="https://www.rtu.ac.in/index/"><img src="{{asset('images/Rajasthan_Technical_University.jpg')}}" class="img-fluid float-end" style="width:88%;"></a>
  </div>
</div>
  <div class="col">
  <div>
    <a href="https://home.iitd.ac.in/"><img src="{{asset('images/IIT-Delhi.png')}}" class="img-fluid float-end" style="width: 100%;"></a>
  </div>

</div>
</div>
</div>
<!--footer end-->
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>