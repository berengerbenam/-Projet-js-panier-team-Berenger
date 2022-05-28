<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PROJET-PANIER</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/webfonts/all.css">
</head>
<body>
	<?php include("include/header.php"); ?>

	<div class="container">
		<div class="col-md-12">
			<div class="row show_cart my-5">
				
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript">
	
	$(document).ready(function(){
      
    show_cart();

	function show_cart(){
		$.ajax({
           method: "POST",
           url:"affiche_panier.php",
           success:function(data){
             $(".show_cart").html(data);
           }
		});	
	}

    $(document).on("click",".add",function(){
         var id = $(this).attr("id");
         var name = $("#name"+id+"").val();
         var price = $("#price"+id+"").val();
         var quantity = $("#quantity"+id+"").val();

         $.ajax({
            method:"POST",
            url: "ajout_panier.php",
            data:{id:id,name:name,price:price,quantity:quantity},
            success:function(data){
            	alert("vous avez ajouté un nouvel élément");
            }
         });
    });
	
	});

</script>
</body>
</html>