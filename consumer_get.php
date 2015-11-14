<meta charset = "UTF-8">

<?php
	$host = "localhost";
	$username = "iri";
	$password = "hackaton";
	$db_name = "iri";

	$con = mysql_connect("$host", "$username", "$password") or die ("cannot connect");
	mysql_query("set names utf8");
	mysql_select_db("$db_name") or die ("cannot select DB");
	$sql = "select * from consumer";
	$result = mysql_query($sql);
	$json = array();

	if(mysql_num_rows($result)) {
		while($row=mysql_fetch_assoc($result)) {
		$json['consumer'][]=$row;
		}
	}
	mysql_close($con);
///	echo "안녕하세요";
	echo json_encode($json);
?>

