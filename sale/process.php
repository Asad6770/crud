<?php 
require_once '../config.php';
require_once '../function.php';

// sale section start 
// sale insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'customer_id' => $_POST['customerId'],
		'qty' => $_POST['qty'],
		'price' => $_POST['price']
	];
	$insert = insert('sale', $data);
	echo json_encode($insert);
	exit();
};

// sale update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'customer_id' => $_POST['customerId'],
		'qty' => $_POST['qty'],
		'price' => $_POST['price']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('sale', $data, $where);
	echo json_encode($insert);
	exit();
};
	//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('sale', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};
// sale section end
