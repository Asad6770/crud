<?php 
require_once '../config.php';
require_once '../function.php';

// payment section start 
// payment insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'sale_id' => $_POST['saleId'],
		'customer_id' => $_POST['customerId'],
		'amount' => $_POST['amount'],
		'method' => $_POST['method']
	];
	$insert = insert('payment', $data);
	echo json_encode($insert);
	exit();
};

// payment update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'sale_id' => $_POST['saleId'],
		'customer_id' => $_POST['customerId'],
		'amount' => $_POST['amount'],
		'method' => $_POST['method']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('payment', $data, $where);
	echo json_encode($insert);
	exit();
};
	//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('payment', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};
// payment section end
