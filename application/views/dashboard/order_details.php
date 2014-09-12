<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/estilos-carrito.css" type="text/css">
	      <!-- Opcional, fuente  -->
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	</head>
<body>
<div class="wrapper primary">
            <div class="container">
	<div id="wrapper">
			<?php $this->load->view("header"); ?>
	  <div id="content" class="checkout">
			 
			  <div id="left">
			    <h1 class="bar">Panel de Cliente</h1>
			    <ul id="cats">
			      <li><a href="<?php echo base_url();?>index.php/user">Mis Ordenes</a></li>
			      <li><a href="<?php echo base_url();?>index.php/user/account">Actualizar mis datos</a></li>
		        </ul>
	    </div>
			  <div id="right">
					<h1 class="bar">Order No: <?php $this->uri->segment(3);?></h1>
					<?php
					if($order->order_status=='new')
					$color='green';
					if($order->order_status=='cancelled	')
					$color='red';
					else
					$color='orange';
		
					
					?>
					<h2>Status: <span style="color:<?php echo $color;?>"><?php echo ucwords($order->order_status);?></span></h2>

					<h2>Direccion de envio</h2>
					<p><?php echo $address->address1;?><br /><?php echo $address->city;?><br /></p>
					<br />
					<h2>Detalles de Orden</h2>
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
								<td>$<?php echo number_format($total_price+$vat);?></td>
							<tr>
						</tbody>
					</table>
                    <?php  } ?>
				</div>
			
	  </div>
	</div>
	</div>
	</div>

	  <div class="clear"></div>
			  <?php include("footer.php"); ?>
</body>
</html>