<?php

include_once("classes/connect.php");

class Login
{
    private $error = "";

    public function evaluate($data)
    {
        $user_id = addslashes($data['user_id']);
        $password = addslashes($data['password']);

        $query = "SELECT * FROM users WHERE user_id = '$user_id' LIMIT 1";

        $DB = new Database();
        $result = $DB->read($query);

        if ($result) {
            $row = $result[0];

            if ($password == $row['password']) {
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['amazon_userid'] = $row['user_id'];
            } else {
                $this->error .= "Wrong password<br>";
            }
        } else {
            $this->error .= "Wrong email<br>";
        }

        return $this->error;
    }

    public function check_login($id, $redirect = true)
    {
        if ($id) {
            $query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1";

            $DB = new Database();
            $result = $DB->read($query);

            if ($result) {
                $user_data = $result[0];
                return $user_data;
            } else {
                if ($redirect) {
                    header("Location: login.php");
                    die;
                } else {
                    $_SESSION['amazon_userid'] = 0;
                }
            }
        } else {
            if ($redirect) {
                header("Location: login.php");
                die;
            } else {
                $_SESSION['amazon_userid'] = 0;
            }
        }
    }
}
