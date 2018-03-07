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
  $email = $_POST['email'];

  //ENCRYPT PASSWORD
  $password = md5($password);
  //$password = password_hash($password, PASSWORD_BCRYPT);

  //CHECK IF VALUES ARE OKAY TO PREVENT GETTING HACKED

  //CHECK IF USERNAME IS UNIQUE
  $sql = "SELECT username FROM users WHERE username = '$username'";
  if($result=mysqli_query($conn, $sql)){
    $rowcount=mysqli_num_rows($result);
  }
  if($rowcount >= 1){
    echo "There is already a user with this username, try another.";
  }
  else{
    //INSERT DATA INTO DATABASE
    $sql = "INSERT INTO users (username, password, email)
    VALUES('$username', '$password', '$email')";

    //EXECUTE QUERY
    if($conn->query($sql) === TRUE){
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
    }
    else{
      echo "Error: ".$sql."<br/>".$conn->error;
    }

  }
?>
