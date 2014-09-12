<div id="header">
			
			<div id="menu">
			<div id="lema">
			[SIT]<span>Sistemas de Ingeniería Tecnológica</span>
			</div>
				<ul>
					<li><a href="<?php echo base_url();?>index.php">Pagina de inicio</a></li>
					<li><a href="<?php echo base_url();?>index.php/services">Servicios</a></li>
                    <?php    
					if($this->session->userdata('user_id')=='')
					{
						?>
					<li><a href="<?php echo base_url();?>index.php/login">Ingresar</a></li>
                    <?php }
					else
					{
					 ?>
                     <li><a href="<?php echo base_url();?>index.php/user/">Panel</a></li> 
                    <li><a href="<?php echo base_url();?>index.php/signout">Salir</a></li> 
                     <?php     } ?>
					<li><a href="<?php echo base_url();?>index.php/contact">Contactese</a></li>
				</ul>
			</div>
				<div id="summary">
				
					
						<!-- <h2>Shopping Basket</h2> -->
						<?php if($this->session->userdata('cart_items_count')==''){ ?>	
	                    <div><span class="icon-cart3"></span> 0 Articulo(s)</div>
						<div><span class="icon-coin"></span> 0.00</div>
						<?php } else { ?>
	               
	                    <div>
						<span class="icon-cart3"></span>
						<?php echo $this->session->userdata('cart_items_count');?> Articulo(s)</div>
						
						<div>
						<span class="icon-coin"></span>
						 <?php echo number_format($this->session->userdata('total_price',2));?></div>
						
						<a href="<?php echo base_url();?>index.php/cart"><input class="btn detalles" type="submit" value="Detalles"></input></a>	
						
	                        
						<a href="<?php echo base_url();?>index.php/empty_cart/<?php echo $this->session->userdata('cart_session'); ?>"><input class="btn vaciar" type="submit" value="Vaciar"></input></a>		
						
					<?php } ?>	
				</div>
			</div>
			