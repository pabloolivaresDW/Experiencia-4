
<?
	$nombre=array(
		'name'=>'nombre',
		'placeholder'=>'Escribe el nombre de la pelicula a arrendar');
?>

<?= form_open("http://127.0.0.1:8888/Codeigniter/CodeIgniter-3.1.2/index.php/prueba/obtenerNombre") ?>
	<label>
	Nombre:
	<?= form_input($nombre)?>
</label>
<br>
<?= form_submit("","Arrendar Pelicula")?>
<?= form_close()?>
</body>

<a href="http://127.0.0.1:8888/Codeigniter/CodeIgniter-3.1.2/index.php/prueba/mostrar" class="btn btn-lg btn-primary">Ver lista</a>

</html>