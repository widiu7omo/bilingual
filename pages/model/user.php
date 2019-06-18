<?php
session_start();
require_once 'database.php';
function add_user($post){
	$db = new Database();
	$q = "INSERT INTO user(username, password) VALUES ('$post[username]','$post[password]')";
	if($db->query($q)){
		header('Location: ../user-list.php');
	}
}
function edit_user($post){
	$db = new Database();
	$q = "UPDATE user SET username='$post[username]',password='$post[password]' WHERE id = '$post[id]'";
	if($db->query($q)){
		header('Location: ../user-list.php');
	}
}
function delete_user($id){
	$db = new Database();
	$q = "DELETE FROM user WHERE id='$id'";
	if($db->query($q)){
		header('Location: ../user-list.php');
	}
}
function show_user($id = null,$join = []){
	$db = new Database();
	$q = "SELECT * FROM user ORDER BY nama_user";
	if($id != null){
		$q .= " WHERE id = '$id'";
	}
	if($db->query($q)){
		return $db->fetch();
	}
}
function login($post){
	$db = new Database();
	$q = "SELECT * FROM user WHERE username = '$post[username]' AND password = '$post[password]' ";
//	var_dump($q);
	if($db->query($q)){
		$result = $db->fetch();
		if(count($result)>0){
			$_SESSION['user_id'] = $result[0]->id;
			$_SESSION['username'] = $result[0]->username;
			header( 'Location: ../index.php');
		}
		else{
			$_SESSION['status'] = (object) ['status'=>'fail','message'=>'Login gagal'];
			header( 'Location: ../login.php');
		}
	}
}
if(isset($_GET['f'])){
	switch ($_GET['f']){
		case 'delete':
			delete_user( $_GET['id']);
			break;
		case 'logout':
			session_destroy();
			header('Location: ../login.php');
			break;
		default:return;
	}
}

if(isset($_POST['button'])){
	switch ($_POST['button']){
		case 'tambah':
			add_user($_POST);
			break;
		case 'edit':
			edit_user( $_POST);
			break;
		case 'login':
			login($_POST);
			break;
		default:echo 'No route available';
	}
}