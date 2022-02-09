<?php
$uname = $pass = "";
$flag = false;
if ($_SERVER['REQUEST_METHOD']==="POST") {
		if (empty($_POST['uname'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['password'])) {
	 echo "Field can't be empty";
		$flag = true;
		// code...
	}
			
	}
	if (!$flag) {
            $uname = input_data($_POST['uname']);
       $password = input_data($_POST['password']);
		// code...
	}
	function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
?>