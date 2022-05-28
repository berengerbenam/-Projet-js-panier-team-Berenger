<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PANIER</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<?php include("include/header.php"); ?>

	<div class="container">
		<div class="col-md-12">
			<table class="table table-bordered my-5">
				<tr>
					<th>IDENTIFIANT</th>
					<th>NOM</th>
					<th>PRIX</th>
					<th>QUANTITE</th>
					<th>ACTION</th>
				</tr>

				<?php 

				$total_price = 0;

				if (!empty($_SESSION['cart'])) {
					
					foreach ($_SESSION['cart'] as $key => $value) { ?>
						<tr>
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['price']; ?></td>
							<td><?php echo $value['quantity']; ?></td>
                             <td>
                             	<button class="btn btn-danger remove" id="<?php echo $value['id']; ?>" >SUPPRESSION</button>
                             </td>
						</tr>

						  <?php $total_price = $total_price + $value['quantity'] * $value['price']; ?>

						
						
					<?php }
				}else{ ?>
                       <tr>
                       	  <td class="text-center" colspan="5">AUCUN ARTICLE SÉLECTIONNÉ</td>
                       </tr>
				<?php }

				 ?>

				 <tr>
						<td colspan="2"></td>
						<td>Prix Total</td>
						<td><?php echo number_format($total_price,2); ?>&nbsp FCFA</td>
						<td>
                            <button class="btn btn-warning clearall">VIDER LE PANIER</button>
                        </td>
				</tr>
			</table>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$(".remove").click(function(){
           var id = $(this).attr("id");
                
                var action = "supprimer";

             $.ajax({
               method:"POST",
               url:"action.php",
               data:{action:action,id:id},
               success:function(data){
                  confirm("Etes-vous sur de vouloir Supprimer  cet élément ? "+id+"");
                  location.reload();
               }
            });
		});
        

        $(".clearall").click(function(){
              
              var action = "vider";

            $.ajax({
               method:"POST",
               url:"action.php",
               data:{action:action},
               success:function(data){
                  confirm("Etes-vous sur de vouloir vider votre panier ?");
                  location.reload();
               }
            });
        });
	});
</script>
</body>
</html>