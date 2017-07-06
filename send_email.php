<?php
	$emailton = $_POST["email"];
	$messege = $emailton . " ";
	$messege .= $_POST["message"];
	$name = $_POST["name"];
	
	mail("leticiasassa@uninove.edu.br", "email de " . $name, $massege);
	

	
	
	
		
	
