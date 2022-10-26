<?php 
require_once '../config.php';
require_once '../function.php';
// Registration system start
/*sign up*/
//session_start();

// product section start 
// product item insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'supplier_id' => $_POST['supplierId'],
		'name' => $_POST['name'],
		'price' => $_POST['price'],
		'qty' => $_POST['qty'],
		'type' => $_POST['itemType']
	];
	$insert = insert('product', $data);
	echo json_encode($insert);
	exit();
};

// product item update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'supplier_id' => $_POST['supplierId'],
		'name' => $_POST['name'],
		'price' => $_POST['price'],
		'qty' => $_POST['qty'],
		'type' => $_POST['itemType']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('product', $data, $where);
	echo json_encode($insert);
	exit();
};
	//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('product', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};
// product item section end