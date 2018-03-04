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
		puts('Are you sure ?');
		if (preg_match('#^(oui|yes)$#i', readline('> ')))
		{
			student_delete($argv[1]);
			puts('User deleted !');
		}
		else
			puts($argv[1] .': delete canceled.');
	}
}
else
	puts('Usage: ./etna_movies.php del_student login_n');