<!-- BARRA LATERAL -->
<aside id="lateral">

	<div id="carrito" class="block_aside">
		<h3>Mi carrito</h3>
		<ul>
			<li><a href="<?=base_url?>carrito/index">Productos </a></li>
			<li><a href="<?=base_url?>carrito/index">Total: $</a></li>
			<li><a href="<?=base_url?>carrito/index">Ver el carrito</a></li>
		</ul>
	</div>
	
	<div id="login" class="block_aside">
		
			<h3>Entrar a la web</h3>
			<form action="<?=base_url?>usuario/login" method="post">
				<label for="email">Email</label>
				<input type="email" name="email" />
				<label for="password">Contraseña</label>
				<input type="password" name="password" />
				<input type="submit" value="Enviar" />
			</form>

		<ul>
				<li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
				<li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
				<li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
			
				<li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
				<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
				<li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
		</ul>
	</div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">