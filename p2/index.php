<!--<?php
 //   error_reporting(-1);
 //   ini_set('display_errors',1);
?>-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>xkcd Password Generator</title>
		
		<?php 
			require('logic.php');
		?>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<link rel="stylesheet" type="text/css" href="css/p2style.css">

	</head>
	<body>
		<div class="container">
			<h1>xkcd Password Generator</h1>
			<div class='row'>
				<form class='form-horizontal' action='index.php' method='post'>
					<div class='form-group'>
						<label class="col-xs-2" for="numberOfWords">Number of Words:</label>
						<div class="col-md-4">
						    <input type="number" id="numberOfWords"  name="numberOfWords" class="form-control" required max="9" min="1" value='<?php echo $number_words; ?>'>
						</div>

					</div>

					<div class="col-xs-12" >
					    <input type="checkbox" id="specialCharacter" name="addSpecialCharacter" <?php echo $addSpecialCharacter ? "CHECKED" : ""; ?> >Special Character
					    
					</div>
					<div class="col-xs-12" >
					    
					    <input type="checkbox" name="addNumber" <?php echo $addNumber ? "CHECKED" : ""; ?>>Add Number
					</div>  

					<br>
					<br>

					<div class="col-xs-12 col-md-6 col-lg-4" >
					    
					    <button type="submit" class="btn btn-primary">Generate Password</button>
					</div> 
				</form>
			</div>
			<br>
			<br>
			<div class='row'>
				<label class="col-xs-2" for="GeneratedPassword">Generated Password:</label>
				<div class="col-md-6 col-xs-12">
				   <input type="text" id='GeneratedPassword' readonly="true" class="form-control"  placeholder="Generated Password" value="<?php echo $password?>">
				</div>			
			</div>

			<br>
			<br>

			<div class='row'>

				<div class="col-xs-12 col-md-8">
					<a href='http://xkcd.com/936/'>xkcd password</a><br>
				    <img class="comic" src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>  
				</div>
			</div>

		</div>


		<!-- Latest compiled and minified JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>