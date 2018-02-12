<?php

function user_exist($idnumber){
	$query = mysql_query("select * from user where idnumber='$idnumber'");
	if (mysql_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}



function buildProctorOptions($catId = 0)
{
	$sql = "SELECT Id, idnumber, first_name, last_name
			FROM user
			WHERE auth='Faculty'
			ORDER BY Id";
	$result = mysql_query($sql);
	
	$categories = array();
	while($row = mysql_fetch_array($result)) {
		list($id, $idnumber, $first_name, $last_name) = $row;
		
			// we create a new array for each top level categories
			$categories[$id] = array('first_name' => $first_name,'last_name' => $last_name,'idnumber' => $idnumber);
			

	}	
	
	// build combo box options
	$list = '';
	foreach ($categories as $key => $value) {
		$name     = $value['first_name'] .' '.$value['last_name'];
		$idnumber = $value['idnumber'];
		
		$list .= "<option value=\"$idnumber\"";
		if ($idnumber == $catId) {
			$list.= " selected";
		}
			
		$list .= ">$name</option>\r\n";
	}
	
	return $list;
}

?>