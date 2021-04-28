<?php


include("../model/db.php");

function deleteSeller($id){
		$where = 'SID = \''.$id.'\'';
    	$connection = new db();
        $conobj=$connection->OpenCon();
        $returnQuery = $connection->DeleteWhere($conobj, 'seller', $where);
		$finalreport = "Delete Seller Succecfull!";
        header("location: ../view/ManageSeller.php? finalreport=".$finalreport);
    	die();
}

function rejectSeller($id){
	$where = 'SID = \''.$id.'\'';
	$connection = new db();
	$conobj=$connection->OpenCon();
	$returnQuery = $connection->DeleteWhere($conobj, 'seller', $where);
	$finalreport = "Reject Seller Succecfull!";
	header("location: ../view/NewMemberRequest.php? finalreport=".$finalreport);
	die();
}

function deleteBuyer($id){
		$where = 'BID = \''.$id.'\'';
    	$connection = new db();
        $conobj=$connection->OpenCon();
        $returnQuery = $connection->DeleteWhere($conobj, 'buyer', $where);
		$finalreport = "Delete Buyer Succecfull!";
        header("location: ../view/ManageBuyer.php? finalreport=".$finalreport);
    	die();
}

function deleteDeliveryman($id){
		$where = 'DID = \''.$id.'\'';
    	$connection = new db();
        $conobj=$connection->OpenCon();
        $returnQuery = $connection->DeleteWhere($conobj, 'delivery', $where);
		$finalreport = "Delete Deliveryman Succecfull!";
        header("location: ../view/ManageDeliveryman.php? finalreport=".$finalreport);
    	die();
}

function rejectDeliveryman($id){
	$where = 'DID = \''.$id.'\'';
	$connection = new db();
	$conobj=$connection->OpenCon();
	$returnQuery = $connection->DeleteWhere($conobj, 'delivery', $where);
	$finalreport = "Reject Deliveryman Succecfull!";
	header("location: ../view/NewMemberRequest.php? finalreport=".$finalreport);
	die();
}

function acceptDeliveryman($id){
	$where = 'DID = \''.$id.'\'';
	$connection = new db();
	$conn=$connection->OpenCon();
	$result= $conn->query( "UPDATE delivery SET DStatus = 1 WHERE ".$where);
	$finalreport = "Accept Deliveryman Succecfull!";
	header("location: ../view/NewMemberRequest.php? finalreport=".$finalreport);
	die();
}


function acceptSeller($id){
	$where = 'SID = \''.$id.'\'';
	$connection = new db();
	$conn=$connection->OpenCon();
	$result= $conn->query( "UPDATE seller SET SStatus = 1 WHERE ".$where);
	$finalreport = "Accept Seller Succecfull!";
	header("location: ../view/NewMemberRequest.php? finalreport=".$finalreport);
	die();
}


if($_SERVER["REQUEST_METHOD"] == "GET") {

	if(!empty($_GET['method'])){
		if($_GET['method'] == 'seller'){
			deleteSeller($_GET['id']);
		}
		else if($_GET['method'] == 'buyer'){
			deleteBuyer($_GET['id']);
		}
		else if($_GET['method'] == 'deliveryman'){
			deleteDeliveryman($_GET['id']);
		}
		else if($_GET['method'] == 'deliverymanaccept'){
			acceptDeliveryman($_GET['id']);
		}
		else if($_GET['method'] == 'deliverymanreject'){
			rejectDeliveryman($_GET['id']);
		}
		else if($_GET['method'] == 'selleraccept'){
			acceptSeller($_GET['id']);
		}
		else if($_GET['method'] == 'sellerreject'){
			rejectSeller($_GET['id']);
		}
	}

}




 ?>