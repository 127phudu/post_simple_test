<?php
require_once 'database.php';
$database = new Database();

$id = isset($_GET['id']) ? $_GET['id'] : 0;

echo $database->delete($id);

header("Location: http://localhost/homework/post_simple_test");
die();
?>