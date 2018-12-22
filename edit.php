<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div class="header">
    <h1>Sua bai viet</h1>
</div>

<?php
require_once 'database.php';
$database = new Database();

$id = $_GET['id'];

$post = $database->getPost($id);

?>

<div class="container">
    <form action="store.php" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?php echo $post['id'];?>">
        </div>
        <div class="form-group">
            <label for="title">Tieu de</label>
            <input type="text" class="form-control" id="title" name="post_title" value="<?php echo $post['post_title'];?>">
        </div>
        <div class="form-group">
            <label for="content">Tieu de</label>
            <input type="text" class="form-control" id="content" name="post_content" value="<?php echo $post['post_content'];?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

</body>
</html>

