<?php
$userlist;

$users = json_decode("users",true);

foreach($users as $user){
	array_push($userlist, new User($user));
}

class User{
	function __construct($user){
		$this->name = $user["user"];
	}
}
?>