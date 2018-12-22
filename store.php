<?php
require_once 'database.php';
$database = new Database();

if ($database->store($_POST)){
    header("Location: http://localhost/homework/post_simple_test");
    die();
} else {
    echo $database->store($_POST);
}

?>