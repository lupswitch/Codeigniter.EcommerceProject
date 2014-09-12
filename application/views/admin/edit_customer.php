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
				  <h1 class="bar">Actualizar datos de cliente</h1>
                  	
			<?php if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
                	<?php if($this->uri->segment(4)=='success') { ?><div id="success"> Information Saved</div> <?php } ?>
                         <form action="<?php echo base_url();?>index.php/admin/cEdit/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data" id="admin">
			<p>
			  <label>Nombre Completo:</label>
				<input name="full_name" type="text" id="full_name" value="<?php echo $customer->full_name;?>"> 
			  </p>
						<p>
						  <label>Tipo de Cuenta:</label>
				<select name="account_type" id="account_type">
                            	<option value="">Seleccione tipo de cuenta</option>
                                <option value="personal" <?php if($customer->account_type=='personal') echo 'selected="selected"';?>>Personal</option>
				<option value="trade" <?php if($customer->account_type=='trade') echo 'selected="selected"';?>>Empresarial</option>
				</select>
						</p>
			<p>
			  <label>Nombre de Compania (Si es una Cuenta Empresarial):</label>
				<input name="company_name" type="text" id="company_name" value="<?php echo $customer->company_name;?>"> 
			  </p>

			<p>
			  <label>Email</label>
				<input name="email" type="text" id="email" value="<?php echo $customer->email;?>"> 
			  </p>
			<p>
			  <label>Password</label>
				<input name="password" type="password" id="password" value="<?php echo $customer->user_pass;?>" > 
			  </p>		
			<p>
                        <input name="update_action" type="hidden" id="update_action" value="true" />
                        <input name="customer_id" type="hidden" id="customer_id" value="<?php echo $this->uri->segment(3);?>" />
			</p>
                         <input type="submit" name="submit" value="Update Account" />
			</form>
				
	
				  
			  </div>
<div class="clear"></div>
				<div id="footer">
			</div>
			</div>
	
	</div>
</body>
</html>