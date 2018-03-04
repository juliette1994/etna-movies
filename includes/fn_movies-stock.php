<?php
function	movies_stock($imdb)
{
	$mongo = new MongoClient();
	$database = new MongoDB($mongo, 'db_etna');
	$select_collection = $database->selectCollection("movies");
	$movie = $select_collection->findOne(array('imdb_code' => $imdb));
	return ($movie['stock']));
}