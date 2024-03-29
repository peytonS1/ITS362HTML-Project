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

if(isset($_POST['MichaelRookie'])){
    $card1 = $db->prepare("SELECT * FROM baseball WHERE cardID = 1");
} else {
    $card1 = $db->prepare("SELECT * FROM baseball WHERE cardID = 1");
}
$card1->execute();
$MichaelRook = $card1->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['ShaqMolten'])){
    $card2 = $db->prepare("SELECT * FROM baseball WHERE cardID = 2");
} else {
    $card2 = $db->prepare("SELECT * FROM baseball WHERE cardID = 2");
}
$card2->execute();
$ShaqMet = $card2->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['StephRookie'])){
    $card3 = $db->prepare("SELECT * FROM baseball WHERE cardID = 3");
} else {
    $card3 = $db->prepare("SELECT * FROM baseball WHERE cardID = 3");
}
$card3->execute();
$StephRook = $card3->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['LebronPrizm'])){
    $card4 = $db->prepare("SELECT * FROM baseball WHERE cardID = 4");
} else {
    $card4 = $db->prepare("SELECT * FROM baseball WHERE cardID = 4");
}
$card4->execute();
$LebronPriz = $card4->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['LarryLegend'])){
    $card5 = $db->prepare("SELECT * FROM baseball WHERE cardID = 5");
} else {
    $card5 = $db->prepare("SELECT * FROM baseball WHERE cardID = 5");
}
$card5->execute();
$LarryLegend = $card5->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Kobe'])){
    $card6 = $db->prepare("SELECT * FROM baseball WHERE cardID = 6");
} else {
    $card6 = $db->prepare("SELECT * FROM baseball WHERE cardID = 6");
}
$card6->execute();
$Kobe = $card6->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Kevin'])){
    $card7 = $db->prepare("SELECT * FROM baseball WHERE cardID = 7");
} else {
    $card7 = $db->prepare("SELECT * FROM baseball WHERE cardID = 7");
}
$card7->execute();
$Kevin = $card7->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Giannis'])){
    $card8 = $db->prepare("SELECT * FROM baseball WHERE cardID = 8");
} else {
    $card8 = $db->prepare("SELECT * FROM baseball WHERE cardID = 8");
}
$card8->execute();
$Giannis = $card8->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Pippen'])){
    $card9 = $db->prepare("SELECT * FROM baseball WHERE cardID = 9");
} else {
    $card9 = $db->prepare("SELECT * FROM baseball WHERE cardID = 9");
}
$card9->execute();
$Pippen = $card9->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Chuck'])){
    $card10 = $db->prepare("SELECT * FROM baseball WHERE cardID = 10");
} else {
    $card10 = $db->prepare("SELECT * FROM baseball WHERE cardID = 10");
}
$card10->execute();
$Chuck = $card10->fetchAll(PDO::FETCH_ASSOC);
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
    <title>BASEBALL</title>

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
            background-color: darkgrey;
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
    </style>
</head>
<body>
    <nav class = "leftCenterP">
        <a href = "Home.php" class = "btn btn-info" role = "button">Home</a>
        <a href = "pokemon.php" class = "btn btn-info" role = "button">Pokemon</a>
        <a href = "yugioh.php" class = "btn btn-info" role = "button">Yu-gi-oh</a>
        <a href = "basketball.php" class = "btn btn-info" role = "button">Basketball</a>
        <a href = "favorites.php" class = "btn btn-info" role = "button">hello</a>
        </nav>
        <table border=2 style="width:50%" class="center">
        <thead>
                <th>Card Art</th>
                <th>Card Name</th>
                <th>Card Set</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php foreach ($MichaelRook as $tcd): ?>
                <tr>
                    <td><img src="https://i.etsystatic.com/19160379/r/il/e2241e/2113700747/il_794xN.2113700747_hwol.jpg" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($ShaqMet as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/R.44aba313e8ef69003d950ca168c7a01e?rik=f0FwWGdE0qXc%2fQ&pid=ImgRaw&r=0" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($StephRook as $tcd): ?>
                <tr>
                    <td><img src="https://i.etsystatic.com/19160379/r/il/20dcc3/2487630194/il_794xN.2487630194_d002.jpg" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($LebronPriz as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.ZCga2gpyqehlpGbQ92KRFAAAAA?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($LarryLegend as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.Dq8F5i3DlQXX7EYSzXH8GAHaMz?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Kobe as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.OrX2W-i0sTaoZm1Grd2DxwHaHa?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Kevin as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.KL4eoy0L4WwL-fZ7A1nJtgHaKc?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Giannis as $tcd): ?>
                <tr>
                    <td><img src="https://i.etsystatic.com/16634843/r/il/38e4c4/2353977264/il_1140xN.2353977264_fdkg.jpg" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Pippen as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.v78Bp0GIFPra8HBzlw6LIwAAAA?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
                    <td><?php echo $tcd['cardName']; ?></td>
                    <td><?php echo $tcd['cardSet']; ?></td>
                    <td><?php echo $tcd['description']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($Chuck as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.4IxIDXVR5wpLSc-KQV9-6wHaNa?pid=ImgDet&rs=1" alt="Cards" width= 200px height= 300px></td>
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
    background-image: url('https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/052014/mlb.png?itok=wlvCELtf')
}
</style>
</html>
