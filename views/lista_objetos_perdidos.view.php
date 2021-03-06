<?php require 'intranet.view.php'; ?>
	<div class="container contenido">	
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>OBJETOS PERDIDOS</h1>
				<hr>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-12">		
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Trabajador</th>
							<th>Encontrado por: </th>
							<th>Objeto Perdido</th>
							<th>Lugar</th>
							<th>Fecha</th>
							
							<th>Eliminar</th>			
						</tr>
					</thead>
					<tbody>
						<?php foreach($solicitudes as $post): ?>

						<tr>
							<td><?php  echo $post['trabajador']?></td>
							<td><?php  echo $post['usuario']?></td>
							<!--<td><?php  /*echo $post['objeto']." ".$post['descripcion']*/?></td>-->
							<td><?php  echo $post['descripcion']?></td>
							<td><?php  echo $post['lugar']?></td>
							<td><?php  echo fecha($post['fecha'])?></td>
						
							<td><a href="eliminar_objeto.php?id=<?php echo $post['id'];?>"><button type="button" class="btn btn-succes">Eliminar</button></a></td>
						</tr>	
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/dataTables.bootstrap.min.js"></script>
</body>
</html>
