<?php
function	movies_display($document)
{
	foreach ($document as $key => $prop) {
		if ($key != '_id' && !is_array($prop))
			echo $prop . "\t";
	}
	echo "\n";
}

function	movies_show_all()
{
	$db = new MongoDB(new MongoClient(), 'db_etna');
	$movies_c = $db->selectCollection('movies');
	$movies_it = $movies_c->find()->sort(array('title' => 1));
	$count = 0;
	foreach ($movies_it as $id => $movie)
	{
	    movies_display($movie);
 	    $count++;
	}
	puts("*$count*");
}

function	movies_show_genre($argv)
{
	$db = new MongoDB(new MongoClient(), 'db_etna');
	$movies_c = $db->selectCollection('movies');
	$movies_it = $movies_c->find()->sort(array('title' => 1));
	$genre = strtolower($argv[1]);
	$count = 0;
	foreach ($movies_it as $id => $movie)
	{
		if (in_array($genre, $movie['genres']))
		{
			movies_display($movie);
			$count++;
 	    	} 	
 	}
	puts("*$count*");
}

function	movies_show_desc()
{
	$db = new MongoDB(new MongoClient(), 'db_etna');
	$movies_c = $db->selectCollection('movies');
	$movies_it = $movies_c->find()->sort(array('title' => -1));
	$count = 0;
	foreach ($movies_it as $id => $movie)
	{
	    movies_display($movie);
 	    $count++;
	}
	puts("*$count*");
}

function	movies_show_year($argv)
{
	$db = new MongoDB(new MongoClient(), 'db_etna');
	$movies_c = $db->selectCollection('movies');
	$movies_it = $movies_c->find()->sort(array('title' => 1));
	$year = $argv[1];
	$count = 0;
	foreach ($movies_it as $id => $movie)
	{
		if ($movie['year'] == $year)
		{
			movies_display($movie);
			$count++;
 	    	} 	
 	}
	puts("*$count*");
}

function	movies_show_rate($argv)
{
	$db = new MongoDB(new MongoClient(), 'db_etna');
	$movies_c = $db->selectCollection('movies');
	$movies_it = $movies_c->find()->sort(array('title' => 1));
	$rate = (int)$argv[1];
	$count = 0;
	foreach ($movies_it as $id => $movie)
	{
		if ($rate <= $movie['rate'] && $movie['rate'] < ($rate + 1))
		{
			movies_display($movie);
			$count++;
 	    	} 	
 	}
	puts("*$count*");
}