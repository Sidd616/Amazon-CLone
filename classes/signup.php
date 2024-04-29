<?php
include_once("classes/connect.php");

class Signup
{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error .= $key . " is empty!<br>";
            }

            if ($key == "first_name" || $key == "last_name") {
                if (is_numeric($value)) {
                    $this->error .= ucfirst($key) . " can't be a number.<br>";
                }

                if (strstr($value, " ")) {
                    $this->error .= ucfirst($key) . " can't have spaces.<br>";
                }
            }
        }

        $DB = new Database();

        // Check email
        $user_id = $data['user_id'];
        $sql = "SELECT user_id FROM users WHERE user_id = '$user_id' LIMIT 1";
        $check = $DB->read($sql);

        var_dump($check);

        if (!empty($check) && is_array($check)) {
            $this->error .= "Another user is already using that phone number or email.<br>";
        }

        if ($this->error == "") {
            // No error
            $this->create_user($data);
        } else {
            return $this->error;
        }
    }

    public function create_user($data)
    {
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
        $user_id = $data['user_id'];
        $password = $data['password'];

        $DB = new Database();

        $query = "INSERT INTO users (user_id, password, first_name, last_name) VALUES ('$user_id', '$password', '$first_name', '$last_name')";

        $DB->save($query);
    }
}
?>
