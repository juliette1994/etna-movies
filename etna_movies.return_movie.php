<?php
if ($argc == 3)
{
	require_once('includes/movies.utils.php');
	require_once('includes/student.utils.php');
	if (!student_validate_login($argv[1]))
		puts('Error: is not a valid login.');
	elseif (!student_exists($argv[1]))
		puts('Error: student does not exist.');
	else
	{
		if (!movies_exists($argv[2]))
			puts('Error: movies does not exists.')
		elseif (!student_movie_rented($argv[1], $argv[2]))
			puts('Error: you did not rent this movie.');
		else
		{
			movies_return($argv[1], $argv[2]);
			puts('Returned');
		}
	}
}
else
	puts('Usage: ./etna_movies.php return_movie login_n imdb_code');