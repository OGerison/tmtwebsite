<?php
$host = "localhost";
$user ="root"; 
$password = "";
$database = "tmtwebsite";
$connection = new mysqli ($host,$user,$password,$database);
if ($connection -> error)
{print("ERROR");
}
else {
	print ("SUCCESSFUL");
}

?>