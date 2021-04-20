<?php 
		$host="localhost";
		$dbuser="tharu";
		$pass="hotwater";
		$dbname="quizsystem";
		//The mysqli_connect() function attempts to open a connection to the MySQL Server running on host which can be either a host name or an IP address. 
		//The username and password parameters specify the username and password under which to connect to the MySQL server.
		//The dbname parameter if provided will specify the default database to be used when performing queries.
		$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		//Returns a object which represents the connection to a MySQL Server or FALSE if the connection failed.
		if(!$conn)
		{
			echo"error";
		}
?>