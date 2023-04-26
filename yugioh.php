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
    <title>YUGIOH</title>

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
        <a href = "basketball.php" class = "btn btn-info" role = "button">Basketball</a>
        <a href = "baseball.php" class = "btn btn-info" role = "button">Baseball</a>
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
  background-image: url('data:image/png;base64,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');
}
</style>
</html>
