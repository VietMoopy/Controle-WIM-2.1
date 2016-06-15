<?php

	 if(isset($_POST['bouton'])){
     	 extract ( $_POST );
     setcookie("language",$choix,time()+$int);
       if($choix == $_COOKIE["language"]){
         echo "Comment vas-tu ?";
       }
      else if($choix == $_COOKIE["language"]){
        echo "How do you do ?";
      }
     else{
       echo htmlentities("¿ Cómo estás ?", ENT_COMPAT, 'UTF-8');
      }
		}
?>