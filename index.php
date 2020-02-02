<?php  
	
	if(isset($_POST['enviar']))
	{
		require_once('entradas.php');

		$edadusuario = $_POST['edad'];

		$objentrada = new entradas();
		$objentrada->setEdad($edadusuario);
		$resultado = $objentrada->calcularPrecio();
	}

	require('views/index.view.php');
?>