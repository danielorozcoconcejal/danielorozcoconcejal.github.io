<?php 

include("conexion.php"); 

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['celular']) >= 1 && strlen($_POST['id']) >= 1 && strlen($_POST['barrio_vereda']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $correo = trim($_POST['correo']);
		$celular = trim($_POST['celular']);
		$id = trim($_POST['id']);
		$barrio_vereda = trim($_POST['barrio_vereda']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, correo, celular, id, barrio_vereda, fecha_reg) VALUES ('$nombre','$correo','$celular','$id','$barrio_vereda','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Ahora eres voluntario!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else { 
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>