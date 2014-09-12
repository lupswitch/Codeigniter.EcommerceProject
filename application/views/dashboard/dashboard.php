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
			      <li><a href="<?php echo base_url();?>index.php/user/account">Actualizar mis datos</a></li>
		        </ul>
	    </div>
			  <div id="right">
			    <h1 class="bar">Mis Ordenes</h1>
                <?php if($orders!='empty')
				{
				
					?>
			    <table id="cart">
			      <thead>

			      <tr>
			        <th>Numero de Orden</th>
			        <th>Fecha de la orden</th>
			        <th>Status</th>
			        <th>Acciones</th>
			         </tr>
                  </thead>
			      <tbody>
                  <?php foreach($orders as $order)
				  {
					  ?>
			        <tr>
			          <td><?php echo $order->order_id;?></td>
			          <td><?php echo $order->order_date;?></td>
			          <td>
                      <?php
					  
					 if($order->order_status=='dispatched')
					 		echo '<span style="color:green"><strong>Despachado</strong></span>';
							
					 if($order->order_status=='cancelled')
					  		echo '<span style="color:red"><strong>Cancelada</strong></span>';
					  
					 if($order->order_status=='new')
					 		echo '<span style="color:orange"><strong>Orden Recibida</strong></span>';
					 
					  ?>
					  </td>
			          <td><a href="<?php echo base_url();?>index.php/user/view/<?php echo $order->order_id;?>">Ver</a>
                      <?php if($order->order_status=='new') { ?>
					  | <a href="<?php echo base_url();?>index.php/user/cancel/<?php echo $order->order_id;?>">Cancelar Orden</a>
                      <?php } ?>
                      </td>
		            </tr>
                    <?php }?>
			        
		          </tbody>
		        </table>
			    <div id="actions">
			      <div id="pagination"> <a href="">&laquo;</a> <a class="active" href="">1</a> <a href="">2</a> <a href="">3</a> <a href="">4</a> <a href="">&raquo;</a> </div>
		        </div>
                <?php } else echo "No hay Ordenes"; ?>
	    </div>
		</div>
		</div>
		</div>
		</div>
			  <div class="clear"></div>
			  <?php $this->load->view("footer"); ?>

</body>
</html>