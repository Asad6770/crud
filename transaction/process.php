<?php 
require_once '../config.php';
require_once '../function.php';

// transaction section start 
// transaction insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'supplier_id' => $_POST['supplierId'],
		'amount' => $_POST['amount'],
		'transaction_method' => $_POST['transactionMethod']
	];
	$insert = insert('transaction', $data);
	echo json_encode($insert);
	exit();
};

// transaction update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'supplier_id' => $_POST['supplierId'],
		'amount' => $_POST['amount'],
		'transaction_method' => $_POST['transactionMethod']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('transaction', $data, $where);
	echo json_encode($insert);
	exit();
};
	//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('transaction', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};
?>