<?php
	session_start();
	if(isset($_SESSION)){
		if($_SESSION["type"] == "teacher"){
			$login = "teacher";
		}else{
			if ($_SESSION["type"]=="student") {
				$login = "student";
			}else{
				$login = "login";
			}
		}
	}else{
		$login = "login";
	}
	echo $login;
	return $login;
?>