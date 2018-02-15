<?php
class Profile {
	 /* Member variables */
	 var $username;

	 /* Retrieve one record */
	 function login($username, $password){
		 		$db = Database::connect();
	 		 	$pdo = $db->prepare("select * from user where username='$username' and password='$password'");
	 		 	$pdo->execute();
	 		 	$result = $pdo->fetch(PDO::FETCH_OBJ);
	 		 	Database::disconnect();
				return $result;
	 }

	 /* Retrieve one record */
	 function readOne($val){
				$db = Database::connect();
				$pdo = $db->prepare("select * from user where username='$val'");
				$pdo->execute();
				$result = $pdo->fetch(PDO::FETCH_OBJ);
				Database::disconnect();
				return $result;
	 }

	 /* Retrieve one record */
	 function readList(){
			 $db = Database::connect();
			 $pdo = $db->prepare("select * from user");
			 $pdo->execute();
			 $result = $pdo->fetchAll(PDO::FETCH_OBJ);
			 Database::disconnect();
			 return $result;
	 }

	 function createOne($obj){
		 $db = Database::connect();
		 $pdo = $db->prepare("insert into user set userName='$obj->username',
																	firstName='$obj->firstName',
																	lastName='$obj->lastName',
																	email='$obj->email',
																	contact='$obj->contact',
																	address='$obj->address',
																	aboutMe='$obj->aboutMe',
																	linkdin='$obj->linkdin',
																	skype='$obj->skype'
																	");
		 $pdo->execute();
		 Database::disconnect();
	 }

	 function updateOne($obj){
			 $db = Database::connect();
			 $pdo = $db->prepare("update user set userName='$obj->username',
	 																 firstName='$obj->firstName',
	 																 lastName='$obj->lastName',
	 																 email='$obj->email',
	 																 contact='$obj->contact',
	 																 address='$obj->address',
	 																 aboutMe='$obj->aboutMe',
	 																 linkdin='$obj->linkdin',
	 																 skype='$obj->skype'
	 																 where userName='$obj->username'
	 																 ");
			 $pdo->execute();
			 Database::disconnect();
	 }
 }


 class Job {

 	 /* Retrieve one record */
 	 function readOne($val){
 	 		$query = mysql_query("select * from job where Id='$val'");
 	 	 	$get = mysql_fetch_object($query);
 			return $get;
 	 }

 	 /* Retrieve one record */
 	 function readList($s){

		 $db = Database::connect();
		 $pdo = $db->prepare("SELECT * FROM job");
		 $pdo->execute();
		 $result = $pdo->fetchAll(PDO::FETCH_OBJ);
		 Database::disconnect();
		 return $result;

/*
		 $sql = "select * from job where position like '%$s%' or jobTitle like '%$s%' ";


		 while($o=$q->fetch(PDO::FETCH_OBJ))
		 {
				 array_push($items, $o);
		 }
		 Database::disconnect();
*/

			return $items;
 	 }

 	 function createOne($obj){
 		 mysql_query("insert into job set jobFunctionId='$obj->jobFunctionId',
 																	positionTypeId='$obj->positionTypeId',
 																	position='$obj->position',
 																	company='$obj->company',
 																	comment='$obj->comment',
 																	workEmail='$obj->workEmail',
 																	jobTitle='$obj->jobTitle',
 																	businessPhone='$obj->businessPhone',
 																	owner='$obj->owner',
 																	createDate=NOW()
 																	");
 	 }

 	 function updateOne($obj){
		 mysql_query("update job set jobFunctionId='$obj->jobFunctionId',
 																 positionTypeId='$obj->positionTypeId',
 																 position='$obj->position',
 																 company='$obj->company',
 																 comment='$obj->comment',
 																 workEmail='$obj->workEmail',
 																 jobTitle='$obj->jobTitle',
 																 businessPhone='$obj->businessPhone',
 																 owner='$obj->owner',
																 createDate=NOW()
 																 where Id='$obj->Id'
 																 ");
 	 }
  }


	class Application {

		/* Retrieve one record */
		function readOne($val){
			 $query = mysql_query("select * from application where Id='$val'");
			 $get = mysql_fetch_object($query);
			 return $get;
		}

		/* Retrieve one record */
		function readList($val){
			$items = array();
			 $query = mysql_query("select * from application where coverLetter like '%$val%'");
			 while($o=mysql_fetch_object($query))
			 {
					 array_push($items, $o);
			 }
 			return $items;
		}

		function createOne($obj){
			mysql_query("insert into application set jobId='$obj->jobId',
																	 coverLetter='$obj->coverLetter',
																	 resume='$obj->resume',
																	 owner='$obj->owner',
  																 createDate=NOW()
																	 ");
		}

		function updateOne($obj){
			mysql_query("update application set jobId='$obj->jobId',
																	coverLetter='$obj->coverLetter',
																	resume='$obj->resume',
																	owner='$obj->owner',
 																	createDate=NOW()
																	where Id='$obj->Id'
																	");
		}
	 }


	 class Employee {

 		/* Retrieve one record */
 		function readOne($val){
 			 $query = mysql_query("select * from employee where Id='$val'");
 			 $get = mysql_fetch_object($query);
 			 return $get;
 		}

 		/* Retrieve one record */
 		function readList(){
 			$items = array();
 			 $query = mysql_query("select * from employee");
 			 while($o=mysql_fetch_object($query))
 			 {
 					 array_push($items, $o);
 			 }
 			return $items;
 		}

 		function createOne($obj){
 			mysql_query("insert into employee set jobId='$obj->jobId',
 																	 employee='$obj->employee',
  																 createDate=NOW()
 																	 ");
 		}

 		function updateOne($obj){
 			mysql_query("update employee set jobId='$obj->jobId',
 																	employee='$obj->employee',
 																	createDate=NOW()
 																	where Id='$obj->Id'
 																	");
 		}
 	 }


	 class JobFunction {

 		/* Retrieve one record */
 		function readList(){
 			$items = array();
 			 $query = mysql_query("select * from job_function");
 			 while($o=mysql_fetch_object($query))
 			 {
 					 array_push($items, $o);
 			 }
 			return $items;
 		}
 	 }


	 class PositionType {

			/* Retrieve one record */
			function readList(){
				$items = array();
				 $query = mysql_query("select * from position_type");
				 while($o=mysql_fetch_object($query))
				 {
						 array_push($items, $o);
				 }
	 			return $items;
			}
		 }

		class Experience {


			/* Retrieve one record */
			function readList($val){
				$items = array();
				 $query = mysql_query("select * from experience where owner='$val'");
				 while($o=mysql_fetch_object($query))
				 {
						 array_push($items, $o);
				 }
	 			return $items;
			}

			function createOne($obj){
				mysql_query("insert into experience set position='$obj->position',
																		 company='$obj->company',
 																		 start='$obj->start',
 																		 end='$obj->end',
 																		 description='$obj->description',
 																		 owner='$obj->owner'
																		 ");
			}

		}




/* =====================================Functions===================================== */

/* Retrieve one record */
function uploadFile($uploadedFile){
	// Where the file is going to be placed
	$target_path = "../media/";
	/* Add the original filename to our target path.
	Result is "uploads/filename.extension" */
	$target_path = $target_path . basename( $uploadedFile['name']);
	$temp = explode(".", $uploadedFile["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);

	if(move_uploaded_file($uploadedFile['tmp_name'], '../media/' . $newfilename)) {
			return $newfilename;
		}
		else{
			return 0;
		}

}

?>
