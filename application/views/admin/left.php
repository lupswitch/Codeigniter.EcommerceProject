<?php 
if($this->session->userdata('admin')==''    && $logincheck=='')
  redirect(base_url()."index.php/admin/login");
?>
<div id="left">
					<h1 class="bar">Admin</h1>
					<ul id="cats">
						<li><a href="<?php echo base_url();?>index.php/admin/orders">Ordenes</a></li>
						<li><a href="<?php echo base_url();?>index.php/admin/customers">Clientes</a></li>
						<li><a href="<?php echo base_url();?>index.php/admin/products">Productos</a></li>
						<li><a href="<?php echo base_url();?>index.php/admin/categories">Categorias</a></li>
					</ul>
				</div>