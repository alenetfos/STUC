<?php
include_once 'navigacija.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registracija</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <div class="header">
  	<h2>Registracija</h2>
  </div>

  <form method="post" action="register_action.php">
  	<div class="input-group">
  	  <label>Korisnično ime</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Lozinka</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registriraj se</button>
  	</div>
	
  	<p>
  		<a href="login.php">Več si registriran?     Prijavi se!</a>
  	</p>
  </form>
  <?php

?>
</body>
</html>