<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Značky pro formátování textu - procvičování.</title>
	
 </head>

 <body>

 <?php 

$computer = array (
    'CPU' => "3,1 GHz, dvoujádrový Intel Core i5",
    'RAM' => "8 GB, DDR3, 2133 MHz",
    'SSD' => "250 GB",
    'GPU' => "Intel Iris Plus Graphics 650",
    'Case' => "notebook",
    'Mouse' => "Magic Mouse 2",
    'Keyboard' => "Klávesnice",
    'Headphones' => "Marshall",
    'Display' => "Retina LCD, rozlišení - 2560 x 1600",
    'Mainboard' => "Základní deska",
    'Fan' => "Vetrák",


);

?>

<h1>Můj počítač</h1>

 <ul>

    <li> <?= $computer ['CPU'] ?> </li>
    <li> <?= $computer ['RAM'] ?> </li>
    <li> <?= $computer ['SSD'] ?> </li>
    <li> <?= $computer ['GPU'] ?> </li>
    <li> <?= $computer ['Case'] ?> </li>
    <li> <?= $computer ['Mouse'] ?> </li>
    <li> <?= $computer ['Keyboard'] ?> </li>
    <li> <?= $computer ['Headphones'] ?> </li>
    <li> <?= $computer ['Display'] ?> </li>
    <li> <?= $computer ['Mainboard'] ?> </li>
    <li> <?= $computer ['Fan'] ?> </li>

</ul>


 </body>
</html>

