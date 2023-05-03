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

if(isset($_POST['Malachi'])){
    $card1 = $db->prepare("SELECT * FROM yugioh WHERE cardID = 1");
} else {
    $card1 = $db->prepare("SELECT * FROM yugioh WHERE cardID = 1");
}
$card1->execute();
$Malachi = $card1->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Peyton'])){
    $card1 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 1");
} else {
    $card1 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 1");
}
$card1->execute();
$Peyton = $card1->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="HomeCSS.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>OWNER FAVORITES</title>

    <style>
        table {
        border-spacing: 0px;
        border-collapse: separate;
        border-style: hidden;
        margin: 7px;
        width: 100%;
        }

        th {
            text-align: center;
            background-color: darkgrey ;
            border-radius: 10px;
            border-collapse: separate;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
        }
        th: not(: -last-child){
            border-right: 1px solid black;
        }

        td {
        text-align: left;
        padding: 8px;
        background-color: lightgoldenrodyellow;
        }

        table.center {
        margin-left: auto; 
        margin-right: auto;
        }

        .leftCenterP{
            text-align: center;
            background-color: lightblue;
            border: 2px solid black;
            padding: 5px;
            margin-left: 25%; 
            margin-right: 25%;
            border-radius: 10px;
        }
        .leftCenterP a{
            color: black;
            padding: 4px;
            text-decoration: none;
        }
        
        .leftCenterP a:hover{
            background-color:violet;
            color: rgba(11, 114, 139, 0.425);
        }

        thead {color: blue;}
        h2 {color: aqua;}
    </style>
</head>
<body>
<h2><center>Owner Personal Favorites</center></h2>
    <nav class = "leftCenterP">
        <a href = "Home.php" class = "btn btn-info" role = "button">Home</a>
        <a href = "pokemon.php" class = "btn btn-info" role = "button">Pokemon</a>
        <a href = "yugioh.php" class = "btn btn-info" role = "button">Yu-gi-oh</a>
        <a href = "baseball.php" class = "btn btn-info" role = "button">Baseball</a>
        <a href = "basketball.php" class = "btn btn-info" role = "button">Basketball</a>
    </nav> 
    <table border=2 style="width:50%" class="center">
            <thead>
                <th>Malachi Lara</th>
                <th>Card Name</th>
                <th>Card Set</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php foreach ($Malachi as $tcd): ?>
                <tr>
                    <td><img src="https://i.pinimg.com/736x/a9/09/e1/a909e1bcdd38044982c9e2614407f8f1--blue-eyes-yu-gi-oh.jpg" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <thead>
                <th>Peyton Syrovatka</th>
                <th>Card Name</th>
                <th>Card Set</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php foreach ($Peyton as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/R.6c7f5da03464a8bf6c05fdbde80d35d8?rik=J9tMiCMxpQSLOQ&pid=ImgRaw&r=0" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

</body>
<style> 
body {
  background-image: url('https://th.bing.com/th/id/OIP.Dxpr37Kb2Mtpxv2FP-kjJwHaEK?pid=ImgDet&rs=1');
}
</style>
</html>
