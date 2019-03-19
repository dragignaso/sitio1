<html>
	<head>
		<title>Conversiones</title>
	</head>
	<body>
		<?php
			function distancia($dist){
				$km = $dist * 1.6;
				echo 'La distancia en millas es: '.$dist;
				echo '<br></br>';
				echo 'La distancia en Km son :'.$km;
				echo '<br></br>';
			}
			
			function temperatura($temp){
				$celcius = ($temp -32) * (5 / 9);
				echo 'La temperatura en grados Farenheit es: '.$temp;
				echo '<br></br>';
				echo 'La temperatura en grados Celcius es: '.$celcius;
				echo '<br></br>';
			}

			function peso($peso){
				$gramos = $peso * 453.592;
				echo 'El peso en libras es de: '.$peso;
				echo '<br></br>';
				echo 'El peso en gramos es de: '.$gramos;
				echo '<br></br>';
			}

			function volumen($vol){
				$litros = $vol / 33.81;
				echo 'El volumen en onzas liquidas es de: '.$vol;
				echo '<br></br>';
				echo 'El volumen en litros es de: '.$litros;
				echo '<br></br>';
			}

			distancia(150);
			temperatura(130);
			peso(800);
			volumen(20);
		?>
	</body>
</html>

