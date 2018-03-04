<?php
if ($argc == 3)
{
	require_once('includes/movies.utils.php');
	require_once('includes/student.utils.php');
	if (!student_validate_login($argv[1]))
		puts($argv[1] .': is not a valid login.');
	elseif (!student_exists($argv[1]))
		puts($argv[1] .': student does not exist.');
	else
	{
		if (!movies_exists($argv[2]))
			puts($argv[2] .': movies does not exists.');
		elseif (!movies_stock($argv[2]))
			puts('Stock-out !');
		elseif (student_movie_rented($argv[1], $argv[2]))
			puts('Error: you already rent this movie.');
		else
		{
			movies_rent($argv[1], $argv[2]);
			puts('Rented !');
		}
	}
}
else
	puts('Usage: ./etna_movies.php rent_movie login_n imdb_code');