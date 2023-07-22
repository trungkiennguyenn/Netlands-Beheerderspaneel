<?php
include_once('connection.php'); 
$id = $_GET['id'] ?? $_POST['id'];
if (!isset($_GET['id'])) {
    $id2 = $_POST['id'] - 1;
} else {
    $id2 = $_GET['id'] - 1;
}

if (isset($_POST["id"])) {
    $title = $_POST["title"];
    $rating = $_POST["rating"];
    $description = $_POST["description"];
    $has_won_awards = $_POST["has_won_awards"];
    $seasons = $_POST["seasons"];
    $country = $_POST["country"];
    $language = $_POST["language"];
    try {
        $sql = "UPDATE series SET
        title='$title',
        rating='$rating',
        description='$description',
        has_won_awards='$has_won_awards',
        seasons='$seasons',
        country='$country',
        language='$language'
        WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo "records UPDATED successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    <title>Beheerderspaneel | Wijzigingsmenu - Series</title>
</head>
<body>

<header class="header">
   
   <nav class="navbar">

       <img src="Netland.png" class="image1">

   <nav>

   <ul class="menu">

   <li><button class="home"><a href="index.php"><span>Home</a></span></button></li>

    <li>Series
      <ul class="sub-menu">

      <li><a href="seriedetails.php">Details</a></li>
    <li><a href="seriewijzig.php">Wijzigen</a></li>
    <li><a href="serievoeg.php">Toevoegen</a></li>
      </ul>
    </li>
     
    
    
    <li>Films

      <ul class="sub-menu">
      <li><a href="filmdetails.php">Details</a></li>
    <li><a href="filmwijzig.php">Wijzigen</a></li>
    <li><a href="filmvoeg.php">Toevoegen</a></li>

      </ul>
    </li>
  </ul>

</nav>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
         </nav>

</header>

    <?php
    $showsTable = $conn->query('SELECT * FROM series')->fetchAll();
    ?>
    <br><br>
     <br><br><br><br>
     <br><br><br><br>
     <h1 align="center"><div class="btn3"><a href=""><span>Wijzigingsmenu voor series</a></div></span></h1>
    <form action="edit_serie.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
        <input type="hidden" name="id" value="<?= $id ?>">
        <h2>Title:<input type="text" name="title" class="paddingedit" value="<?= $showsTable[$id]['title'] ?>"></h2>

        <br>
        
        <table class="table1">

        <tr>
             <th><div class="btn2"><a href=""><span>Informatie</a></div></span></th>
            <th><div class="btn2"><a href=""><span>Informatie</a></div></span></class></th>
        </tr>

            <tr>
                <td>Awards</td>
                <td><input type="number" name="has_won_awards" class="paddingedit" value="<?= $showsTable[$id]['has_won_awards'] ?>"></td>
            </tr>

            <tr>
                <td>Seasons</td>
                <td><input type="number" name="seasons" class="paddingedit" value="<?= $showsTable[$id]['seasons'] ?>"></td>
            </tr>

            <tr>
                <td>Country</td>
                <td><input type="text" name="country" class="paddingedit" value="<?= $showsTable[$id]['country'] ?>"></td>
            </tr>

            <tr>
                <td>Language</td>
                <td><input type="text" name="language" class="paddingedit" value="<?= $showsTable[$id]['language'] ?>"></td>
            </tr>

            <tr>
                <td>Rating</td>
                <td><input type="text" name="rating" class="paddingedit" value="<?= $showsTable[$id]['rating'] ?>"></td>
            </tr>
            </table>

        <h2><div class="btn3"><a href=""><span>Beschrijving</a></div></span></h2>
        <input type="text" name="description" class="paddingedit" value="<?= $showsTable[$id]['description'] ?>">
        <br>
        <input type="submit" value="Wijzigen" class="paddingedit" >

    </form>
    
    <br><br><br><br><br><br>

<footer>
<div class="footer">
<div class="row">
<a href="https://www.facebook.com/netlandschool/"><i class="fa fa-facebook"></i></a>
<a href="https://www.instagram.com/netlandschool/"><i class="fa fa-instagram"></i></a>
<a href="https://www.youtube.com/@NetlandSchoolAntofagasta"><i class="fa fa-youtube"></i></a>
<a href="https://twitter.com/netland_school"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="">Neem contact op</a></li>
<li><a href="">Onze Service</a></li>
<li><a href="">PrivacyBeleid</a></li>
<li><a href="">Algemene voorwaarden</a></li>
</ul>
</div>

<div class="row">
NETLAND Copyright © 2023 Netland - All rights reserved || Designed By: Trung-Kien
</div>
</div>
</footer>

</body>
</html>

