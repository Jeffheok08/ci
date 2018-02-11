<?php

class User_model extends CI_Model
{
    public function getUser()
    {
        $query = "SELECT * FROM users";
        $users = $this->db->query($query);
        return $users;
    }

    public function getUserByID($userId)
    {
        $query = "SELECT * FROM users WHERE user_id = '$userId'";
        return $this->db->query($query);
    }

    public function insertUser($data)
    {
        $fullname = $data['fullname'];
        $username = $data['username'];
        $password = $data['password'];
        $pic = $data['pic'];
        $email = $data['email'];
        $age = $data['age'];
        $query = "INSERT INTO users (fullname, username, password , email, age) VALUES ('$fullname', '$username', '$password', '$pic','$email', '$age')";
        return $this->db->query($query);
    }

    public function update($userId, $data)
    {
        $fullname = $data['fullname'];
        $username = $data['username'];
        $password = $data['password'];
        $pic = $data['pic'];
        $email = $data['email'];
        $age = $data['age'];
        $query = "UPDATE users SET fullname = '$fullname', username = '$username', password = '$password', pic = '$pic', email = '$email', age = '$age' WHERE user_id = '$userId'";
        return $this->db->query($query);
    }
    // application/models
    public function delete($userID)
    {
        $query = "DELETE FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);
    }
    // Auth
    public function checkLogin($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        return $this->db->query($query);
    }
}

