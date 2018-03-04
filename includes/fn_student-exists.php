<?php
//returns either if a given user exists or not.
function	student_exists($login)
{
	$mongo = new MongoClient();
	$database = new MongoDB($mongo, 'db_etna');
	$select_collection = $database->selectCollection("students");
	$cursor = $select_collection->findOne(array('login' => $login));
	return (!is_null($cursor));
}