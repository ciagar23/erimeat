<?php
class Profile {
	 /* Member variables */
	 var $username;

	 /* Retrieve one record */
	 function login($username, $password, $level){
		 		$db = Database::connect();
	 		 	$pdo = $db->prepare("select * from user where username='$username' and password='$password' and level='$level'");
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
		 $pdo = $db->prepare("insert into user set username='$obj->username',
																	firstName='$obj->firstName',
																	lastName='$obj->lastName',
																	password='$obj->password',
																	level='$obj->level'
																	");
		 $pdo->execute();
		 Database::disconnect();
	 }

	 function updateOne($obj){
			 $db = Database::connect();
			 $pdo = $db->prepare("update user set username='$obj->username',
	 																 firstName='$obj->firstName',
	 																 lastName='$obj->lastName',
	 																 password='$obj->password',
	 																 level='$obj->level'
	 																 where username='$obj->username'
	 																 ");
			 $pdo->execute();
			 Database::disconnect();
	 }
 }

class Admin {
 	 /* Member variables */
 	 var $username;

 	 /* Retrieve one record */
 	 function login($username, $password, $level){
 		 		$db = Database::connect();
 	 		 	$pdo = $db->prepare("select * from admin where username='$username' and password='$password' and level='$level'");
 	 		 	$pdo->execute();
 	 		 	$result = $pdo->fetch(PDO::FETCH_OBJ);
 	 		 	Database::disconnect();
 				return $result;
 	 }

 	 /* Retrieve one record */
 	 function readOne($val){
 				$db = Database::connect();
 				$pdo = $db->prepare("select * from admin where username='$val'");
 				$pdo->execute();
 				$result = $pdo->fetch(PDO::FETCH_OBJ);
 				Database::disconnect();
 				return $result;
 	 }

 	 /* Retrieve one record */
 	 function readList(){
 			 $db = Database::connect();
 			 $pdo = $db->prepare("select * from admin");
 			 $pdo->execute();
 			 $result = $pdo->fetchAll(PDO::FETCH_OBJ);
 			 Database::disconnect();
 			 return $result;
 	 }

 	 function createOne($obj){
 		 $db = Database::connect();
 		 $pdo = $db->prepare("insert into admin set username='$obj->username',
 																	firstName='$obj->firstName',
 																	lastName='$obj->lastName',
 																	password='$obj->password',
 																	level='$obj->level'
 																	");
 		 $pdo->execute();
 		 Database::disconnect();
 	 }

 	 function updateOne($obj){
 			 $db = Database::connect();
 			 $pdo = $db->prepare("update admin set username='$obj->username',
 	 																 firstName='$obj->firstName',
 	 																 lastName='$obj->lastName',
 	 																 password='$obj->password',
 	 																 level='$obj->level'
 	 																 where username='$obj->username'
 	 																 ");
 			 $pdo->execute();
 			 Database::disconnect();
 	 }
}


class Job {

	 /* Retrieve one record */
	 function readOne($val){
	 $db = Database::connect();
	 $pdo = $db->prepare("select * from job where Id='$val'");
	 $pdo->execute();
	 $result = $pdo->fetch(PDO::FETCH_OBJ);
	 Database::disconnect();
	 return $result;
	 }

	 /* Retrieve one record */
	 function readList($s){

	 $db = Database::connect();
	 $pdo = $db->prepare("SELECT * FROM job");
	 $pdo->execute();
	 $result = $pdo->fetchAll(PDO::FETCH_OBJ);
	 Database::disconnect();
	 return $result;
	 }

	 function createOne($obj){
	 $db = Database::connect();
	 $pdo = $db->prepare("insert into job set refNum='$obj->refNum',
	 																jobFunctionId='$obj->jobFunctionId',
																	positionTypeId='$obj->positionTypeId',
																	firstName='$obj->firstName',
																	lastName='$obj->lastName',
																	position='$obj->position',
																	company='$obj->company',
																	comment='$obj->comment',
																	address='$obj->address',
																	workEmail='$obj->workEmail',
																	jobTitle='$obj->jobTitle',
																	businessPhone='$obj->businessPhone',
																	zipCode='$obj->zipCode',
																	requiredExperience='$obj->requiredExperience',
																	createDate=NOW()
																	");
	 $pdo->execute();
	 Database::disconnect();
	 }

	 function updateOne($obj){
	 $db = Database::connect();
	 $pdo = $db->prepare("update job set jobFunctionId='$obj->jobFunctionId',
																 positionTypeId='$obj->positionTypeId',
																 position='$obj->position',
																 company='$obj->company',
																 comment='$obj->comment',
																 workEmail='$obj->workEmail',
																 jobTitle='$obj->jobTitle',
																 businessPhone='$obj->businessPhone',
																 isApproved='$obj->isApproved',
															   createDate=NOW()
																 where Id='$obj->Id'
																 ");
	 $pdo->execute();
	 Database::disconnect();
	 }
}


class Resume {

	/* Retrieve one record */
	function readOne($val){
		$db = Database::connect();
		 $pdo = $db->prepare("select * from resume where Id='$val'");
		 $pdo->execute();
		 $result = $pdo->fetch(PDO::FETCH_OBJ);
		 Database::disconnect();
		 return $result;
	}

	/* Retrieve one record */
	function readList($val){
		$db = Database::connect();
		$pdo = $db->prepare("SELECT * FROM resume where jobFunctionId like '%$val%'");
		$pdo->execute();
		$result = $pdo->fetchAll(PDO::FETCH_OBJ);
		Database::disconnect();
		return $result;
	}

	function createOne($obj){
		$db = Database::connect();
		$pdo = $db->prepare("insert into resume set jobId='$obj->jobId',
															jobFunctionId='$obj->jobFunctionId',
															firstName='$obj->firstName',
															lastName='$obj->lastName',
															email='$obj->email',
															phoneNumber='$obj->phoneNumber',
															address1='$obj->address1',
															address2='$obj->address2',
															city='$obj->city',
															state='$obj->state',
															zipCode='$obj->zipCode',
															uploadedResume='$obj->uploadedResume',
															createDate=NOW()
															");
		$pdo->execute();
		Database::disconnect();
	}

	function updateOne($obj){
		$db = Database::connect();
		$pdo = $db->prepare("update resume set jobId='$obj->jobId',
															jobFunctionId='$obj->jobFunctionId',
															firstName='$obj->firstName',
															lastName='$obj->lastName',
															email='$obj->email',
															phoneNumber='$obj->phoneNumber',
															address1='$obj->address1',
															address2='$obj->address2',
															city='$obj->city',
															state='$obj->state',
															zipCode='$obj->zipCode',
															uploadedResume='$obj->uploadedResume',
															isApproved='$obj->isApproved',
														 	createDate=NOW()
														 	where Id='$obj->Id'
														 	");
		$pdo->execute();
		Database::disconnect();
	}
 }


class Employee {

	/* Retrieve one record */
	function readOne($val){
	$db = Database::connect();
	$pdo = $db->prepare("select * from employee where Id='$val'");
	$pdo->execute();
	$result = $pdo->fetch(PDO::FETCH_OBJ);
	Database::disconnect();
	return $result;
	}

	/* Retrieve one record */
	function readList(){
	$db = Database::connect();
	$pdo = $db->prepare("SELECT * FROM employee");
	$pdo->execute();
	$result = $pdo->fetchAll(PDO::FETCH_OBJ);
	Database::disconnect();
	return $result;
	}

	function createOne($obj){
	$db = Database::connect();
	$pdo = $db->prepare("insert into employee set jobId='$obj->jobId',
																 employee='$obj->employee',
															 createDate=NOW()
																 ");
	$pdo->execute();
	Database::disconnect();
	}

	function updateOne($obj){
	$db = Database::connect();
	$pdo = $db->prepare("update employee set jobId='$obj->jobId',
																employee='$obj->employee',
																createDate=NOW()
																where Id='$obj->Id'
																");
	$pdo->execute();
	Database::disconnect();
	}
 }


class JobFunction {

	/* Retrieve one record */
	function readOne($val){
	$db = Database::connect();
	$pdo = $db->prepare("select * from job_function where Id='$val'");
	$pdo->execute();
	$result = $pdo->fetch(PDO::FETCH_OBJ);
	Database::disconnect();
	return $result;
	}

	/* Retrieve one record */
	function readList(){
	$db = Database::connect();
	$pdo = $db->prepare("SELECT * FROM job_function");
	$pdo->execute();
	$result = $pdo->fetchAll(PDO::FETCH_OBJ);
	Database::disconnect();
	return $result;
	}
 }


class PositionType {

	/* Retrieve one record */
	function readList(){
		$db = Database::connect();
		$pdo = $db->prepare("SELECT * FROM position_type");
		$pdo->execute();
		$result = $pdo->fetchAll(PDO::FETCH_OBJ);
		Database::disconnect();
		return $result;
	}
 }

class Experience {

		/* Retrieve one record */
		function readList($val){
			$db = Database::connect();
			$pdo = $db->prepare("SELECT * FROM experience where owner='$val'");
			$pdo->execute();
			$result = $pdo->fetchAll(PDO::FETCH_OBJ);
			Database::disconnect();
			return $result;
		}

		function createOne($obj){
			$db = Database::connect();
			$pdo = $db->prepare("insert into experience set position='$obj->position',
																	 company='$obj->company',
																		 start='$obj->start',
																		 end='$obj->end',
																		 description='$obj->description',
																		 owner='$obj->owner'
																	 ");
			$pdo->execute();
			Database::disconnect();
		}
}

class EmployeeTimesheet {

	function readList($val){
			$db = Database::connect();
			$pdo = $db->prepare("SELECT * FROM dtr where username='$val'");
			$pdo->execute();
			$result = $pdo->fetchAll(PDO::FETCH_OBJ);
			Database::disconnect();
			return $result;
		}
}

class Company {

	/* Retrieve one record */
	function readOne($val){
	$db = Database::connect();
	$pdo = $db->prepare("select * from company where Id='$val'");
	$pdo->execute();
	$result = $pdo->fetch(PDO::FETCH_OBJ);
	Database::disconnect();
	return $result;
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
