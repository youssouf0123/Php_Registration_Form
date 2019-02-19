<!DOCTYPE html>
<html>
<head>
	<title>FormPhp</title>
	 <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
</head>
<body>
  <div class="w3-card w3-margin w3-padding">
    <?php if(isset($_GET["error"])): ?>
      <div class="w3-panel w3-red">
        <p><?php echo $_GET["error"];?></p>
      </div>
    <?php endif; ?>
  	<h2>Register</h2>
  	<form method="POST" action="register.php" class="w3-container">
  		<label class="w3-label w3-text-blue">First Name</label>
  		<input class="w3-input w3-border" type="text" name="first_name"> <br>
  		<label class="w3-label w3-text-blue">Lass Name</label>
  		<input class="w3-input w3-border" type="text" name="last_name"> <br>
  		<label class="w3-label w3-text-blue">Email</label>
  		<input class="w3-input w3-border" type="text" name="email"> <br>
  		<select name="location" class="w3-input w3-border">
  			<option value="Location1">Location1</option>
  			<option value="Location2">Location2</option>
  			<option value="Location3">Location3</option>
  			<option value="Location4">Location4</option>
  		</select> <br>
  		<input type="submit" value="Submit">
  	</form>
  </div>
</body>
</html>