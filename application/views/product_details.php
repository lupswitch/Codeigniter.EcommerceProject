<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia - Detalles de producto - <?php echo $product->item_name;?></title>
	<link rel="stylesheet" href="<?php	echo base_url();?>css/estilos-carrito.css" type="text/css">
	      <!-- Opcional, fuente  -->
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	</head>
<body>
<div class="wrapper primary">
            <div class="container">
	<div id="wrapper">
			<?php	include("header.php"); ?>
			<div id="content">
					<?php include("left.php"); ?>
				<div id="right">
					<div id="product-left">
						<img src="<?php echo base_url().$product->big_image;?>" alt="" />
					</div>
					<div id="product-right">
						<h1><?php echo $product->item_name;?></h1>
						<p><span class="large">$<?php echo number_format($product->item_price);?></span>por unidad</p><br />
						<?php     if($product->item_stock>0)
						{
							?>
                        <p><strong>Stock Remanente:</strong> <?php echo $product->item_stock;?>Unidades</strong>
						<br /><br />
                        <?php     } 
						else
						{
							?>
						<div id="errors">
							<ul>
								<li>Sin Stock</li>
							</ul>
						</div>
                        <?php     } ?>
						<div id="description">
							<p><?php echo $product->item_desc;?></p>
						</div>
						<div id="actions">
							<a href="<?php echo base_url();?>index.php/buy/<?php echo $product->item_id; ?>" class="add">Agregar al carrito</a>
						</div>
					</div>
				</div>		
				</div>
				</div>
				</div>
				</div>
				<div class="clear"></div>
				<?php     include("footer.php"); ?>
			
</body>
</html>