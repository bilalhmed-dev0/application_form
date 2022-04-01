<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>login page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " >
            <div class="container-fluid">
                <img src="img/Logo.jpg" width="45" alt="" class="d-inline-block align-middle mr-2">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                < class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="addmission.php">ADMISSION</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    FEE MANAGEMENT
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="fee_structure.php">FEE STRUCTURE</a></li>
                     <!--  <li><hr class="dropdown-divider"></li> -->
                     
                      <li><a class="dropdown-item" href="fee_payment_schedule.php">FEE PAYMENT</a></li>
                      
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PROGRAMS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="mba.html">MBA</a></li>
                      <li><a class="dropdown-item" href="degree.html">DEGREE COURSES</a></li>
                     <!--  <li><hr class="dropdown-divider"></li> -->
                      <li><a class="dropdown-item" href="diploma.html">DIPLOMA COURSES</a></li>
                      <li><a class="dropdown-item" href="certificate.html">CERTIFICATE COURSES</a></li>
                      <li><a class="dropdown-item" href="zbts.html">ZETECH BUSINESS AND TECHNICAL INSTITUTE</a></li>
                      <li><a class="dropdown-item" href="CFC.html">CENTRE FOR PROFESSIONAL CERTIFICATIONS</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="enquiry.php">ENQUIRY</a>
                  </li>

                  <li class="nav-item">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <a class="nav-link" href="login.php">login</a>
                  </li>
                  

                  
            </div>
          </nav>
        <div class="container">
            <form method="POST" action="admin_validation.php"> 
                <div class="form-group mb-3">
                  <label for="createName"></label>
                  <input type="name" class="form-control" name="adminName" id="nameInput" aria-describedby="emailHelp" placeholder="Enter name">
                 </div>
                <div class="form-group mb-3">
                  <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                </div>
               
                <button type="submit" class="btn btn-primary">login</button>
              </form>
        </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>