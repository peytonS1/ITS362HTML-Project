<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "tcd";
  
// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

$showAlert = false; 
$showError = false; 
$exists=false;

$email = $_POST['email'];  
$password = $_POST['password'];  
  
    //to prevent from mysqli injection  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($conn, $username);  
    $password = mysqli_real_escape_string($conn, $password);  
  
    $sql = "select *from users where email = '$email' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid email or password.</h1>";  
    }

?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        input[type=button]{
            background-color:lightseagreen;
            margin: 100px 625px;
            
        }
    </style>
</head>
<body>
    <form>
        <input type = "button" value = "Return Home" onclick = "history.back()">
    </form>
</body>