<?php
require_once 'classes/autoload.php';
$db = new database;

/* Multiple rows */
// $results = $db->query("SELECT * FROM `users`");
// foreach($results as $row)
// {
// 	echo $row->id.'<br />';
// }

 // Single row
$result = $db->singleRow("SELECT * FROM `users` WHERE `id`='4'");
echo $result->username;
?>