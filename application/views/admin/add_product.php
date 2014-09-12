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
				  <h1 class="bar">Agregar Producto</h1>
                  	
					<?php if(validation_errors()) { ?><div id="errors"><?php echo validation_errors(); ?></div> <?php } ?>
                	<?php if($this->uri->segment(4)!='') { ?><div id="errors"> Lo sentimos el Producto ya existe</div> <?php } ?>
                    
				  <form action="<?php echo base_url();?>index.php/admin/add_product" method="post" enctype="multipart/form-data" id="admin">
				    <p>
				      <label>Titulo Producto:</label>
				      <input name="title" type="text" id="title" value="<?php set_value('title');?>"/>
			        </p>
				    <p>
				      <label>Precio Producto:</label>
				      <input name="price" type="text" id="price" value="<?php set_value('price');?>"/>
			        </p>
				    <p>
				      <label>Stock:</label>
				      <input name="stock" type="text" id="stock" value="<?php set_value('stock');?>" />
			        </p>
				    <p>
				      <label>Imagen:</label>
				      <input type="file" name="file" id="file" />
			        </p>
				    <p>
				      <label>Categoria:</label>
				      <select name="cat_id" id="cat_id">
                      <?php
					  
					 $categories = $this->admin_model->getAllCategories();
					 foreach($categories as $category)
					 {
					 ?>
				      	<option value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
                        
                      <?php
					  }
					  ?>  
			          </select>
			        </p>
				    <p>
				      <label>Descripcion:</label>
				      <textarea name="desc" id="desc"><?php set_value('company_name');?></textarea>
			        </p>
				    <input type="submit" name="submit" value="Add Product" />
                                    <input type="hidden" name="action" value="1" />
			      </form>
			  </div>
<div class="clear"></div>
				<div id="footer">
			</div>
			</div>
	
	</div>
</body>
</html>