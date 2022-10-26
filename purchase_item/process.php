<?php 
require_once '../config.php';
require_once '../function.php';

// purchase item section start 
// purchase item insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'product_id' => $_POST['productId'],
		'purchase_id' => $_POST['purchaseId'],
		'name' => $_POST['name'],
		'price' => $_POST['price'],
		'qty' => $_POST['qty'],
		'type' => $_POST['itemType']
	];
	$insert = insert('purchase_item', $data);
	echo json_encode($insert);
	exit();
};

// purchase item update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'product_id' => $_POST['productId'],
		'purchase_id' => $_POST['purchaseId'],
		'name' => $_POST['name'],
		'price' => $_POST['price'],
		'qty' => $_POST['qty'],
		'type' => $_POST['itemType']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('purchase_item', $data, $where);
	echo json_encode($insert);
	exit();
};
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('purchase_item', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};