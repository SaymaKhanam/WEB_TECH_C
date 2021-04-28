<?php 

include("../model/db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$password = $_POST["password"];

        $connection = new db();
        $conn=$connection->OpenCon();


        $result=  $conn->query( "UPDATE admin set APassword = '".$password."'");
		if($result) {
            echo "true";
        }
        $conn -> close();

}
?>
