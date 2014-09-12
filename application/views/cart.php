<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia - Carrito</title>
	<link rel="stylesheet" href="<?php     echo base_url();?>css/estilos-carrito.css" type="text/css">
	      <!-- Opcional, fuente  -->
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	</head>
<body>
<div class="wrapper primary">
            <div class="container">
	<div id="wrapper">
			<?php     include("header.php"); ?>
			<div id="content">
					<?php     include("left.php"); ?>
				<div id="right">
					<h1 class="bar">Su Carrito</h1>
                    
                    
                    <?php if($cart_products!='empty'){
                    ?>
                    
                    <?php if($this->uri->segment(2)=='added'){
                    ?>
                    <div id="success"> El producto se ha agregado al carrito</div>
                    <?php
                    }
                    ?>
					
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/front/update_cart">
					<table id="cart">
						<thead>
							<th class="thumb-column">&nbsp;</th>
							<th>Producto</th>
							<th class="qty-column">Cantidad</th>
							<th>Precio</th>
							<th>Total</th>
						</thead>
						<tbody>
                            <?php    
                            $total_price = 0;
						    foreach($cart_products as $product){
							$total_price += $product->item_total_price;
							?>
                            
                            <input type="hidden" name="items[]" value="<?php echo $product->item_id;?>" />
 							<tr>
								<td><img src="<?php echo base_url().$product->item_image;?>" alt="<?php echo $product->item_name;?>" /></td>
								<td><?php echo $product->item_name;?></td>
								<td><input type="text" name="qty[]" value="<?php echo $product->item_quantity;?>"></td>
								<td>$<?php echo number_format($product->item_price);?></td>
								<td>$<?php echo number_format($product->item_total_price);?></td>
							</tr>
                          <?php } ?>  
							
							<tr>
								<td colspan="3" class="hidden"></td>
								<td><strong>Sub Total</strong></td>
								<td>$<?php echo number_format($total_price); ?></td>
							<tr>
							<tr>
								<td colspan="3" class="hidden"></td>
								<td><strong>Impuestos(%0)</strong></td>
                                <!---impuestos valor 0 --->
								<td>$<?php $vat = ($total_price*(0)); echo number_format($vat);?></td>
							<tr>
							<tr>
								<td colspan="3" class="hidden"></td>
								<td><strong>Total</strong></td>
								<td>$<?php     
								    $total_price = $total_price + $vat; 
								    $this->session->set_userdata('total_price',$total_price);
								echo number_format($total_price);?>
                                </td>
							<tr>
						</tbody>
					</table>
					<div id="actions">
						<a href="<?php echo base_url();?>index.php/checkout"><input class="btn finalizar" value="Finalizar"></a>
					 <input class="btn actualizar" type="submit" name="submit" value="Actualizar">
                     <input type="hidden" name="update_action" value="1"  />
					</div>
					</form> 
                    <?php } 
					else echo ' Su carrito se encuentra vacio';?>
				</div>		
				</div>
				</div>
				</div>
				</div>
				<div class="clear"></div>
				<?php include("footer.php"); 
                ?>
			
</body>
</html>