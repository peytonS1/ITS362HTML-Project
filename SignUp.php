<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "tcd";
  
// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {  
    
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $rpassword = $_POST["rpassword"];
            
    
    $sql = "Select * from users where email='$email'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the email is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $rpassword) && $exists==false) {
    
            $hash = password_hash($password, PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` ( `email`, 
                `password`, `date`) VALUES ('$email', 
                '$hash', current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="email not available"; 
   } 
    
}//end if   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="SignUp.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <?php
        
        if($showAlert) {
        
            echo ' <div class="alert alert-success 
                alert-dismissible fade show" role="alert">
        
                <strong>Success!</strong> Your account is 
                now created and you can login. 
                <button type="button" class="close"
                    data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">×</span> 
                </button> 
            </div> '; 
        }
        
        if($showError) {
        
            echo ' <div class="alert alert-danger 
                alert-dismissible fade show" role="alert"> 
            <strong>Error!</strong> '. $showError.'
        
        <button type="button" class="close" 
                data-dismiss="alert aria-label="Close">
                <span aria-hidden="true">×</span> 
        </button> 
        </div> '; 
    }
            
    
    ?>

    <form style="border:1px solid #ccc" action="signup.php" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="rpassword"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpassword" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
      <a href = "Home.php" class = "btn btn-info" role = "button">Home</a>
    </div>
  </div>
</form>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        }

        hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        }

        button:hover {
        opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
        }

        /* Add padding to container elements */
        .container {
        padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
        content: "";
        clear: both;
        display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
        }
    </style>
</body>
</html>