<?php
function	movies_rent($login, $imdb)
{
	$db = new MongoDB(new MongoClient(), 'db_etna');
	$movies_c = $db->selectCollection('movies');
	$student_c = $db->selectCollection('students');
	$movies_it = $movies_c->find();
	$student_it = $student_c->find();
	$cursorS = $student_c->findOne(array('rented_movies' => $imdb));
	$cursorM = $movies_c->findOne(array('stock' => $imdb));
	$student['rented_movies'].remove($cursorS);
	foreach ($movies_it as $id1 => $movie)
	{
		if ($movie['imdb_code'] == $imdb)
		{
		      $movies['stock']--;
 	    	} 	
 	}
}