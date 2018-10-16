<?php
include_once('navigacija.php');
?>


<html>
<title>Login</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
<body>
  <div class="header">
  	<h2>Prijava</h2>
  </div>
  <?php if(isset($_GET['korisnik']) && !empty($_GET['korisnik'])) { ?> <div class="well abc"><?php echo $_GET['korisnik'] ?> ne postoji ili je pogrešna lozinka</div><?php } ?>
  <form method="post" action="login_action.php">
  	<div class="input-group">
  		<label>Korisničko ime</label>
  		<input type="text" maxlength="10" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Lozinka</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn1" name="login_user">Prijava</button>
  	</div>
  	<p>
  		 <a href="register.php">Nisi registriran?   Registriraj se!</a>
  	</p>
  </form>
  
  <?php

?>

</body>
</html>