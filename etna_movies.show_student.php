<?php
require_once('includes/student.utils.php');
if ($argc == 1)
	student_show_all();
elseif ($argc == 2)
{
	if (!student_validate_login($argv[1]))
		puts($argv[1] .': is not a valid login.');
	elseif (!student_exists($argv[1]))
		puts($argv[1] .': student does not exist.');
	else
		student_show($argv[1]);
}
else
	puts('Usage: ./etna_movies.php update_student login_n');