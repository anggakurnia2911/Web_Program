<?php

require_once("config.php");

if(isset($_POST['register'])){

  $name = filter_input (INPUT_POST, 'name',FILTER_SANITIZE_STRING);
  $username = filter_input (INPUT_POST, 'username', FILTER_SANITIZE_STRING);

  //ENGKRIPSI PASS
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  //PREPARE QUERRY
  $sql = "INSERT INTO users (name, username, email, password)
          VALUES (:name, :username, :email, :password)";
  $stmt =$db->prepare($sql);

  $params = array(
    ":name" => $name,
    ":username" => $username,
    ":password" => $password,
    ":email" => $email
    
  );

  //EKSEKUSI QUERY UTK SAVE KE DB
  $saved = $stmt->execute($params);

  //if query berhasil, 
  if($saved) header ("Location: login.php");



}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">Aquascape Lovers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a>
          </div>
        </div>
        </div>
      </nav>

    <div class="container">
        <h3 class="text-center">LOGIN</h3>
        
    <form action="" method="POST">

      <div class ="form-group">
          <label for="name">Nama Lengkap</label>
          <input class="form-control" type="text" name="name" placeholder="Nama Anda" />
      </div>

      <div class ="form-group">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username" placeholder="Username Anda" />
      </div>

      <div class ="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="email" name="email" placeholder="Email Anda" />
      </div>

      <div class ="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" placeholder="Password" />
      </div>

      <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

    </form> 


    <!-- <form class="mt-5">

     

        <div class="row">
        <div class="form-group col-md-5">
          <label for="name" style="color:white">Nama Lengkap</label>
          <input id = "name" type="name" class="form-control"  aria-describedby="emailHelp" placeholder="Name Lengkap" value =""/>
        </div>
        </div>

        <div class="row">
        <div class="form-group col-md-5">
          <label for="username" style="color:white">Username</label>
          <input id = "username" type="name" class="form-control"  aria-describedby="emailHelp" placeholder="Name Lengkap" value =""/>
        </div>
        </div>
    
        <div class="row">
        <div class="form-group col-md-5">
          <label for="exampleInputEmail1" style="color:white">Email address</label>
          <input id = "userEmail" type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" value =""/>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        </div>

        <div class="row">
        <div class="form-group col-md-5">
          <label for="exampleInputPassword1" style="color:white">Password</label>
          <input id = "userPassword" type="password" class="form-control"  placeholder="Password" value =""/>
            </div>
                </div>
        
        <div class="row">
            <div class="form-group col-md-5">
            <label for="exampleInputEmail1" style="color:white">First Name</label>
            <input id = "userFirstname" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="First Name" value =""/>
          </div>
        </div>
        
        
          <!-- <button type="button" onclick="storeData">Click this button</button> -->
          <!-- <input id="registerButton" type="submit" value="Register" onClick="storeData()"/>  -->
          <!-- <button type="button" onclick="storeData()">Submit</button>
        
      </form>
    </div> --> -->
    
    <div class="footer-copyright text-center py-3">
      <div class="p-3 mb-2 bg-dark text-white">
      @Copyrightby 18111017_AnggaKurnia_TIFRP18CIDB
    </div>
  </div>

  <!-- <script type="text/javascript" language="javascript" src="login.js"></script> -->

  
</body>
</html>