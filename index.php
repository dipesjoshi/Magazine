<?php
	include $_SERVER['DOCUMENT_ROOT'].'config/init.php';
	redirect('cms/index');
	redirect('cms/index');

	$user = new user();
	$data = array(
			'username' =>'Khwopa',
			'email' =>'khwopa@magazine.com',
			'role'=>'Admin',
			'session_token'=>tokenize()
	);
	// $user->addUser($data);
	// $datas=$user->getUserbyEmail('khwopa@magazine.com');
	// $datas=$user->updateUserbyEmail($data,'khwopa@magazine.com');
	// debugger($datas);
	$user->deleteUserbyEmail('khwopa@magazine.com');
?>	