<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia</title>
	<link rel="stylesheet" href="<?php     echo base_url();?>css/estilos-carrito.css" type="text/css">
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
					<h1 class="bar"><?php echo str_replace('-',' ',ucwords($this->uri->segment(3))); ?></h1>
						
						<?php     
						$i=1;
						if($category_products!='empty')
						{
						foreach ($category_products as $product)
						{
						
							?>
							<div class="item <?php if($i%3==0) echo 'no-margin-right';?>">
							<div class="photo"><img src="<?php echo base_url().$product->medium_image;?>" alt="<?php echo $product->item_name; ?>" /></div>
							<div class="title"><a href="<?php echo base_url();?>index.php/details/<?php echo $product->item_id; ?>/<?php echo url_title(strtolower($product->item_name)); ?>">
							<?php echo $product->item_name; ?></a></div>
							<p><span>$<?php echo number_format($product->item_price); ?></span> por unidad</p>
							<div class="actions">
								<a href="<?php echo base_url();?>index.php/buy/<?php echo $product->item_id; ?>" class="add">Agregar al carrito</a>
							</div>
						</div>
                        <?php $i++;
						} // end for each
						} // end if
						else  echo "No se encontraron articulos."; 
						?>

				</div>		
				</div>
				</div>
				</div>
				</div>
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			
	
	
</body>
</html>