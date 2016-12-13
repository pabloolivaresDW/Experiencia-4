<h1> Lista de peliculas</h1>
	<div id="body">
		<h2>Lista de peliculas disponibles</h2>

<table class="table table-striped">
</thead>
	<tr>
		<th>Nombre</th>
		<th>Sinopsis</th>
		<th>Fecha de estreno</th>
		<th>Cantidad de copias</th>
	</tr>
</thead>

<?
	foreach ($peliculas->result() as $pelicula) {?>
	<tr>
		<td> <?php echo $pelicula->nombre; ?></td>
		<td> <?= $pelicula->sinopsis;?></td>
		<td> <?= $pelicula->fecha_estreno;?></td>
		<td> <?= $pelicula->cantidad;?></td>
	</tr>
	<?php } ?>
</table>
<br>
<a href="http://127.0.0.1:8888/Codeigniter/CodeIgniter-3.1.2/index.php/prueba/crear" class="btn btn-primary">Crear pelicula</a>

<a href="http://127.0.0.1:8888/Codeigniter/CodeIgniter-3.1.2/index.php/prueba/arrendar" class="btn btn-success">Arrendar pelicula</a>
</body>
</html>