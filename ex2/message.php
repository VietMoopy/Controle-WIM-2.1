<?php
	 if(isset($_POST['bouton'])){
     	 extract ( $_POST );
       if($choix == "fr"){
         echo "Comment vas-tu ?";
       }
      else if($choix == "en"){
        echo "How do you do ?";
      }
     else{
       echo htmlentities("¿ Cómo estás ?", ENT_COMPAT, 'UTF-8');
      }
		}
?>