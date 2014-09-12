<?php
if($this->session->userdata('admin')=='')
 header("Location:".base_url()."index.php/admin/");
?>
<div id="header">
				<div id="logo">
				<a href="blah"><img src="/sitecnologia/images/" alt="SITecnologia." /></a>
				</div>
			</div>
			<div id="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Nuestros Productos</a></li>
					<li><a href="#">Mi carrito</a></li>
					<li><a href="#">Contacte con nosotros</a></li>
                    <?php if($this->session->userdata('admin')!='')
					{
					?>
                    <li><a href="index.php/admin/signout">Salir</a></li>
                   <? } ?>
				</ul>
			</div>
			