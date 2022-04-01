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
                    <a class="nav-link" href="admission.php">ADMISSION</a>
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

                 
                  

                  
            </div>
          </nav>
          


      <h1 class="text-center mt-3">
          ZETECH UNIVERSITY
      </h1>
      <h2 class="text-center">ONLINE COURSE APPLICATION FORM</h2>
      <p class="text-center">For queries call 0719034500 or WhatsApp 0706622557, Email: online.application@zetech.ac.ke</p>

      <div class="container border border-primary text-capitalize text-danger text-center">
          <p>Please Fill all the   fields , for a successful registertion </p>
      </div>

      <div class="container mt-lg-3">
        <h4>APPLICANTS DETAILS</h4>
        <hr>

        <div class="container border border-secondary">
            <form method="post" action="adm_details.php">
                <div class="mb-3">
                  <label for="nameInput" class="form-label">Enter Full Names</label>
                  <input type="name" name="names" class="form-control" id="nameInput"   aria-describedby="nameHelp">                 
                </div>

                <div class="mb-3">
                  <label for="mobileInput" class="form-label">Enter Mobile Phone Number</label>
                  <input type="mobilenumber" name="phone_number"   class="form-control" id="mobileInput">
                </div>

                <div class="mb-3">
                    <label for="emailInput" class="form-label">Enter your Email address</label>
                    <input type="email" name="email"  class="form-control" id="emailInput" aria-describedby="emailHelp">                 
                  </div>

                  <div class="mb-3">
                    <label for="kinsnamesInput" class="form-label">Enter Next of kin`s Name</label>
                    <input type="name" name="kins_name"  class="form-control" id="kinsnamesInput" aria-describedby="emailHelp">                 
                  </div>  


                  <div class="mb-3">
                    <label for="kinsmobileInput" class="form-label">Enter Next of kin`s mobile phone number</label>
                    <input type="mobilenumber"  name="nextOf_kin_s_number" class="form-control" id="kinsmobileInput">
                  </div> 


                  <h4>COURSE APPLICATION DETAILS </h4>
                  <hr>

                  <div class="mb-3">
                    <label for="intakeInput" class="form-label">intake</label>
                   
                    <select class="form-select" name = "intake" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="JANUARY">January Intake</option>
                        <option value="MAY">MAy Intake</option>
                        <option value="SEPTEMBER">September Intake</option>
                      </select> 
                  </div>

                  <div class="mb-3">
                    <label for="intakeInput" class="form-label">Mode Of Study</label>
                    <select class="form-select" name = "study_time" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="FULL TIME">Full time</option>
                        <option value="PART TIME">Part Tme</option>
                        <option value="E-LEARNING">E-learning</option>
                      </select>
                  </div>  


                  <div class="mb-3">
                    <label for="intakeInput" class="form-label">Programme Enrolling For </label>
                    <select class="form-select" name = "course" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Master of Business Administration(MBA)">Master of Business Administration(MBA)</option>
                        <option value="Bachelor  of Commerce(BCOM)">Bachelor  of Commerce(BCOM)</option>
                        <option value="Bachelor of Arts  in International RElations and Diplomacy(BIRD)">Bachelor of Arts  in International RElations and Diplomacy(BIRD)</option>
                        <option value="Bachelor of Education Arts(BEdARTs">Bachelor of Education Arts(BEdARTs)</option>
                        <option value="Bachelor of Accounting and Fiannce(BAF)">Bachelor of Accounting and Fiannce(BAF)</option>
                        <option value="Bachelor of Business Information Technology(BBIT) ">Bachelor of Business Information Technology(BBIT) </option>
                     
                        <option value="Diploma In Business Administration and Management">Diploma In Business Administration and Management</option>
                        <option value="Diploma In Purchasing ANd Supply Chain Management">Diploma In Purchasing ANd Supply Chain Management</option>
                        <option value="Diploma In Human Resource Management">Diploma In Human Resource Management</option>
                        <option value="Diploma In Accounting and Finance">Diploma In Accounting and Finance</option>
                        <option value="Diploma In Film and Television Production">Diploma In Film and Television Production</option>
                        
                        
                        <option value="Diploma In Business Informatio Technology">Diploma In Business Informatio Technology</option>
                        <option value="Diploma In Computer Science">Diploma In Computer Science</option>
                        
                        <option value="Certificate  In Business Management">Certificate  In Business Management</option>
                        <option value="Certificate In Purchasing and Supply Chain Management">Certificate In Purchasing and Supply Chain Management</option>
                        <option value="Certificate In Development Studies">Certificate In Development Studies</option>
                        <option value="Certificate In Journalism and Media Studies">Certificate In Journalism and Media Studies</option>
                        <option value="Certificate In Hospitality and Tourism Management">Certificate In Hospitality and Tourism Management</option>
                      </select>
                  </div>  



                  <div class="mb-3">
                    <label for="intakeInput" class="form-label">Campus Of Study </label>
                    <select class="form-select" name = "campus" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="RUIRU CAMPUS">Ruiru Campus</option>
                        <option value="TOWN CAMPUS">Town Campus</option>
                      </select>
                  </div>  


                  <h4>Application Attachments</h4>
                  <hr>

                  <div class="mb-3">
                <label for="formFile" class="form-label">Identification Document</label>
                <input class="form-control" name = "ID" type="file" id="formFile">

                <p>National ID, Passport or Birth Certificate</p>
                <p class="text-danger">For National ID scan and merge both sides to one and attach.</p>
              </div>

              <div class="mb-3">
                <label for="formFile" class="form-label">KCSE and other academic Certificates:</label>
                <input class="form-control" name = "cert" type="file" id="formFile">
              </div>  
             

              <div class="mb-3">
                <label for="formFile" class="form-label"> Passport Photo:</label>
                <input class="form-control" name = "passport_photo" type="file" id="formFile">
              </div>
              
              <div class="mb-3">
                <label for="formFile" class="form-label"> Application Form:</label>
                <input class="form-control" name = "application_form" type="file" id="formFile">
              </div>


              <h1 class="text-center">Payment Details for the Admission fee </h1>
                <div class="container">
                    <p>Paybill Number: 303072</p>
                </div>
                <div class="container">
                    <p>Account-Number: TRC-ADM-MAR</p>
                </div>
                <div class="conatiner">
                    <p>AMOUNTS:
                        MBA    <strong> KES.2000 </strong> <br>
                        Degree, Diploma, Certificate: <strong> KES.1000</strong>   
                    </p>
                </div>



                <div class="conatiner">
                    <label for="mpesaCodeInput" class="form-label">Mpesa Confirmation Code:</label>
                    <input type="text" class="form-control" id="mpesaCodeInput" aria-describedby="mpesaCodeInputhelp">
                    <br>
                </div>

             
          </div>

          <div class="container mt-lg-3  ">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    I declare the information given herein is true 
                </label>
          </div>



                  <div class="d-grid gap-2">
          <button name="submit" type="submit" class="btn btn-primary">register</button>
          </div>

          
         
              </form>
        </div>
      </div>



      </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>