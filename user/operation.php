<?php
class Profile {
	 /* Member variables */
	 var $username;
	 var $firstName;
	 var $lastName;
	 var $email;
	 var $contact;
	 var $linbdin;
	 var $skype;
	 var $aboutMe;
	 var $address;

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

	 function createOne(){
		 mysql_query("insert into user set userName='$this->username',
													 						 firstName='$this->firstName',
																			 lastName='$this->lastName',
																			 email='$this->email',
																			 contact='$this->contact',
																			 address='$this->address',
																			 aboutMe='$this->aboutMe',
																			 linkdin='$this->linkdin',
																			 skype='$this->skype'
													 					 	 ");
	 }

	 function updateOne($val){
		mysql_query("update user set userName='$this->username',
																 firstName='$this->firstName',
																 lastName='$this->lastName',
																 email='$this->email',
																 contact='$this->contact',
																 address='$this->address',
																 aboutMe='$this->aboutMe',
																 linkdin='$this->linkdin',
																 skype='$this->skype'
																 where userName='$val'
																 ");
	 }
 }

?>
