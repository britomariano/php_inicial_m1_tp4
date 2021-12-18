<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="estilo.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<div id="portada"><h2>Listado de precio</h2></div>    
<?php
define('FRUTA', array ('Manzana ', 'Pera ','Frutilla '));
define('PRECIO', array ('200', '150','400'));

$precio_canasta1 = PRECIO[0] + PRECIO[1]*2 + PRECIO [2]*0.5;
$precio_canasta2 = PRECIO[0]*0.5 + PRECIO[1]*0.5 + PRECIO [2]*0.5;
$precio_canasta3 = PRECIO[0]*0.5 + PRECIO [2]*0.5;
?>

<div id="cuerpo">
<ul>
<li> Canasta familiar: $ <?php echo round ($precio_canasta1) ?><br>
Contiene: <?php echo FRUTA[0], FRUTA[1], FRUTA[2] ?>  </li>
<li> Canasta Pareja: $ <?php echo round ($precio_canasta2) ?><br>
Contiene: <?php echo FRUTA[0], FRUTA[1], FRUTA[2] ?> </li>
<li> Canasta individual: $ <?php echo round ($precio_canasta3) ?><br>
Contiene: <?php echo FRUTA[0], FRUTA[2] ?> </li>
</ul>


</div>    
    
</body>
echo "# php_inicial_m1" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/britomariano/php_inicial_m1.git
git push -u origin main
</html>