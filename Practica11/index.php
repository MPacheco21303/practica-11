<html>
<head>
<title>practica 10 php</title>
</head>
<body>
    <?php
    //Martin Pacheco
    //Usando variables en PHP
     echo "<h1>variables</h1>";
	 $nombre='Martin'; //tipo cadenas
	 $apellidos='Pacheco Diaz';
	 $edad=21;
	 $salario=13345.50;
	 $fechaNacimiento='21/03/1995';
	 $estatus=true;
	 echo $nombre.'<br/>';
	 echo $apellidos.'<br/>';
	 echo 'Nombre completo:'.$nombre.' '.$apellidos.'<br/>';
	 echo 'TU EDAD ES:'.$edad.'<br/>';
	 echo 'TU SALARIO ES:'.$salario.'<br/>';

?>
<h1>OPERADORES ARITMETICOS</h1>
<?php
     $a=5;
     $b=3;
     $suma=$a+$b;
     $resta=$a-$b;
     $multiplica=$a*$b;
     $divide=$a/$b;
     echo 'la suma de '.$a.'+'.$b.' es: '.$suma.'<br/>';
     echo 'la resta de '.$a.'-'.$b.' es: '.$resta.'<br/>';
     echo 'la multiplicacion de '.$a.'*'.$b.' es: '.$multiplica.'<br/>';
     echo 'la division  de '.$a.'/'.$b.' es: '.$divide.'<br/>';	 
 ?>
</body>
</html>