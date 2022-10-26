<?php 
require_once '../config.php';
require_once '../function.php';
session_start();
// Registration system start
/*sign up*/
if (@$_POST['type'] == 'signup'){
	$name = mysqli_real_escape_string ($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
	$response = [];
	$data = select('registration', '*', "email='$email'");
	if(@$data[0]){
		$response = array(
			'status' => false ,
			'message' => 'User already exist!'
		);
	}
	elseif ($password !== $cpassword) {
		$response = array(
			'status' => false ,
			'message' => 'Both password are not matched!',
		);
	}
	elseif(strlen(trim($password)) < 8){
		$response = array(
			'status' => false ,
			'message' => 'Password must have atleast 8 characters!',
		);
	}
	elseif(!preg_match("#[0-9]+#",$password)) {
		$response = array(
			'status' => false ,
			'message' => 'Your Password Must Contain At Least 1 Number!',
		);
	}
	elseif(!preg_match("#[A-Z]+#",$password)) {
		$response = array(
			'status' => false ,
			'message' => 'Your Password Must Contain At Least 1 Capital Letter!',
		);
	}
	elseif(!preg_match("#[a-z]+#",$password)) {
		$response = array(
			'status' => false ,
			'message' => 'Your Password Must Contain At Least 1 Lowercase Letter!',
		);
	}
	else{
		$data = [
			'name' => @$name,
			'email' => @$email,
			'password' => password_hash($password, PASSWORD_BCRYPT)
		];
		$insert = insert('registration', $data);
		$response = array(
			'status' => true ,
			'message' => 'You have successfully signed up',
		);
	}
	echo json_encode($response);
	exit();
}

/*sign in*/
if (@$_POST['type'] == 'signin' ){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$response =[];
	$data = select('registration', '*', "email='$email'");
	$_SESSION['email'] = $email;
	if(@$data[0]){
		$decode = password_verify($password, $data[0]['password']);
		if ($decode == false) {
			$response = array(
				'status' => false ,
				'message' => 'Your Password is incorrect',
			);
		}
		elseif ($decode == true) {
			$response = array(
				'status' => true ,
				'message' => 'You have successfully signed in',
			);
		}
	}
	else{
		$response = array(
			'status' => false ,
			'message' => 'Your E-mail is incorrect',
		);
	}
	echo json_encode($response);
	exit();
};
// Registration system end
