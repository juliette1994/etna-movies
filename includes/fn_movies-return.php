<?php
function	movies_return($login, $imdb)
{
	$db = new MongoDB(new MongoClient(), 'db_etna');
	$movies_c = $db->selectCollection('movies');
	$student_c = $db->selectCollection('students');
	$movies_it = $movies_c->find();
	$student_it = $student_c->find();
	foreach ($student_it as $id2 => $student)
	{
	    if ($student['login'] == $login)
	    {
	      foreach ($movies_it as $id1 => $movie)
	      {
		  if ($movie['imdb_code'] == $imdb)
		  {
		      $student['rented_movies'].insert($imdb);
		      $movie['stock']--;
		  }
	      }
	    } 	
	}
	puts("*$count*");
}