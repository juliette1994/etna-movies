#!/usr/bin/env php
<?php
require_once('includes/io.utils.php');

$commands = array(
	'add_student' => 'Adds a student.',
	'del_student' => 'Deletes a student.',
	'update_student' => 'Updates a student\'s data.',
	'show_student' => 'Shows a student\'s information.',
	'movies_storing' => 'Loads the movies.csv file into database.',
	'show_movies' => 'Lists available movies.'
);

if ($argc == 2 && $argv[1] == 'help')
{
	puts('usage: ' .$argv[0] .' command login_n');
	puts('Available comands:');
	foreach ($commands as $com_n => $com_v)
		puts("\t" .$com_n .': ' .$com_v);
}
elseif ($argc >= 2)
{
	if (isset($commands[$argv[1]]))
	{
		array_splice($argv, 0, 1);
		$argc--;
		if (is_file('etna_movies.'. $argv[0] .'.php'))
			require_once('etna_movies.'. $argv[0] .'.php');
		else
			puts('Could not open source file.');
	}
	else
		puts($argv[1] .': Unknow command.');
}
else
	puts('usage: ' .$argv[0] .' command (run \'help\' for further information');