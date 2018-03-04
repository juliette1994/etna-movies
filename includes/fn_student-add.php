<?php
function	student_add($data)
{
  $mongo = new MongoClient();
  $database = new MongoDB($mongo, 'db_etna');
  $collection = $database->createCollection("students");
  $collection->insert($data);
}