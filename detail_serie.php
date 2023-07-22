<html lang="en">
  
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  
   
<title>Netland Beheerderspaneel</title>
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
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
         </nav>

</header>

    <div class="container">
    <br><br>
    <br><br><br><br>
        <div class="row">
          
           
            <table class="table table-hover" align="center" border="solid black 2px" width="300px" height="100px">
                <thead>
                <tbody align="center">
                    <br><br><br>
                    <?php
                        $username = "bit_academy";
                        include_once('connection.php');
                        $a = 1;
                        $stmt = $conn->prepare("SELECT * FROM series WHERE id=" . $_GET['id']);
                        $stmt->execute();
                        $series = $stmt->fetchAll();
                    foreach ($series as $serie) { ?>

                    <div class="btn4">
                            <h1 align="center"><?php echo $serie['title']; ?> </h1>
                        </div>
                        
                            <br><br><br><br>

                        <tr>
                            <th><div class="btn2"><a href=""><span>Informatie</a></div></span></th>
                            <th><div class="btn2"><a href=""><span>Informatie</a></div></span></class></th>
                        </tr>

                    <tr>
                        <th>Awards</th>
                        <th> 
                        <p align="center"> <?php echo $serie['has_won_awards']; ?> </p>
                    </th>
                     </tr>

                    <tr>
                        <th>Seasons</th>
                        <th> <p align="center"> <?php echo $serie['seasons']; ?> </p> </th>
                    </tr>

                    <tr>
                        <th>Country</th>
                        <th> <p align="center"> <?php echo $serie['country']; ?> </p></th>
                    </tr>

                    <tr>
                        <th>Language</th>
                        <th> <p align="center"> <?php echo $serie['language']; ?> </p></th>
                    </tr>

                    <tr>
                        <th>Rating</th>
                        <th>  <p align="center"> <?php echo $serie['rating']; ?> </p></th>
                    </tr>

                </thead>
  
                <tbody align="center">
                </tbody>
                        </table>
                        
                        <br><br>
                         <h2 align="center">Beschrijving<h2>
                        <br><br>
                        <p align="center" id="yellow"><br><?php echo $serie['description'] ?> </p><br>
                    <?php } ?>

                <br><br><br>
 
   

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

