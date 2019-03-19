<?php
    function kmToM ($km) {
	$millas = $km / 1.609;
	echo "La distancia en Km es de: ".$km;
	echo " y su equivalente en millas es: ".$millas;
	echo "<br />";
    }
    function cToF ($celcius) {
	$farenheit = ($celcius * 9 / 5) + 32;
	echo "La temperatura en grados Celcius es de: ".$celcius;
	echo " y su equivalente en grados Farenheit es: ".$farenheit;
	echo "<br />";
    }
    function gToLb ($gramos) {
	$libras = $gramos / 453.592;
	echo "El peso en gramos es de: ".$gramos;
	echo " y su equivalente en libras es: ".$libras;
	echo "<br />";
    }
    function ltToOzl ($litros) {
	$onzasL = $litros * 33.814;
	echo "El volumen en Litros es de: ".$litros;
	echo " y su equivalente en onzas liquidas es: ".$onzasL;
	echo "<br />";
    }
    kmToM(100);
    cToF(100);
    gToLb(100);
    ltToOzl(100);
?>
