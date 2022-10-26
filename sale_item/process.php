<?php 
require_once '../config.php';
require_once '../function.php';

// sale item section start 
// sale item insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'product_id' => $_POST['productId'],
		'sale_id' => $_POST['saleId'],
		'name' => $_POST['name'],
		'type' => $_POST['itemType']
	];
	$insert = insert('sale_item', $data);
	echo json_encode($insert);
	exit();
};

// sale item update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'product_id' => $_POST['productId'],
		'sale_id' => $_POST['saleId'],
		'name' => $_POST['name'],
		'type' => $_POST['itemType']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('sale_item', $data, $where);
	echo json_encode($insert);
	exit();
};
//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('sale_item', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};
// sale item section end
