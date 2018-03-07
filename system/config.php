<?php
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
  else{
    //echo "Connected Successfully.";
    //IF CONNECTION IS GOOD, GET DATA FROM DATABASE
    $query = "SELECT maintenance FROM configuration";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    //TECHNICAL SETTINGS
    $maintenance = $row['maintenance'];
  }
  //GENERAL SETTINGS
  $title = "The Pokemon Kyanite RPG";
?>
