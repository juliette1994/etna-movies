<?php
function	student_validate_login(&$login)
{
	if (preg_match('#^[\da-z]{1,6}_[\da-z]$#i', $login))
	{
		$login = strtolower($login);
		return (true);
	}
	return (false);
}

function	student_validate_name(&$name)
{
	$name = ucfirst($name);
	return ($name || 0);
}

function	student_validate_age(&$age)
{
	$age = (int)$age;
	return ($age >= 1 && $age <= 99);
}

function	student_validate_email(&$email)
{
	return (preg_match('|^[a-z0-9!#$%&\'*+/=?^_`{\|}~-]+(?:\.[a-z0-9!#$%&\'*+/='
		.'?^_`{\|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0'
		.'-9-]*[a-z0-9])?$|', $email));
}

function	student_validate_phone(&$phone)
{
	return (preg_match('#^\d{10}$#', $phone));
}