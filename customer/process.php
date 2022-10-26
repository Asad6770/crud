<?php 
require_once '../config.php';
require_once '../function.php';

// customer section start 
// customer insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'name' => $_POST['name'],
		'mobile' => $_POST['mobile'],
		'address' => $_POST['address']
	];
	$insert = insert('customer', $data);
	echo json_encode($insert);
	exit();
};

// customer update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'name' => $_POST['name'],
		'mobile' => $_POST['mobile'],
		'address' => $_POST['address']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('customer', $data, $where);
	echo json_encode($insert);
	exit();
};
	//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('customer', $where);
	echo json_encode($insert);
	header('location: index.php');
	exit();
};
// customer section end