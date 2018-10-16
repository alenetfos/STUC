<!DOCTYPE html>
<html>

<body style="background-color:midnightblue;">

<head>

    <title>STUC Posao</title>

	<link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div>

<h1 id="naslov">STUC Posao</h1>


</div>
<div class="nav1">

    <ul>
	    
        <li><a href="index.php">POČETNA</a></li>
		<li><a href="recenzije.php">RECENZIJE</a></li>
        <li><a href="poslovi.php">NOVOSTI/POSLOVI</a></li>
        <li><a href="serije.php">STUC</a></li>
        <li><a href="register.php">REGISTRACIJA</a></li>
		<li><?php if(!isset($_SESSION["logiran"])): ?>
      	<a href="login.php">PRIJAVA</a>
      	<?php else: ?>
      	<a href="logout.php">ODJAVA 
      		<?php echo $_SESSION["logiran"]->username; ?></a>
		<?php endif; ?></li>
        <?php
            if(isset($_SESSION['logiran'])) {
        ?>
                <li><a href="">DODAJ RECENZIJU</a></li>
		        <li><a href="">DODAJ TVRTKU</a></li>
            <?php } ?>


    </ul>

</div>

</body>
</html>