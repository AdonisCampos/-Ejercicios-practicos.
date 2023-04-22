<!DOCTYPE html>
<html>

<head>
	<title>Ejemplo de imágenes según un número ingresado</title>
</head>

<body>
	<h1>Ejemplo de imágenes según un número ingresado</h1>
	<form method="post">
		<label for="numero">Ingrese un número:</label>
		<input type="number" id="numero" name="numero" min="1" required>
		<button type="submit">Mostrar imágenes</button>
	</form>

	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		class GeneradorImagenes
		{
			private $cantidad;

			public function __construct($cantidad)
			{
				$this->cantidad = $cantidad;
			}

			public function generar()
			{

				for ($i = 1; $i <= $this->cantidad; $i++) {
					echo '<div style="float:left; margin:20px;">';
					echo '<h2>Imagen ' . $i . '</h2>';
					echo '<img src="img/Imagen.jpg" alt="Imagen ' . $i . '" width="200">';
					echo '</div>';
				}
			}
		}

		$cantidad = $_POST["numero"];

		$generador = new GeneradorImagenes($cantidad);
		$generador->generar();
	}
	?>
</body>

</html>