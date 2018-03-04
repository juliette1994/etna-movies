<?php
function	student_show_all()
{
	$mongo = new MongoClient();
	$database = new MongoDB($mongo, 'db_etna');
	$select_collection = $database->selectCollection("students");
	$cursor = $select_collection->find();
	foreach ($cursor as $key1 => $value1) {
	  if (sizeof($value1) >= 6)
	  {
	    foreach ($value1 as $key2 => $value2) {
	      if ($key2 !== "_id" && !is_array($value2))
		echo $value2 . "\t";
	    }
	    echo "\n";
	  }
	}
}

function	student_show($login)
{
	$mongo = new MongoClient();
	$database = new MongoDB($mongo, 'db_etna');
	$select_collection = $database->selectCollection("students");
	$cursor = $select_collection->findOne(array('login' => $login));
	foreach ($cursor as $keys => $values) {
	if ($keys !== "_id")
	  puts($keys. "\t: " .$values);
	}
}