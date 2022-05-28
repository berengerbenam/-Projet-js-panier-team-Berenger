<?php 
  session_start();

  if (isset($_POST['action'])) {
  	  if ($_POST['action'] == "vider") {
  	  	    unset($_SESSION['cart']);
  	  }

  	  if ($_POST['action'] == "supprimer") {
  	  	  
  	  	  foreach ($_SESSION['cart'] as $key => $value) {
  	  	  	  if ($value['id'] == $_POST['id']) {
  	  	  	  	unset($_SESSION['cart'][$key]);
  	  	  	  }
  	  	  }
  	  }
  }

 ?>