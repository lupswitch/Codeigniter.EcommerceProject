<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/estilos-carrito.css" type="text/css">
	</head>
<body>
	<div id="wrapper">
			<?php //include("header.php"); ?>
			<div id="content" class="checkout">
			
				<?php include("left.php"); ?>
                
				<div id="right">
                                    			<h1 class="bar">Numero de Orden: <?php $this->uri->segment(3);?></h1>
<?php
if($order->order_status=='new')
$color='green';
if($order->order_status=='cancelled')
$color='red';
else
$color='orange';
?>
					<h2>Status: <span style="color:<?php $color;?>"><?php ucwords($order->order_status);?></span></h2>

					<h2>Direccion de envio</h2>
					<p><?php echo $address->address1;?>
					<br /><?php echo $address->city;?><br />
					</p>
					<br />
					<h2>Resumen de Orden</h2>
						<?php
					if($cart_products!='empty')
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
						foreach($cart_products as $product) {	
						$total_price += $product->item_total_price;
						?>
							<tr>
								<td><?php echo $product->item_name;?></td>
								<td><?php echo $product->item_quantity;?></td>
								<td>$<?php number_format($product->item_price);?></td>
								<td>$<?php number_format($product->item_total_price);?></td>
							</tr>
                          <?php } ?>  
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Sub Total</strong></td>
								<td>$<?php number_format($total_price,2);?></td>
							<tr>
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Impuestos (0%)</strong></td>
								<td>$<?php $vat = ($total_price*(0)); echo number_format($vat);?></td>
							<tr>
							<tr>
								<td colspan="2" class="hidden"></td>
								<td><strong>Total</strong></td>
								<td>$<?php number_format($total_price+$vat);?></td>
							<tr>
						</tbody>
					</table>
                    <?php  } ?>
		
				</div>		
				<div class="clear"></div>
				<div id="footer">
			</div>
			</div>
	
	</div>
</body>
</html>