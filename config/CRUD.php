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

?>
