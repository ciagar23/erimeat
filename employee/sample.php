<?php

$conn = new PDO('mysql:host=localhost; dbname=db_erimeat','root', ''); 
		 $result = $conn->prepare("SELECT * FROM dtr ");
              $result->execute();
              for($i=0; $row = $result->fetch(); $i++){
                  $id=$row['Id'];
                  extract($row);
               
                  if($row['dtr_date']==TRUE && $row ['checkIn']==TRUE && $row ['breakOut']==TRUE || $row ['breakOut']==FALSE && $row['breakIn']==TRUE || $row['breakIn']==FALSE  &&  $row ['checkOut']==FALSE){
                  		echo "success";
                  }
                  else{
                  	echo "fail";

                  }

              }
?>