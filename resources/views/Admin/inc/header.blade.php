{{-- {{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    {{--  <!-- Libraries Stylesheet -->
    <link href="{{asset('Front/lib')}} /animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('Front/lib')}} /owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="{{ asset('Front/css')}}/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- <!-- Template Stylesheet -->
    {{-- <link href="{{asset('Front/css')}}/style.css" rel="stylesheet"> 
    <link href="{{asset('Front/css')}}/admin.css" rel="stylesheet"> 
  </head>
  <body>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('Admin.home')}}">AS Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('Admin.home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Admin.cats.index')}}">catagories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Admin.teatcher.index')}}">Teatchers</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Action
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="add_item.php">Add item</a></li>
            <li><a class="dropdown-item" href="add_catagory.php"> Add Catagory</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="profile.php">Add user</a></li>
          </ul>
        </li>
      </ul>
      
       <!-- profile section -->
        <ul class="navbar-nav ml-auto me-auto my-2  my-lg-0 navbar-nav-scroll" style="  --bs-scroll-height: 100px;" >
        <li  class=" nav-item">
          <a class="btn  log btn-primary" style="margin-right:10px " href="profile.php" type="submit">Profile</a>
        </li> 
        <li class="  nav-item">
          <a class="btn logi btn-danger" href="{{route('Admin.logout')}}" type="submit">Log out</a>
        </li>
      </ul>

      {{-- <!-- login section -->
            
      <ul class="navbar-nav ml-auto me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;" >
        <li  class="ml-2 nav-item">
          <a class="btn   btn-primary" href="login.php" type="submit">Login</a> 
       
        </li> 
        <li class="  nav-item">
          <a class="btn   btn-success" href="login.php" type="submit">Register</a> 
        </li>
      </ul>
       


       
      
      
 
    
   


    
    

    
      
      
    </div>
   

  </div>
</nav>  --}}

{{-- the new header --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{asset('Admin/css/fontawesome.min.css')}}" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{asset('Admin/jquery-ui-datepicker/jquery-ui.min.css')}}" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="{{asset('Admin/css/bootstrap.min.css')}}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('Admin/css/templatemo-style.css')}}">
    
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="{{route('Admin.home')}}">
          <h1 class="tm-site-title mb-0">E-learning Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="{{route('Admin.home')}}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Admin.cats.index')}}">
                <i class="fas fa-shopping-cart"></i> Catagoires
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('Admin.teatcher.index')}}">
                <i class="fas fa-shopping-cart"></i> Teatchers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('Admin.course.index')}}">
                <i class="fas fa-shopping-cart"></i> Courses
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('Admin.student.index')}}">
                <i class="far fa-user"></i> Student
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accounts.html">
                <i class="fas fa-cog"></i>Profile
              </a>
            </li>
            
          </ul>
        
          <!-- profile section -->
        <ul class="navbar-nav my-2  my-lg-0 navbar-nav-scroll" style="  --bs-scroll-height: 100px;" >
          <li class="  nav-item">
            <a class="btn log btn-danger" href="{{route('Admin.logout')}}" type="submit">Log out</a>
          </li>
        </ul>
        </div>
      </div>
    </nav>
    
