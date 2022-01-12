<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SparingKuy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <title>Hello, world!</title>

    <style>
        .navbar-nav.navbar-center {
            position: absolute;
            left: 30%;
            transform: translatex(-50%);
        }
    </style>
  </head>

  
  <body>
  
  <nav class="navbar  navbar-expand-lg navbar-light ">
      
      <div class="container">
        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
    <img
          src="/img/icon.png"
          height="50"
          alt="MDB Logo"
          loading="lazy"
          style="margin-top: 2px;"
        />
    </a>
            <button class="navbar-toggler" type="button" 
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" 
                 id="navbarSupportedContent">
                <ul class=" nav navbar-nav navbar-center">
                    <li class="nav-item me-1 mb-1 d-flex align-items-center active ">
                        <a class="nav-link" 
                           href="{{url('home')}}">
                          Home 
                      </a>
                    </li>
                    <li class="nav-item me-1 mb-1 d-flex align-items-center ">
                        <a class="nav-link" 
                           href="{{url('fitur')}}">
                          Features
                        </a>
                    </li>
                    <li class="nav-item me-1 mb-1 d-flex align-items-center">
                        <a class="nav-link" 
                           href="{{url('download')}}">
                          Download
                        </a>
                    </li>
                    <li class="nav-item me-1 mb-1 d-flex align-items-center">
                        <a class="nav-link" 
                           href="{{url('category')}}">
                          Sport
                        </a>
                    </li>
                    <li class="nav-item me-1 mb-1 d-flex align-items-center">
                        <a class="nav-link" 
                           href="{{url('pertandingan')}}">
                          Pertandingan
                        </a>
                    </li>
                </ul>
                
            </div>
    </nav>

<style>
li{
  padding: 4px;
}

a{
  text-decoration: none;
  color: #000;
}

a:hover, a:focus{
  color: red;
  text-decoration: none;
  outline: none;
}

.active{
  font-size: 20px;
  color: red;
  border-bottom: 2px solid red;
}
</style>



<div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="/img/home.png" class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-left text-md-left mb-3">
                        Make a New Friend Over <strong class="text-secondary">Sparing Kuy</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-left text-md-left text-muted">
                    Challenge your friends and play games together
                    Sparing Kuy in your nearest field..
                    </p>

                </div>
             </div>
         <div class="container h-100">
         <a class="btn me-2 mb-1 d-flex align-items-center text-white" href="{{url('download')}}">
          <button class="btn btn-danger btn-lg btn-block ">Getting Started</button>
        </a>
        </div>
</div>


<style>
  .btn-lg {
    padding: 20px 200px;
    font-size: 20px;
    border-radius: 10px;
}
</style>

       
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
