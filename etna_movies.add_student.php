<?php
if ($argc == 2)
{
	require_once('includes/student.utils.php');
	if (!student_validate_login($argv[1]))
		puts($argv[1] .': is not a valid login.');
	elseif (student_exists($argv[1]))
		puts($argv[1] .': student already exists.');
	else
	{
		student_add(array(
			'login' => $argv[1],
			'name' => ask_validate('Name ?', 'student_validate_name'),
			'age' => ask_validate('Age ?', 'student_validate_age'),
			'email' => ask_validate('Email ?', 'student_validate_email'),
			'phone' => ask_validate('Phone Number ?', 'student_validate_phone'),
			'rented_movies' => []
		));
		puts('User registered !');
	}
}
else
	puts('Usage: ./etna_movies.php add_student login_n');