<?php
//Set database account details
$host = 'localhost';
$dbname = 'tcd';
$username = 'root';
$password = '';

//Connect to database using PDO
try{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="HomeCSS.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .video {
        position: absolute;
        left: 49%;
        top: 85%;
        margin-left: -230px; 
        margin-top: -100px; 
  }
    </style>
</head>
<body style = background-color:rgb(255,196,206)>
    <h2 class="centerTop">Trading Card Direct</h2>
    <nav class = "leftCenter">
        <a href = "pokemon.php" class = "btn btn-info" role = "button">Pokemon</a>
        <a href = "yugioh.php" class = "btn btn-info" role = "button">Yu-gi-oh</a>
        <a href = "baseball.php" class = "btn btn-info" role = "button">Baseball</a>
        <a href = "basketball.php" class = "btn btn-info" role = "button">Basketball</a>
        <a href = "favorites.php" class = "btn btn-info" role = "button">Favorites</a>
    </nav> 
    <img class="imageLogo" src="https://4.bp.blogspot.com/-QnPOHKoDe9k/UdWkrtlkudI/AAAAAAAAAao/NoTiFsvD1bA/s660/Trading+Pile.jpg" alt="Cards" >

    <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/fDnaAPokysg" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    <form method="POST" action="SignUp.php">
        <button name="subject" type="submit">Sign Up Here</button>
    </form>

</body>
</html>
