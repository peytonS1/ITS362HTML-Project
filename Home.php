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
        left: 46.25%;
        top: 85%;
        margin-left: -230px; 
        margin-top: -50px; 
  }

    #frm{
        font: bold;
    }

    .centerTop{
        font-size: 50px;
        left: 41%;
    }

    .leftCenter{
        margin-top: 60px;
        left: 36%;
    }

    .imageLogo{
        margin-top: -30px;
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

   <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/-4iFy6AvJnw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
     <div id = "frm">
        <h1>Login</h1>
        <form name="f1" action = "login.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Email: </label>  
                <input type = "text" id ="email" name  = "email" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
    
    <form method="POST" action="SignUp.php">
        <button name="subject" type="submit">Sign Up Here</button>
    </form>

</body>
</html>
