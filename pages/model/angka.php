<?php
require_once 'database.php';
function add_angka($post){
	$db = new Database();
	$q = "INSERT INTO angka(nama_angka, link, diskripsi) VALUES ('$post[nama]','$post[link]','$post[diskripsi]')";
	if($db->query($q)){
		header('Location: ../angka-list.php');
	}
}
function edit_angka($post){
	$db = new Database();
	$q = "UPDATE angka SET nama_angka='$post[nama]',link='$post[link]',diskripsi='$post[diskripsi]' WHERE id = '$post[id]'";
	if($db->query($q)){
		header('Location: ../angka-list.php');
	}
}
function delete_angka($id){
	$db = new Database();
	$q = "DELETE FROM angka WHERE id='$id'";
	if($db->query($q)){
		header('Location: ../angka-list.php');
	}
}
function show_angka($id = null,$join = []){
	$db = new Database();
	$q = "SELECT * FROM angka ORDER BY nama_angka";
	if($id != null){
		$q .= " WHERE id = '$id'";
	}
	if($db->query($q)){
		return $db->fetch();
	}

}
if(isset($_GET['f'])){
	switch ($_GET['f']){
		case 'delete':
			delete_angka( $_GET['id']);
			break;
		default:return;
	}
}

if(isset($_POST['button'])){
	switch ($_POST['button']){
		case 'tambah':
			add_angka($_POST);
			break;
		case 'edit':
			edit_angka( $_POST);
			break;
		default:echo 'No route available';
	}
}