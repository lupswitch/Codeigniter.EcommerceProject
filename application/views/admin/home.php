<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/estilos-carrito.css" type="text/css">
	</head>
<body>
	<div id="wrapper">
			<div id="content" class="checkout">
				<?php include("left.php"); ?>
				<div id="right">
					<h1 class="bar">Clientes</h1>
                                        <?php
                                        if($customers!='empty')
                                        {
                                            
                                        ?>
					<table id="cart">
						<thead>
							<th>Numero Cliente</th>
							<th>Nombre</th>
							<th>Fecha de Registro</th>
							<th>Acciones</th>
						</thead>
						<tbody>
                                                    <?php
                                                    foreach($customers as $customer)
                                                    {
                                                        ?>
                                                    
							<tr>
								<td><?php echo $customer->user_id;?></td>
								<td><?php echo $customer->full_name;?></td>
								<td><?php echo $customer->date_joined;?></td>
								<td><a href="<?php base_url();?>index.php/admin/cInfo/<?php $customer->user_id;?>">Detalles</a> | 
                                <a href="<?php base_url();?>index.php/admin/cOrders/<?php $customer->user_id;?>">Ordenes</a> | 
                                <a href="<?php base_url();?>index.php/admin/cEdit/<?php $customer->user_id;?>">Editar</a> | 
                                <a href="<?php base_url();?>index.php/admin/cDelete/<?php $customer->user_id;?>">Borrar</a></td>
							</tr>
                                                    <?php } ?>
							
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
                                                            echo base_url();?>index.php/admin/customers/<?php $i;?>"><?php echo $i;?></a>
                                                            
                                                          <?php } ?>  
							<a href="">&raquo;</a>
						</div>
                                           <?php } ?> 
 <?php } else { echo "No Record Found"; } ?>
				</div>		
				<div class="clear"></div>
				<?php include("footer.php"); ?>
			</div>
	
	</div>
</body>
</html>