<?php
$movies_keys = ['imdb_code', 'title', 'year', 'genres', 'directors',
	'rate', 'link', 'stock'];

require_once('fn_movies-insert.php');
require_once('fn_movies-show.php');
require_once('fn_movies-rent.php');
require_once('fn_movies-return.php');
require_once('fn_movies-exists.php');