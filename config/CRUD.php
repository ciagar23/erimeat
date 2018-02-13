<?php
class Profile {
	 /* Member variables */
	 var $username;

	 /* Retrieve one record */
	 function readOne($val){
	 		$query = mysql_query("select * from user where username='$val'");
	 	 	$get = mysql_fetch_object($query);
			return $get;
	 }

	 /* Retrieve one record */
	 function readList(){
		 $items = array();
	 		$query = mysql_query("select * from user");
			while($o=mysql_fetch_object($query))
			{
			    array_push($items, $o);
			}
			return $items;
	 }

	 function createOne($obj){
		 mysql_query("insert into user set userName='$obj->username',
																	firstName='$obj->firstName',
																	lastName='$obj->lastName',
																	email='$obj->email',
																	contact='$obj->contact',
																	address='$obj->address',
																	aboutMe='$obj->aboutMe',
																	linkdin='$obj->linkdin',
																	skype='$obj->skype'
																	");
	 }

	 function updateOne($obj){
		mysql_query("update user set userName='$obj->username',
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
 	 function readList(){
 		 $items = array();
 	 		$query = mysql_query("select * from job");
 			while($o=mysql_fetch_object($query))
 			{
 			    array_push($items, $o);
 			}
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
		function readList(){
			$items = array();
			 $query = mysql_query("select * from application");
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

?>
