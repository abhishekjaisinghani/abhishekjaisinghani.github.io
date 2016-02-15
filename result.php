<?php
	include("dbconnect.php");

	if(!isset($_POST['restsearch']))
	{
		header("Location:index.html");
	}
	$search_sql="SELECT * FROM restaurant WHERE name LIKE '%".$_POST['restsearch']."%'";
	$search_query=mysql_query($search_sql);
	if(mysql_num_rows($search_query)!=0)
	{
	$search_rs=mysql_fetch_assoc($search_query);
	}

	?>