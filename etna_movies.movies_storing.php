<?php
if ($argc == 1)
{
	require_once('includes/movies.utils.php');
	if (!file_exists('movies.csv'))
		puts('movies.csv: file not found.');
	elseif (!is_readable('movies.csv'))
		puts('movies.csv: access denied.');
	elseif (!($file_r = fopen('movies.csv', 'r')))
		puts('movies.csv: could not open file.');
	else
	{
		$col = fgetcsv($file_r);
		$col = array(
			'imdb_code' => array_search('const', $col),
			'title' => array_search('Title', $col),
			'year' => array_search('Year', $col),
			'genres' => array_search('Genres', $col),
			'directors' => array_search('Directors', $col),
			'rate' => array_search('IMDb Rating', $col),
			'link' => array_search('URL', $col)
		);
		$count = 0;
		while ($line = fgetcsv($file_r))
		{
			movies_insert(array(
				'imdb_code' => $line[$col['imdb_code']],
				'title' => $line[$col['title']],
				'year' => (int)$line[$col['year']],
				'genres' => explode(', ', $line[$col['genres']]),
				'directors' => explode(', ', $line[$col['directors']]),
				'rate' => (double)$line[$col['rate']],
				'link' => $line[$col['link']],
				'stock' => rand(0, 5),
				'renting_students' => []
			));
			$count++;
		}
		fclose($file_r);
		puts($count .' movies successfully stored !');
	}
}
else
	puts('Usage: ./etna_movies.php movies_storing');