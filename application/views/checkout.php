<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia - Confirmación</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/estilos-carrito.css" type="text/css">
	      <!-- Opcional, fuente  -->
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	</head>
<body>
<div class="wrapper primary">
            <div class="container">
	<div id="wrapper">
			<?php include("header.php"); ?>
			<div id="content">
				<?php include("left.php"); ?>
				<div id="right">
					<h1 class="bar">Checkout</h1>
                    <?php if(validation_errors()){ ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
					<form action="<?php echo base_url();?>index.php/front/order_step2" method="post" enctype="multipart/form-data" id="admin">
						<h2>Domicilio</h2>

						<p>
							<label>Domicilio:</label>
							<input name="address1" type="text" id="address1" value="<?php set_value('address1');?>"> 
						</p>
						<p>
							<label>Barrio/Ciudad:</label>
							<input name="city" type="text" id="city" value="<?php set_value('city');?>"> 
						</p>
					<br />
					<h2>Detalles de Compra</h2>
                    <?php
					if($products!='empty')
					{
					?>
					<table id="cart">
						<thead>
							<th>Producto</th>
							<th class="qty-column">Cantidad</th>
							<th>Precio</th>
							<th>Total</th>
						</thead>
						<tbody>
                        <?php 
						$total_price	=	0;
						foreach($products as $product) {	
						$total_price += $product->item_total_price;
						?>
							<tr>
								<td><?php echo $product->item_name;?></td>
								<td><?php echo $product->item_quantity;?></td>
								<td>$<?php echo number_format($product->item_price);?></td>
								<td>$<?php echo number_format($product->item_total_price);?></td>
							</tr>
                          <?php } ?>  
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Sub Total</strong></td>
								<td>$<?php echo number_format($total_price);?></td>
							<tr>
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Impuestos (0%)</strong></td>
								<td>$<?php $vat = ($total_price*(0)); echo number_format($vat);?></td>
							<tr>
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Total</strong></td>
								<td>$<?php echo number_format(($total_price+$vat));?></td>
							<tr>
						</tbody>
					</table>
                    <?php } 
					else header("Location:".base_url()); ?>
					<input name="vat" type="hidden" id="vat" value="<?php $vat;?>" />
                    <input name="sub_total" type="hidden" id="sub_total" value="<?php $total_price;?>" />
                    <input name="total_price" type="hidden" id="total_price" value="<?php $total_price+$vat;?>" />
                    <input name="checkout_action" type="hidden" id="checkout_action" value="true" />
<br />
					<input class="btn finalizar" type="submit" value="Finalizar">
					</form>
				</div>		
				</div>
				</div>
				</div>
				</div>
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			
	
	</div>
</body>
</html>