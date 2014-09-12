<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sitecnologia - Registrarse</title>
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
					<h1 class="bar">Registro</h1>
                    <?php  if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
                <?php if($this->uri->segment(2)!='') { ?><div id="errors"> Lo sentimos pero ese email esta en uso</div> <?php } ?>
				
		  <form action="<?php echo base_url();?>index.php/register" method="post" enctype="multipart/form-data" id="admin">
			<p>
			  <label>Nombre Completo:</label>
				<input name="full_name" type="text" id="full_name" value="<?php set_value('full_name');?>"> 
			  </p>
						<p>
						  <label>Tipo de cuenta:</label>
							<select name="account_type" id="account_type">
                            	<option value="">Seleccione su tipo de cuenta</option>
								<option value="personal">Personal</option>
								<option value="trade">Empresarial</option>
							</select>
						</p>
			<p>
			<label>Telefono:</label>
				<input name="telephone" type="text" id="telephone" value="<?php set_value('telephone');?>">
			</p>
			<p>
			<label>Celular:</label>
				<input name="celphone" type="text" id="celphone" value="<?php set_value('celphone');?>">
			</p>
			<p>
			<label>Nombre de su compania (En caso de ser una cuenta Empresarial):</label>
				<input name="company_name" type="text" id="company_name" value="<?php set_value('company_name');?>"> 
			  </p>
			<p>
			  <label>Email</label>
				<input name="email" type="text" id="email" value="<?php set_value('email');?>"> 
			  </p>
			<p>
			  <label>Contraseña</label>
				<input name="password" type="password" id="password" value="<?php set_value('password');?>"> 
			  </p>		
			<p>
			  <label>Confirmar contraseña:</label>
				<input name="password2" type="password" id="password2" value="<?php set_value('password2');?>"> 
		      <input name="register_action" type="hidden" id="register_action" value="true" />
			</p>
						 <input class="btn finalizar" style=float:none; type="submit" name="submit" value="Registrarse">
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