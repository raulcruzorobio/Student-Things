<form action="#" method="post">
<h1>TABLAS DE MULTIPLICAR</h1>
<h2>Venga majo, que no tengo todo el día</h2>
<p>Dame un numero para darte la tabla de multiplicar: <input type="text" name="num" value="0" /></p>
<p><input type="submit" value="Tabla de multiplicar" /></p>
</form>


<?php
$a=1;
$b=$_POST ['num'];
	while ($a<=10) {
	echo ("$b x $a = ". $b*$a. "<br />");
	$a++;
	}


?>