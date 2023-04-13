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

if(isset($_POST['Mewtwo'])){
    $card1 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 1");
} else {
    $card1 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 1");
}
$card1->execute();
$Mewtwo = $card1->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['Gardevoir_EX'])){
    $card2 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 2");
} else {
    $card2 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 2");
}
$card2->execute();
$Gardevoir = $card2->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['Gyarados_EX'])){
    $card3 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 3");
} else {
    $card3 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 3");
}
$card3->execute();
$Gyarados = $card3->fetchAll(PDO::FETCH_ASSOC);

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
    <title>POKEMON</title>

    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        text-align: left;
        padding: 8px;
        background-color: #D6EEEE;
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
            margin-left: auto; 
            margin-right: auto;
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
    </style>
</head>
<body>
    <nav class = "leftCenterP">
        <a href = "Home.php" class = "btn btn-info" role = "button">Home</a>
        <a href = "yugioh.php" class = "btn btn-info" role = "button">Yu-gi-oh</a>
        <a href = "baseball.php" class = "btn btn-info" role = "button">Baseball</a>
        <a href = "basketball.php" class = "btn btn-info" role = "button">Basketball</a>
        <a href = "favorites.php" class = "btn btn-info" role = "button">Favorites</a>
    </nav>
        <table border=2 style="width:50%" class="center">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Card Name</th>
                    <th>Card Set</th>
                    <th style="width:40%">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Mewtwo as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/R.6c7f5da03464a8bf6c05fdbde80d35d8?rik=J9tMiCMxpQSLOQ&pid=ImgRaw&r=0" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Card Name</th>
                    <th>Card Set</th>
                    <th style="width:40%">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Gardevoir as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.jNtAjA3T_H4Izxpqt1DC5AAAAA?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Card Name</th>
                    <th>Card Set</th>
                    <th style="width:40%">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Gyarados as $tcd): ?>
                <tr>
                    <td><img src="https://assets.pokemon.com/assets/cms2/img/cards/web/SV01/SV01_EN_45.png" alt="Cards" width= 200px height= 300px></td>
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
  background-image: url('https://th.bing.com/th?id=OIP.Vw_KuEL919GZpSbyoeXw9gHaEK&w=333&h=187&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2');
}
</style>
</html>
