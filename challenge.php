<?php
function multiplos($numero,$factor){
	$resultado =0;
	if (($numero % $factor)==0){
		$resultado = $factor;
	}
	return $resultado;
}

for ($i=1; $i <= 100 ; $i++) { 
	$total = multiplos($i,3) + multiplos($i,5);
	switch ($total) {
		case 3 :
			echo "Falabella</br>";
			break;
		case 5 :
			echo "IT</br>";
			break;
		case 8 :
			echo "Integraciones</br>";
			break;
		default:
			echo $i."</br>";
			break;
	}
}

?>