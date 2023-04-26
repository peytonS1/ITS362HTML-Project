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

if(isset($_POST['CharizardVstar'])){
    $card4 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 4");
} else {
    $card4 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 4");
}
$card4->execute();
$CharizardVstar = $card4->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Blastois'])){
    $card5 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 5");
} else {
    $card5 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 5");
}
$card5->execute();
$Blastois = $card5->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Pikachu'])){
    $card6 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 6");
} else {
    $card6 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 6");
}
$card6->execute();
$Pikachu = $card6->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Regi'])){
    $card7 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 7");
} else {
    $card7 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 7");
}
$card7->execute();
$Regi = $card7->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['CharizardVmax'])){
    $card8 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 8");
} else {
    $card8 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 8");
}
$card8->execute();
$CharizardVmax = $card8->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Houndoom_EX'])){
    $card9 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 9");
} else {
    $card9 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 9");
}
$card9->execute();
$Hound = $card9->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['AcreusV'])){
    $card10 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 10");
} else {
    $card10 = $db->prepare("SELECT * FROM pokemon WHERE cardID = 10");
}
$card10->execute();
$Acreus = $card10->fetchAll(PDO::FETCH_ASSOC);
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
        border-spacing: 0px;
        border-collapse: separate;
        border-radius: 10px;
        
        overflow: hidden;
        border-style: hidden;
        margin: 7px;
        
        width: 100%;
        
        
        }

        th {
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;
            border-collapse: separate;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
        }
        th: not(: -last-child){
            border-right: 1px solid black;
        }

        td, tr {
        text-align: center;
        padding: 14px;
        background-color: violet;
        font-style: unset;
        box-shadow: 1px black;
        border-collapse: separate;
        border-radius: 10px;
        border-style: double;
        border-color: black;
        border-width: 1px;
        }

        table tr:first-child th:first-child {
        border-top-left-radius: 6px;
        }

        table tr:first-child th:last-child {
        border-top-right-radius: 6px;
        }

        table tr:last-child td:first-child {
        border-bottom-left-radius: 6px;
        }

        table tr:last-child td:last-child {
        border-bottom-right-radius: 6px;
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
                <th>Card Art</th>
                <th>Card Name</th>
                <th>Card Set</th>
                <th>Description</th>
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
        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($CharizardVstar as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.06mpJMOWI3NgH47PnXUC3AHaKA?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Blastois as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.Gy2B8z2ur3sJNs28FiVkeQHaKL?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Pikachu as $tcd): ?>
                <tr>
                    <td><img src="https://commondatastorage.googleapis.com/images.pricecharting.com/7d8047b359048d435dca437b6a6cbe916b2f333cba57e4a10da3cb75366a8731/240.jpg" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Regi as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.A4_mM-x5ZKvGEN9PhNXSgwHaKc?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($CharizardVmax as $tcd): ?>
                <tr>
                    <td><img src="https://i.etsystatic.com/22047591/r/il/1f88a4/3084740589/il_1588xN.3084740589_44rt.jpg" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Hound as $tcd): ?>
                <tr>
                    <td><img src="https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1080578.jpg" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Acreus as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.qfp2WdM0P0fdRIahtuvaGgHaKX?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
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
