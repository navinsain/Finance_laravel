<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gohashinclude</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <style>  
h1 {  
  color: #fff;  
  padding-bottom: 2rem;  
  font-weight: bold;  
}  
a {  
  color: #333;  
}  
a:hover {  
  color: #E8D426;  
  text-decoration: none;  
}  
.form-control:focus {  
    color: #000;  
    background-color: #fff;  
    border: 2px solid #E8D426;  
    outline: 0;  
    box-shadow: none;  
}  
.btn {  
  background: black;  
  border: #E8D426;  
}  
.btn:hover {  
  background: #28a745;  
  border: #E8D426;  
}  
</style>  

</head>
<body style="background-image: url(https://www.desktopbackground.org/download/1280x800/2014/12/22/875294_narendra-modi-wallpapers-download-latest-desktop-backgrounds_1920x1080_h.jpg); background-repeat: no-repeat; background-size:cover ;" class="img-fluid">
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
        <a class="nav-link dropdown-toggle text-light" href="gallery.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </ul>
  </div>
</div>
</nav>
   
</header>
<div class="pt-5 pl-5 mt-3 ml-5">  
    
    <div class="container ">  
      <div class="row">  
          <div class="col-md-5 mx-auto">  
             <div class="card card-body">  

              
               <form id="submitForm" action="login_submit" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                 @csrf
                  <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">  
                   <div class="form-group required">  
                      <label for="username"> Enter your Name / Email </label>  
                        <input type="text" class="form-control text-lowercase" id="username" name="email" value="{{old('email')}}">  
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                   </div>                      
                  <div class="form-group required">  
                      <label class="d-flex flex-row align-items-center" for="password"> Enter your Password   
                         <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a> </label>  
                         <!-- <input type="password" class="form-control" required="" id="password" name="password" value="">   -->
                         <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">  
                         <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>  
     <div class="form-group mt-4 mb-4">  
              </div>  
         <div class="form-group pt-1">  
      <button class="btn btn-primary btn-block" type="submit"> Log In </button>  
                  </div>  
               </form>  
             <p class="small-xl pt-3 text-center">  
       <span class="text-muted"> Not a member? </span>  
        <a href="registration"> Sign up </a>  
                        </p>  
                        </div>  
                    </div>  
                </div>  
            </div>  
</div>  



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>