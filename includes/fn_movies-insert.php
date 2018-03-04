<?php
function	movies_insert($data)
{
	$mongo = new MongoClient();
	$database = new MongoDB($mongo, 'db_etna');
	$collection = $database->createCollection("movies");
	$collection->insert($data);
}