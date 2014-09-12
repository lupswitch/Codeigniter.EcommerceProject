<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia - Confirmación de compra</title>
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
					<h1 class="bar">Confirmación de pedido</h1>
					<h2>Muchas Gracias por comprar en SITecnologia</h2>
					<h2>Su numero de orden es: <?php echo $this->session->userdata('order_id'); ?></h2>
					<p>Dentro de poco va a recibir un email con los detalles del pedido.</p>
					<br />
					<p><strong>Nota:</strong> Desde el panel puede ver el estado de su pedido.</p>
				</div>		
				</div>
				</div>
				</div>
</div>	
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			
</body>
</html>