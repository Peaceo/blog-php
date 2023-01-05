<?php

class Login extends Dbh
{

    protected function getUser($uid, $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT id, username, email, user_password FROM users WHERE email = ?");
        $r = $stmt->execute([$uid]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // print_r($result);die;

        if (!$result) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $checkPwd = password_verify($pwd, $result["user_password"]);

        if (!$checkPwd) {
            $stmt = null;
            header("location: ../view/index.php?error=wrongpassword");
            exit();
        } else {
            session_start();
            $_SESSION["user_id"] = $result["id"];
            $_SESSION["user_username"] = $result["username"];

            header("location: ../index.php");
            // header("location: ../view/index.php?error=none");
            exit();
        }
    }
}
