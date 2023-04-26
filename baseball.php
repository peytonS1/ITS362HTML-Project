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
    $card1 = $db->prepare("SELECT * FROM basketball WHERE cardID = 1");
} else {
    $card1 = $db->prepare("SELECT * FROM basketball WHERE cardID = 1");
}
$card1->execute();
$MichaelRook = $card1->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['ShaqMolten'])){
    $card2 = $db->prepare("SELECT * FROM basketball WHERE cardID = 2");
} else {
    $card2 = $db->prepare("SELECT * FROM basketball WHERE cardID = 2");
}
$card2->execute();
$ShaqMet = $card2->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['StephRookie'])){
    $card3 = $db->prepare("SELECT * FROM basketball WHERE cardID = 3");
} else {
    $card3 = $db->prepare("SELECT * FROM basketball WHERE cardID = 3");
}
$card3->execute();
$StephRook = $card3->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['LebronPrizm'])){
    $card4 = $db->prepare("SELECT * FROM basketball WHERE cardID = 4");
} else {
    $card4 = $db->prepare("SELECT * FROM basketball WHERE cardID = 4");
}
$card4->execute();
$LebronPriz = $card4->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['LarryLegend'])){
    $card5 = $db->prepare("SELECT * FROM basketball WHERE cardID = 5");
} else {
    $card5 = $db->prepare("SELECT * FROM basketball WHERE cardID = 5");
}
$card5->execute();
$LarryLegend = $card5->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Kobe'])){
    $card6 = $db->prepare("SELECT * FROM basketball WHERE cardID = 6");
} else {
    $card6 = $db->prepare("SELECT * FROM basketball WHERE cardID = 6");
}
$card6->execute();
$Kobe = $card6->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Kevin'])){
    $card7 = $db->prepare("SELECT * FROM basketball WHERE cardID = 7");
} else {
    $card7 = $db->prepare("SELECT * FROM basketball WHERE cardID = 7");
}
$card7->execute();
$Kevin = $card7->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Giannis'])){
    $card8 = $db->prepare("SELECT * FROM basketball WHERE cardID = 8");
} else {
    $card8 = $db->prepare("SELECT * FROM basketball WHERE cardID = 8");
}
$card8->execute();
$Giannis = $card8->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Pippen'])){
    $card9 = $db->prepare("SELECT * FROM basketball WHERE cardID = 9");
} else {
    $card9 = $db->prepare("SELECT * FROM basketball WHERE cardID = 9");
}
$card9->execute();
$Pippen = $card9->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['Chuck'])){
    $card10 = $db->prepare("SELECT * FROM basketball WHERE cardID = 10");
} else {
    $card10 = $db->prepare("SELECT * FROM basketball WHERE cardID = 10");
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
        <a href = "favorites.php" class = "btn btn-info" role = "button">Favorites</a>
        </nav>
        <table border=2 style="width:50%" class="center">
            <tbody>
                <?php foreach ($MichaelRook as $tcd): ?>
                <tr>
                    <td><img src="https://th.bing.com/th/id/OIP.5d5z61YPGvVt4LRICyoC5wHaKa?w=197&h=278&c=7&r=0&o=5&pid=1.7" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://vintagecardprices.com/pics/5556/675824.jpg" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://th.bing.com/th/id/R.b44fd3475c8d48e275b45e9daf8aa9a9?rik=LhzMVHxvOCikgw&pid=ImgRaw&r=0" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://th.bing.com/th/id/OIP.dpikh_gke92iBgCSUboIngHaKb?w=186&h=262&c=7&r=0&o=5&pid=1.7" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://img.beckett.com/images/items_stock/185226/8975304/8975330/front.jpg" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://i.ebayimg.com/images/g/Yo8AAOSwUN1gGdl8/s-l1600.jpg" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://i.ebayimg.com/images/g/iZAAAOSwqv9gYOQm/s-l1600.jpg" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://th.bing.com/th/id/OIP.VXdJeIl-Teh7lTj03obDZgHaKW?w=193&h=270&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://i.ebayimg.com/images/g/zpsAAOSwryBgOxtt/s-l400.jpg" alt="Cards" width= 200px height= 300px></td>
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
                    <td><img src="https://i.pinimg.com/originals/8a/1b/28/8a1b2849576953d00024720a8beb60d2.gif" alt="Cards" width= 200px height= 300px></td>
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
