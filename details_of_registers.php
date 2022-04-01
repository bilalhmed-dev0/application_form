
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
    <li class="nav-item">
                    <a class="nav-link" href="index.php">log out</a>
                  </li>
    </nav>

    <div class="container">

    <h1 class="text-center mt-3">
         REGISTERED STUDENTS
      </h1>
    <table class="table mb-3">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">names</th>
      <th scope="col">phone number</th>
      <th scope="col">email</th>
      <th scope="col">Next of kin`s Name</th>
      <th scope="col">Next of kin`s  phone number</th>
      <th scope="col">intake</th>
      <th scope="col">Mode Of Study</th>
      <th scope="col">Programme</th>
      <th scope="col">Campus Of Study</th>
    </tr>
  </thead>
  <tbody> 
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "eunice_database"),
            "SELECT * FROM applicants_details ORDER BY names ASC");

        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr>
            <td>{$row['names']}</td>
            <td>{$row['phone_number']}</td>
            <td>{$row['email']}</td>
            <td>{$row['kins_name']}</td>
            <td>{$row['nextOf_kin_s_number']}</td>
            <td>{$row['intake']}</td>
            <td>{$row['study_time']}</td>
            <td>{$row['course']}</td>
            <td>{$row['campus']}</td>  
                   <td>
                   
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>
    </div>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>














