<?php 


function affichage($debut, $fin) {
		for($i=$debut; $i<=$fin; $i++){
			if ($i % 2 == 0){
				echo '<font color="blue">'.$i.'</font>'."</br>";
			}
			if ($i % 2 > 0){
				echo '<font color="orange">'.$i.'</font>'."</br>";
			}
			if (sqrt($i)*sqrt($i) == $i){
				echo '<b>'.$i.'</b>'."</br>";
			}
			}
		}

?>