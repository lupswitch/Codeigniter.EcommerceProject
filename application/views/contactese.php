<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia - Contactese</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/estilos-carrito.css" type="text/css">
	      <!-- Opcional, fuente  -->
        <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	</head>
<body>
	<div class="wrapper primary">
		<div class="container">
		<div id="wrapper">
			<?php include("header.php"); ?>
			<div id="contactese">
				<h1 class="bar">Formas de Contacto</h1>
				<p><span class="icon-calendar"></span>Días de atención: Lunes a Viernes</p>
				<p><span class="icon-clock"></span>Horarios de atención: 10:00 a 18:00</p>
				<p><span class="icon-mobile"></span>Celular:  098 733 114</p>
				<p><span class="icon-phone"></span>Telefono: +598 2 215 6981</p>
				<p><span class="icon-mail4"></span>E-mail:	  sitecnologica@gmail.com</p>
				
				<div id="contenedoremail">
				<form action="<?php echo base_url();?>index.php/mensaje" method="post" enctype="multipart/form-data" id="admin"></p>
				
				<p style="font-family:Verdana;font-size:12px;">Sino Puede Contactarse por medio de este formulario y nos contactaramos a la brevedad.</p>
				
				<p><label>Nombre : </label>
				<input name="nombre" type="text" id="nombre" value="<?php set_value('nombre');?>"></p>
				
				<p><label>Apellido: </label>
				<input name="apellido" type="text" id="apellido" value="<?php set_value('apellido');?>"></p>
				
				<p><label>Email: </label>
				<input name="email" type="text" id="email" value="<?php set_value('email');?>"></p>
				
				<p><label>Telefono: </label>
				<input name="telefono" type="text" id="telefono" value="<?php set_value('telefono');?>"></p>
				
				<p><label>Mensaje</label><br>
				<textarea name="mensaje" maxlenght="255" cols="5" type="text" id="mensaje" value="<?php set_value('mensaje');?>"></textarea></p>
				
				<p><input class="btn finalizar" style=float:none; type="submit" name="submit" value="Enviar"></p>
				</form>
				
				</div>
			</div>		
		</div>
		</div>
	</div>
	<div class="clear"></div>
	<?php include("footer.php"); ?>
</body>
</html>