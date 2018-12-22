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

<?php
    require_once 'database.php';
    $database = new Database();
    $posts = $database->getPosts();


?>

    <div class="header">
        <h1>Danh sach bai viet</h1>
    </div>

    <div class="container">
        <div class="insert">
            <a class="btn btn-success btn-xs" href="insert.php">Them moi</a>
        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">post_title</th>
                <th scope="col">post_content</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($posts as $post) { ?>
                    <tr>
                        <th scope="row"><?php echo $post['id'];?></th>
                        <td><?php echo $post['post_title'];?></td>
                        <td><?php echo $post['post_content'];?></td>
                        <td>
                            <a class="btn btn-success btn-xs" href="edit.php?id=<?php echo $post['id']; ?>">sua</a>
                            <a class="btn btn-danger btn-xs" href="delete.php?id=<?php echo $post['id']; ?>">xoa</a>
                        </td>
                    </tr>
                <?php }
            ?>
            </tbody>
        </table>

    </div>



</body>
</html>

