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
    <table>
      <tr>
      <th></th>
      <?php
    	$link=mysqli_connect($host, $user, $password, $bdd);
				if(!$link){
					die("<p>connexion impossible</p>");
				}
       $ville =mysqli_query($link, "SELECT * FROM capitale");
       foreach($ville as $res){
       	echo "<th>" . $res['nom']. "</th>";
       }
        foreach($ville as $res){
          $nom = $res['nom'];
        echo "</tr>";
       echo "<td>$nom</td>";
       $distances =mysqli_query($link, "SELECT nom,id2,distance FROM capitale JOIN distance on id1 = id WHERE nom = \"$nom\" ORDER BY id2 ASC"); 
       foreach($distances as $distance){
       	echo "<td>" . $distance['distance']. "</td>";
       }
        }
    ?>
</body>

</html>