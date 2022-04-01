<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
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
                  <li class="nav-item"><a class="nav-link" href="application_procedure.php">APPLICATION PROCEDURE</a></li>
                 
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PROGRAMS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="MBA.php">MBA</a></li>
                      <li><a class="dropdown-item" href="degree.php">DEGREE COURSES</a></li>
                     <!--  <li><hr class="dropdown-divider"></li> -->
                      <li><a class="dropdown-item" href="diploma.php">DIPLOMA COURSES</a></li>
                      <li><a class="dropdown-item" href="certificate.php">CERTIFICATE COURSES</a></li>
                      <li><a class="dropdown-item" href="zbts.php">ZETECH BUSINESS AND TECHNICAL INSTITUTE</a></li>
                      <li><a class="dropdown-item" href="CFC.php">CENTRE FOR PROFESSIONAL CERTIFICATIONS</a></li>
                      
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
          <div class="container mt-3">
             <h1 class="text-center">Online Enquiry Desk</h1>
             <h2 class="text-center text-danger">Fill all the required fields</h2>




             <form  method="post" action="enquiry_validation.php">

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text"  name="Name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
              </div>
              <div class="mb-3">
                <label for="department" class="form-label">department</label>
                <select class="form-select"  name="department"   aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">learning</option>
                  <option value="2">registration/adminstration</option>
                  <option value="3">Security</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Primary Phone</label>
                <input type="text" class="form-control"  name="phone"   id="exampleInputEmail1" aria-describedby="emailHelp">
               
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Primary Email </label>
                <input type="email" class="form-control"  name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
               
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">request a phone call</label>
                <select class="form-select"  name="info"  aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">Yes</option>
                  <option value="2">No</option>
                  
                </select>
                
               
              </div>
             <div class="mb-3">
                <label for="phone" class="form-label">How you learnt about Zetech</label>
                <select class="form-select" name="how_u_leant_abt_it" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">radio</option>
                  <option value="2">newsapper</option>
                  <option value="2">freinds</option>
                  <option value="2">facebook</option>
                  
                </select>
               
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Subject</label>
                <select class="form-select"  name="subject"  aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">geenral/option>
                  <option value="2">academic</option>
                  <option value="2">course enquiry </option>
                  <option value="2">complain</option>
                  <option value="2">compliment</option>
                  
                </select>
               
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">description</label>
                <textarea class="form-control" name="description" id="textAreaExample1" rows="4"></textarea>
               
              </div>


              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
           
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
    <footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form5Example27" class="form-control" />
              <label class="form-label" for="form5Example27">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://www.zetech.ac.ke/">ZETECH UNIVERSITY</a>
  </div>
  <!-- Copyright -->
</footer>
    
</html>