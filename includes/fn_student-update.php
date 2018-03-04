<?php
function	student_update($login, $key, $value)
{
    $mongo = new MongoClient();
    $database = new MongoDB($mongo, 'db_etna');
    $select_collection = $database->selectCollection("students");
    $cursor = $select_collection->findOne(array('login' => $login));
    $newdata = array('$set' => array($key => $value));
    $select_collection->update($cursor, $newdata);
}