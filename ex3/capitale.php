<?php include('parametres.php.inc');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.0/css/bootstrap.min.css" rel="stylesheet" />
  <meta charset="UTF-8" />
  <title></title>
</head>
<body>
  <div class="container-fluid">
    <form action="capitale.php" method="post">
      <fieldset>
        <legend>Capitales Européennes</legend>
        <h5>Choississez une ville :</h5>
        <select name='villeS'>
    <?php
    	$link=mysqli_connect($host, $user, $password, $bdd);
				if(!$link){
					die("<p>connexion impossible</p>");
				}
    	$ville =mysqli_query($link, "SELECT * FROM capitale");
               foreach($ville as $res){
       	echo "<option>" . $res['nom'];
               }
			?>
          </option>
        </select>
        <button class="btn">Envoyer</button>
      </fieldset>
      <input type="hidden" value="3" name="bouton">
    <?php
    	 if(isset($_POST['bouton'])){
     	 extract ($_POST);
       $resRequeteVille = mysqli_query($link, "SELECT * FROM capitale WHERE nom = \"$villeS\"");
       $resLigneVille = $resRequeteVille->fetch_assoc();
       $id = $resLigneVille['id'];
      $query = "SELECT id2,distance FROM distance WHERE id1 = $id AND distance != 0 ORDER BY distance ASC;"; 
      $result = mysqli_query($link,$query);
      $row = $result->fetch_assoc();
      $distanceMin = $row['distance'];
      $id2 = $row['id2'];
      $resRequeteVilleProche = mysqli_query($link, "SELECT * FROM capitale WHERE id = \"$id2\"");
      $resLigneVilleProche = $resRequeteVilleProche->fetch_assoc();
      $villeProche = $resLigneVilleProche['nom'];
      $query = "SELECT id2, distance FROM distance WHERE id1 = $id AND distance != 0 ORDER BY distance DESC;"; 
      $result = mysqli_query($link,$query);
      $row = $result->fetch_assoc();
      $distanceMax = $row['distance'];
      $id2 = $row['id2'];
      $resRequeteVilleEloignee = mysqli_query($link, "SELECT * FROM capitale WHERE id = \"$id2\"");
      $resLigneVilleEloignee = $resRequeteVilleEloignee->fetch_assoc();
      $villeEloignee = $resLigneVilleEloignee['nom'];
       echo "<legend>".$resLigneVille['nom']."</legend>";
       echo "<img src='".$resLigneVille['image']."'><br>";
       echo "Capitale la plus proche : $villeProche $distanceMin <br>";
       echo "Capitale la plus eloignée : $villeEloignee $distanceMax ";
		}
    ?>
    </form>
</body>

</html>