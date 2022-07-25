<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gohashinclude</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>
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
<section class="h-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="https://www.desktopbackground.org/download/1280x800/2014/12/22/875294_narendra-modi-wallpapers-download-latest-desktop-backgrounds_1920x1080_h.jpg"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;height: 100%;width: 100%;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase text-center">Registration form</h3>


                <form method="post" action="register_submit">
                  <!-- @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif -->
                  @csrf

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="first_name" value="{{old('first_name')}}" id="form3Example1m" required class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">First name</label>
                      <!-- <span class="text-danger">@error('first name') {{$message}} @enderror</span> -->
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="last_name" value="{{old('last_name')}}" id="form3Example1n" required class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="mothers_name" value="{{old('mothers_name')}}" id="form3Example1m1" required class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="fathers_name" value="{{old('fathers_name')}}" id="form3Example1n1" required class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="address" value="{{old('address')}}" id="form3Example8" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      required
                      id="femaleGender"
                      value="Female"
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      required
                      id="maleGender"
                      value="Male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      required
                      id="otherGender"
                      value="Other"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                
        

                <div class="form-outline mb-4">
                  <input type="text" name="dob" value="{{old('dob')}}" id="form3Example9" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" name="pincode" value="{{old('pincode')}}" id="form3Example90" required class="form-control form-control-lg" maxlength="8"/>
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="state" value="{{old('state')}}" id="form3Example99" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">State</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="city" value="{{old('city')}}" id="form3Example99" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">City</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="number" name="contact" value="{{old('contact')}}" id="form3Example99" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Contact Number</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="email" value="{{old('email')}}" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                  <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" value="{{old('password')}}" id="form3Example99" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Password</label>
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="loksabha" value="{{old('loksabha')}}" id="form3Example99" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Lok sabha</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="vidhansabha" value="{{old('vidhansabha')}}" id="form3Example99" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Vidhan sabha</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="referralcode" value="{{old('referralcode')}}" id="form3Example99" required class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Referral code</label>
                </div>
                             
                             Uplode Photo:- <input type="file" id="myFile" name="filename" required>
                    
                              

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                  <!-- <input class="btn btn-warning btn-lg ms-2" type="submit" name="submit"/> -->
                </div>

              </form>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>