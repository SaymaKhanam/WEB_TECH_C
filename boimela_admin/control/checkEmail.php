
<?php


include("../model/db.php");
if($_SERVER["REQUEST_METHOD"] == "GET") {

	if(!empty($_GET['email'])){
		$connection = new db();
        $conobj=$connection->OpenCon();
        $returnQuery = $connection->checkEmail($conobj, $_GET['email']);
        if($returnQuery==1){
        	$value = array(
        		'status' => 1,
        		'message' => 'Unique'
        	);
        }else{
        	$value = array(
        		'status' => 0,
        		'message' => 'Exist'
        	);
        }

        echo json_encode($value);
	}
}