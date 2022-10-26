<?php 
require_once '../config.php';
require_once '../function.php';
// purchase section start 
// purchase insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'supplier_id' => $_POST['supplierid'],
		'weight' => $_POST['weight']
	];
	$insert = insert('purchase', $data);
	echo json_encode($insert);
	exit();
};

// purchase update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'supplier_id' => $_POST['supplierid'],
		'weight' => $_POST['weight']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('purchase', $data, $where);
	echo json_encode($insert);
	exit();
};
	//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('purchase', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};
// purchase section end