<?php 
require_once '../config.php';
require_once '../function.php';
// supplier section start 
// supplier insert data 
if (@$_POST['type'] == 'create') {
	$data = [
		'name' => $_POST['name'],
		'address' => $_POST['address'],
		'mobile	' => $_POST['mobile'],
		'bank' => $_POST['bank']
	];
	$insert = insert('supplier', $data);
	echo json_encode($insert);
	exit();
};

// supplier update data
if (@$_POST['type'] == 'edit') {
	$data = [
		'name' => $_POST['name'],
		'address' => $_POST['address'],
		'mobile	' => $_POST['mobile'],
		'bank' => $_POST['bank']
	];
	$where = 'id= ' . $_POST['id'];
	$insert = update('supplier', $data, $where);
	echo json_encode($insert);
	exit();
};
//calling delete function
if (@$_GET['id']) {
	$where = 'id=' .$_GET['id']; 
	$insert = delete('supplier', $where);
	echo json_encode($insert);
	header('location: 
		index.php');
	exit();
};
// supplier section end

