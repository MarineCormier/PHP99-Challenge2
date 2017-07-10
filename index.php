<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Challenge PHP99 / Challenge 2</title>
</head>
<body>

<h1>LOOP</h1>
<h2>Exercice 1</h2>

<?php 
include "functions/functions.php";
print_r (affichage(1, 10));
/*print_r(carre(1, 10));*/
?>

<h2>Exercice 2</h2>

<?php

$tab = ["10", "80", "25", "27", "50"];

include "functions/functions2.php";
print_r(ecart($tab));
?>

<h2>Exercice 3</h2>

<?php 
include "functions/functions3.php";
?>

</body>
