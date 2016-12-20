
<?= form_open("http://127.0.0.1:8888/Codeigniter/CodeIgniter-3.1.2/index.php/prueba/recibir_datos") ?>

<?
	$nombre=array(
		'name'=>'nombre',
		'placeholder'=>'Escribe el nombre');

	$sinopsis=array(
		'name'=>'sinopsis',
		'placeholder'=>'Sinopsis', 'type'=>'textarea');

	$fecha=array(
		'name'=>'fecha',
		'type'=>'date');

	$cantidad=array(
		'name'=>'cantidad',
		'placeholder'=>'Ingrese la cantidad de copias',
		'type'=>'number');
?>

<label>
	Nombre:
	<?= form_input($nombre)?>
</label>
<br>
<label>
	Sinopsis:
	<?= form_input($sinopsis)?>
</label>
<br>
<label>
	Fecha de estreno:
	<?= form_input($fecha)?>
</label>
<br>
<label>
	Cantidad de copias:
	<?= form_input($cantidad)?>
</label>
<br>
<?= form_submit("sdsd","Agregar Pelicula", "class='btn btn-lg btn-success'")?>
<a href="http://127.0.0.1:8888/Codeigniter/CodeIgniter-3.1.2/index.php/prueba/mostrar" class="btn btn-lg btn-primary">Ver lista</a>
<?= form_close()?>
</body>

</html>