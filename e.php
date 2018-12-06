<?php
//Criado por Anderson Ismael
//06 de dezembro de 2018
function e($str,$output=true){
	$str=htmlentities($str);
	if($output){
		print $str;
	}else{
		return $str;
	}
}
