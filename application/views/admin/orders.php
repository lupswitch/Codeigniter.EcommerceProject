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
				<h1 class="bar">Ordenes</h1>
					 <?php if($orders!='empty')
				{
					?>
			    <table id="cart">
			      <thead>

			      <tr>
			        <th>Numero de Orden</th>
			        <th>Fecha de Orden</th>
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
					 		echo '<span style="color:green"><strong>Despachada</strong></span>';
							
					 if($order->order_status=='cancelled')
					  		echo '<span style="color:red"><strong>Cancelada</strong></span>';
					  
					 if($order->order_status=='new')
					 		echo '<span style="color:orange"><strong>Orden Recibida</strong></span>';
					 
					  ?>
					  </td>
			          <td><a href="<?php echo base_url();?>index.php/admin/view_order/<?php echo $order->order_id;?>">Ver</a>
                      <?php if($order->order_status=='new') { ?>
					  | <a href="<?php echo base_url();?>index.php/admin/cancel_order/<?php echo $order->order_id;?>">Cancelar Orden</a>
                                          | <a href="<?php echo base_url();?>index.php/admin/dispatch_order/<?php echo $order->order_id;?>">Marcar como despachado</a>
                      <?php } ?>
                      </td>
		            </tr>
                    <?php }?>
			        
		          </tbody>
		        </table>
		
                          <?php 
                                        if($total>RECORDS_PER_PAGE)
                                        {
                                        $pages = ceil($total/RECORDS_PER_PAGE);
                                        
                                        ?>
					<div id="actions">
						<div id="pagination">
							<a href="">&laquo;</a>
							<?php for($i=1; $i<=$pages;$i++)
                                                        {
                                                            ?><a class="<?php if($this->uri->segment(3)==$i) echo 'active';?>" href="<?php 
                                                            echo base_url();?>index.php/admin/orders/<?php $i;?>"><?php echo $i;?></a>
                                                            
                                                          <?php } ?>  
							<a href="">&raquo;</a>
						</div>
                                           <?php } ?>       
                <?php } else echo "No Record"; ?>
	  
					</div>	
				</div>		
				<div class="clear"></div>
				<div id="footer">
			</div>
			</div>
	
	</div>
</body>
</html>