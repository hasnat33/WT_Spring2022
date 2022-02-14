<?php
$flag = false;

  if($_SERVER['REQUEST_METHOD']==="POST"){

				
				$destination = "../upload/";
		  $fileName = $_FILES['image']['name'];
		  $tempFile = $_FILES['image']['tmp_name'];
          $target_file = $destination . basename($_FILES["image"]["name"]);
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if ($_FILES['image']["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $flag = true;
          }
          elseif ($imageFileType != "jpg") {
            echo "Sorry, only JPG files are allowed.";
              $flag = true;
          }
          if (!$flag) {
              # code...
              $result =  move_uploaded_file($tempFile, $destination . "" . $fileName);
              echo "Uploading done";
          }
          else {
           echo "Uploading failed...";
          }

          
		
        
						
  }
 
?>