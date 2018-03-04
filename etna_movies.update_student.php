<?php
if ($argc == 2)
{
	require_once('includes/student.utils.php');
	if (!student_validate_login($argv[1]))
		puts($argv[1] .': is not a valid login.');
	elseif (!student_exists($argv[1]))
		puts($argv[1] .': student does not exist.');
	else
	{
		$key = ask_validate('What do you want to update?', function($answer){
			global $student_keys;
			return ($answer != 'login' && in_array($answer, $student_keys));
		});
		if ($key != 'phone')
			$value = ask_validate("New $key ?", "student_validate_$key");
		else
			$value = ask_validate('New phone number ?', 'student_validate_phone');
		student_update($argv[1], $key, $value);
		puts('User informations modified !');
	}
}
else
	puts('Usage: ./etna_movies.php update_student login_n');