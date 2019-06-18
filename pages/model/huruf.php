<?php
require_once 'database.php';

function add_huruf($post){
	$db = new Database();
	$q = "INSERT INTO huruf(nama_huruf, link, diskripsi) VALUES ('$post[nama]','$post[link]','$post[diskripsi]')";
	if($db->query($q)){
		header('Location: ../huruf-list.php');
	}
}
function edit_huruf($post){
	$db = new Database();
	$q = "UPDATE huruf SET nama_huruf='$post[nama]',link='$post[link]',diskripsi='$post[diskripsi]' WHERE id = '$post[id]'";
	if($db->query($q)){
		header('Location: ../huruf-list.php');
	}
}
function delete_huruf($id){
	$db = new Database();
	$q = "DELETE FROM huruf WHERE id='$id'";
	if($db->query($q)){
		header('Location: ../huruf-list.php');
	}
}
function show_huruf($id = null,$join = []){
	$db = new Database();
	$q = "SELECT * FROM huruf";
	if($id != null){
		$q .= " WHERE id = '$id'";
	}
	$q .= ' ORDER BY nama_huruf';
	if($db->query($q)){
		return $db->fetch();
	}

}
if(isset($_GET['f'])){
	switch ($_GET['f']){
		case 'delete':
			delete_huruf( $_GET['id']);
			break;
		default:return;
	}
}

if(isset($_POST['button'])){
	switch ($_POST['button']){
		case 'tambah':
			add_huruf($_POST);
			break;
		case 'edit':
			edit_huruf( $_POST);
			break;
		default:echo 'No route available';
	}
}