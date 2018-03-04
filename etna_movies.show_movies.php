<?php
require_once('includes/movies.utils.php');
$commands = array(
	'' => 'Shows A-Z movies.',
	'desc' => 'Show Z-A movies',
	'genre' => 'Shows all movies with the given tag.',
	'year' => 'Shows all movies of the given year.',
	'rate' => 'Shows all movies close to the given rate.'
);

if ($argc == 2 && $argv[1] == 'help')
{
	puts('usage: ' .$argv[0] .' command login_n');
	puts('Available comands:');
	foreach ($commands as $com_n => $com_v)
		puts("\t" .$com_n .': ' .$com_v);
}
elseif ($argc == 1)
	movies_show_all();
elseif ($argc == 2 && $argv[1] == 'desc')
	movies_show_desc();
elseif ($argc == 3 && $argv[1] && $argv[1] != 'desc')
{
	if (isset($commands[$argv[1]]))
	{
		array_splice($argv, 0, 1);
		$argc--;
		$function = 'movies_show_' .$argv[0];
		$function($argv);
	}
	else
		puts($argv[1] .': Unknow command.');
}
else
	puts('Syntax error. Run \'help\' for further information.');