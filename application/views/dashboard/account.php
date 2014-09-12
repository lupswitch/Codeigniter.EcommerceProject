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
			      <li><a href="<?php echo base_url();?>index.php/user/account">Actualizar Mis datos</a></li>
		        </ul>
	    </div>
			  <div id="right">
					<h1 class="bar">Registrarse en SITecnologia</h1>
                    <?php if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
                <?php if($this->uri->segment(3)!='') { ?><div id="success"> La informacion de la cuenta ha sido actualizada!</div> <?php } ?>
				
		  <form action="<?php echo base_url();?>index.php/user/account" method="post" enctype="multipart/form-data" id="admin">
			<p>
			  <label>Nombre Completo:</label>
				<input name="full_name" type="text" id="full_name" value="<?php $this->session->userdata('full_name');?>"> 
			  </p>
			<p>
			  <label>Account Type:</label>
				<select name="account_type" id="account_type">
                   	<option value="">Seleccionar tipo de cuenta</option>
					<option value="personal" <?php if($this->session->userdata('account_type')=='personal') echo 'selected="selected"';?>>Personal</option>
					<option value="trade" <?php if($this->session->userdata('account_type')=='trade') echo 'selected="selected"';?>>Empresarial</option>
				</select>
			</p>
			<p>
			  <label>Nombre Compania (En caso de ser Empresarial):</label>
				<input name="company_name" type="text" id="company_name" value="<?php $this->session->userdata('company_name');?>"> 
			  </p>

			<p>
			  <label>Email</label>
				<input name="email" type="text" id="email" value="<?php $this->session->userdata('email');?>"> 
			</p>
			<p>
			<label>Telefono</label>
				<input name="telephone" type="text" id="telephone" value="<?php $this->session->userdata('telephone');?>"> 
			</p>
			<label>Celular</label>
				<input name="celphone" type="text" id="celphone" value="<?php $this->session->userdata('celphone');?>"> 
			</p>
			
			<p>
			  <label>Password</label>
				<input name="password" type="password" id="password"> 
			  </p>		
			<p>
			  <label>Confirmar Password:</label>
				<input name="password2" type="password" id="password2"> 
		      <input name="update_action" type="hidden" id="update_action" value="true" />
			</p>
						 <input type="submit" name="submit" value="Update" />
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