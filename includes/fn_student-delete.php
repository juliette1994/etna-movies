<?php
function	student_delete($data)
{
    $mongo = new MongoClient();
    $database = new MongoDB($mongo, 'db_etna');
    $select_collection = $database->selectCollection("students");
    $cursor = $select_collection->findOne(array('login' => $data));
    $select_collection->remove($cursor);
}