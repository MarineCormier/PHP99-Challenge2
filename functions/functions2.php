<?php 
		
function ecart($plage) {
	foreach ($plage as $key => $value) {
		$reverse = asort($plage);
			echo $value."</br>";
		}
		$a = array_slice($plage, 3);
		$premier = current($a);
		$deuxieme = next($a);
		$a = ($deuxieme-$premier);

		$b = array_slice($plage, 2, -1);
		$premier = current($b);
		$deuxieme = next($b);
		$b = ($deuxieme-$premier);

		$c = array_slice($plage, 1, -1);
		$premier = current($c);
		$deuxieme = next($c);
		$c = ($deuxieme-$premier);

		$ecarts = array();
		$premier = current($plage);
		$deuxieme = next($plage);
		$d = ($deuxieme-$premier);
		array_push ($ecarts, $a, $b, $c, $d);{
		print_r ($ecarts)."</br>";
};
		$ecart = max($ecarts);
		return ($ecart);
}

?>

