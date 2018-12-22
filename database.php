<?php
class Database {

    public static $connection = null;

    public function __construct()
    {
        if(self::$connection){
            return self::$connection;
        }

        $this->connect();

        return self::$connection;

    }

    public function connect() {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "post_simple_test";

        // Create connection
        self::$connection = new mysqli($servername, $username, $password, $db_name);

        // Check connection
        if (self::$connection->connect_error) {
            die("Connection failed: " . self::$connection->connect_error);
        }

    }

    public function getPosts() {
        $sql = 'SELECT * FROM posts';
        $data = self::$connection->query($sql);
        $posts = array();
        if ($data->num_rows > 0) {
            while($row = $data->fetch_assoc()) {
                $posts[] = $row;
            }
        }
        return $posts;
    }

    public function getPost($id) {
        $sql = 'SELECT * FROM posts WHERE id='. $id;
        $data = self::$connection->query($sql);
        $post = $data->fetch_assoc();
        return $post;
    }

    public function delete($id) {
        $sql = 'DELETE FROM posts WHERE id='. $id;
        if(self::$connection->query($sql)){
            return true;
        } else {
            return $sql;
        }
    }

    public function store($data) {



        if (isset($data['id'])){
            $sql = 'UPDATE posts SET post_title = "'. $data['post_title'] .'", post_content="'.$data['post_content'].'" WHERE id='. $data['id'];
        } else {
            $sql = 'INSERT INTO posts(post_title, post_content) 
                VALUE ("'.$data['post_title'].'", "'. $data['post_content'] .'")
              ';
        }

        if(self::$connection->query($sql)){
            return true;
        } else {
            return $sql;
        }
    }


    public function disconnect() {
        self::$connection->close();
    }

}