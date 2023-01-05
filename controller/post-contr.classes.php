<?php
session_start();
class Post extends Dbh
{

    public $stmt = null;
    public $title;
    public $body;
    private $created_at;

    public function __construct($title, $body, $created_at)
    {
        $this->title = $title;
        $this->body = $body;
        $this->created_at = $created_at;
    }

    public function createPost()
    {
        $this->stmt = $this->connect()->prepare("INSERT INTO post (title, body, created_at, user_id) VALUES (?,?,?, ?)");

        if ($this->stmt->execute(array($this->title, $this->body, $this->created_at, $_SESSION["user_id"]))) {
            // $stmt = null;
            echo "Post successfully saved";
            header("location: ../index.php");
        }

        $this->stmt;
    }


    //Error handling
    public function filterData()
    {
        if ($this->emptyInput() == false) {
            // echo empty input         
            header("location: ../view/create.php?error=emptyinput");
            exit();
        }
    }
    public function emptyInput()
    {
        if (empty($this->title) || empty($this->body) || empty($this->created_at)) {
            $this->result = false;
        }

        return $this->result;
    }
}
