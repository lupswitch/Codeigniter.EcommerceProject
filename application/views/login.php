<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia - Login</title>
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
				<?php     include("left.php"); ?>
				<div id="right">
					<h1 class="bar">Realizar Pedido</h1>
                    <p>Tienes que estar logueado para poder realizar el pedido</p>
                    <?php     
					if(validation_errors()){
					?>
					<div id="errors">
					<?php echo validation_errors(); ?>
					</div> 
					<?php     
					} 
					?>
                <?php if($this->uri->segment(2)=='failed'){	
				?>
			<div id="errors"> Lo sentimos pero el usuario y/u el password no es el correcto</div> 
				<?php } ?>
			<form action="<?php echo base_url();?>index.php/login" method="post" enctype="multipart/form-data" id="login">
				<p>
					<label>Nombre usuario:</label>
					<input type="text" name="username" value="<?php set_value('username');?>"> 
				</p>
				<p>
				<label>Contraseña:</label>
				<input type="password" name="password" value="<?php set_value('password');?>"> 
				<input name="login_action" type="hidden" id="login_action" value="true" />
				</p>
				<p>
				<input class="btn finalizar" style=float:none; type="submit" value="Login">
				<p>No tienes una cuenta? <a href="<?php echo base_url();?>index.php/register">Registrate aqui</a></p>
			</form>
			  </div>
</div>
</div>			
</div>
</div>  
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			</div>
	
	</div>
</body>
</html>