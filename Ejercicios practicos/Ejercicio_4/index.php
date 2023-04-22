<?php

class JuegoDeAzar
{
	public $numero_ganador;
	public $numero_elegido;
	public $costo;
	public $ganancias = array(
		1 => 70,
		2 => 140,
		3 => 210,
		4 => 280,
		5 => 350,
		6 => 420,
		7 => 490,
		8 => 560,
		9 => 630,
		10 => 700
	);

	public function __construct($numero_elegido, $costo)
	{
		$this->numero_elegido = $numero_elegido;
		$this->costo = $costo;
		$this->numero_ganador = rand(0, 100);
	}

	public function jugar()
	{
		echo "El número ganador es: " . $this->numero_ganador . "<br>";
		echo "El número elegido es: " . $this->numero_elegido . "<br>";

		if ($this->numero_ganador == $this->numero_elegido) {
			$ganancia = $this->ganancias[$this->costo];
			echo "¡Felicidades! Has ganado $" . $ganancia . "<br>";
			return $ganancia;
		} else {
			echo "Lo siento, no has ganado nada. ¡Suerte para la próxima!<br>";
			return 0;
		}
	}
}

if (isset($_POST['jugar'])) {
	$numero_elegido = $_POST['numero'];
	$costo = $_POST['costo'];

	$juego = new JuegoDeAzar($numero_elegido, $costo);
	$ganancia = $juego->jugar();

	echo "<script type='text/javascript'>bloquearCampos();</script>";
	echo "<p><button onclick='desbloquearCampos()'>Jugar otra vez</button></p>";
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Juego de Azar</title>
	<script type="text/javascript">
		function bloquearCampos() {
			document.getElementById('numero').disabled = true;
			document.getElementById('costo').disabled = true;
			document.getElementsByName('jugar')[0].disabled = true;
		}

		function desbloquearCampos() {
			document.getElementById('numero').disabled = false;
			document.getElementById('costo').disabled = false;
			document.getElementsByName('jugar')[0].disabled = false;
			document.getElementById('numero').value = "";
			document.getElementById('costo').value = "";
		}
	</script>
</head>

<body>

	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		h1 {
			text-align: center;
			color: #333;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		label {
			margin-bottom: 10px;
			font-size: 18px;
			font-weight: bold;
			color: #333;
		}

		input {
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			text-align: center;
			width: 200px;
		}

		button {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		button:hover {
			background-color: #666;

		}

		table {
			margin-top: 50px;
			border-collapse: collapse;
			width: 100%;
			max-width: 600px;
		}

		th,
		td {
			padding: 10px;
			text-align: center;
			border: 1px solid #ccc;
			font-size: 18px;
			color: #333;
		}

		th {
			background-color: #333;
			color: #fff;
		}

		.winner {
			margin-top: 50px;
			text-align: center;
			font-size: 24px;
			color: #333;
		}

		.winner span {
			font-weight: bold;
			color: #666;
		}

		.loser {
			margin-top: 50px;
			text-align: center;
			font-size: 24px;
			color: #333;
		}

		.loser span {
			font-weight: bold;
			color: #666;
		}
	</style>
	<h1>Juego de Azar</h1>
	<form method="post">
		<label for="numero">Número:</label>
		<input type="number" id="numero" name="numero" min="0" max="100" required>
		<br>
		<label for="costo">Costo:</label>
		<select id="costo" name="costo" required>
			<option value="1">$1 - $70</option>
			<option value="2">$2 - $140</option>
			<option value="3">$3 - $210</option>
			<option value="4">$4 - $280</option>
			<option value="5">$5 - $350</option>
			<option value="6">$6 - $420</option>
			<option value="7">$7 - $490</option>
			<option value="8">$8 - $560</option>
			<option value="9">$9 - $630</option>
			<option value="10">$10 - $700</option>
		</select>
		<br>
		<button type="submit" name="jugar" value="jugar">Jugar</button>
	</form>
	<?php if (isset($ganancia)) : ?>
		<p>Tu ganancia es: $<?php echo $ganancia; ?></p>
	<?php endif; ?>

</body>

</html>