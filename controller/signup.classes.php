<?php

 class Signup extends Dbh {

    public $stmt = null;
    public $uid;
    public $email;
    private $password;

    public function __construct($uid, $email, $password)
    {
        $this->uid = $uid;
        $this->email = $email;
        $this->password = $password;
    }

    public function setUser(){
        $this->stmt = $this->connect()->prepare("INSERT INTO users (username, email, user_password) VALUES (?,?,?)");        
        $hashedpwd = password_hash($this->password, PASSWORD_DEFAULT);
        
        if (!$this->stmt->execute(array($this->uid, $this->email, $hashedpwd))) {
            // $stmt = null;
            header("location: ../view/index.php?error=stmtfailed");
            exit();
        }
        
        $this->stmt;
    }

    public function checkUser(){
        $this->stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');
        if (!$this->stmt->execute(array($this->uid, $this->email))) {
            // $stmt = null;
            header("location: ../view/index.php?error=stmtfailed");
            exit();
        }
        if ($this->stmt->rowCount() > 0) 
        {
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }
        return $resultCheck;
    }
 }
