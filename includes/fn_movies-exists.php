<?php
function	movies_exists($imdb)
{
	$mongo = new MongoClient();
	$database = new MongoDB($mongo, 'db_etna');
	$select_collection = $database->selectCollection("movies");
	$cursor = $select_collection->findOne(array('imdb_code' => $imdb));
	return (!is_null($cursor));
}