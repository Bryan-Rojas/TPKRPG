<?php
  session_start();
  //DATABSE CONNECTION
  $dbserver = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $db = "tpkrpg";

  //ESTABLISH CONNECTION
  $conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);

  //CHECK CONNECTION
  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
  }

  //ASSIGN VARIABLES FROM FORM
  $username = $_POST['username'];
  $password = $_POST['password'];

  //ENCRYPT PASSWORD
  $password = md5($password);
  //$password = password_hash($password, PASSWORD_BCRYPT);

  //CHECK IF VALUES ARE OKAY TO PREVENT GETTING HACKED

  //CHECK IF USERNAME IS UNIQUE
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  if($result=mysqli_query($conn, $sql)){
    $rowcount=mysqli_num_rows($result);
  }
  if($rowcount == 1){
    //echo "The details are correct.";
    header("Location: ../../index.php");
    
    //$_SESSION['loggedin'] = "Welcome to The Pokemon Kyanite RPG ".$username."! :)";
    $_SESSION['loggedin'] = $username;
  }
  else{
    echo "The details you entered are not found in the database.";
  }


?>
