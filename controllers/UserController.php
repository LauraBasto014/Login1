<?php

include '../config/UserDao.php';

class UserController{

	public static login($email_user, $pass_user,){
		$obj_user = new User();
		$obj_user->setEmail_user($email_user);
		$obj_user->setEmail_user($pass_user);

		return UserDao::login($obj_user);
	}
}