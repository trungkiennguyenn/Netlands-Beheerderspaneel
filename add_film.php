<?php

include_once('connection.php'); 
if (isset($_POST["titel"])) {
    $titel = $_POST["titel"];
    $duur = $_POST["duur"];
    $datum = $_POST["datum"];
    $land = $_POST["land"];
    $omschrijving = $_POST["omschrijving"];
    try {
        $stmt = $conn->query("INSERT INTO films (titel, duur, datum, land, omschrijving) 
        VALUES ('$titel', '$duur', '$datum', '$land', '$omschrijving');");
        echo "records INSERTED successfully";
    } catch (PDOException $e) {
        echo "Inserting records failed" . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
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
                <span class="bar"></span>>
                <span class="bar"></span>
            </div>
        </nav>

</header>

<br><br>
<br><br><br><br>
<br><br><br><br>
<h1 align="center"><div class="btn3"><a href=""><span>Voeg een film toe</a></div></span></h1>
<form method="post" class="maintable" align="center">
        <h1>Title:<input type="text" name="titel" class="paddingedit" value=""></h1>
        <br>
        <table class="table1" align="center">
        <tr>
            <th><div class="btn2"><a href=""><span>Informatie</a></div></span></th>
            <th><div class="btn2"><a href=""><span>Informatie</a></div></span></class></th>
        </tr>

            <tr>
                <td>Duur</td>
                <td><input type="text" name="duur" class="paddingedit" value=""></td>
            </tr>
            <tr>
                <td>Datum van uitkomst</td>
                <td><input type="text" name="datum" class="paddingedit" value=""></td>
            </tr>
            <tr>
                <td>Land</td>
                <td><input type="text" name="land" class="paddingedit" value=""></td>
            </tr>
            <tr>
                <td>Omschrijving</td>
                <td><input type="text" name="omschrijving" class="paddingedit" value=""></td>
            </tr>
        </table>
 <br>
        <input type="submit" value="Toevoegen" class="paddingedit">
    </form>
   
</body>
</html>

