<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.0/css/bootstrap.min.css" rel="stylesheet" />
		<meta charset="UTF-8" />
		<title></title>
	</head>
	<body>
		<div class="container-fluid">
			<form action="score.php" method="post">
				<fieldset>
					<legend>Langue</legend>
					<h5>Choose a language :</h5>
					<label class="radio">
						<input type="radio" name="french"  value="fr" >French
					</label>
					<label class="radio">
						<input type="radio" name="english"  value="en">English
					</label>
					<label class="radio">
						<input type="radio" name="spanish"  value="sp">Spanish
					</label>

					<button class="btn">Envoyer</button>

				</fieldset>
				<input type="hidden" value="3" name="nbq">
			</form>
		</body>
	</html>