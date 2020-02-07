<?php

namespace ticketPHP\Models;

class User extends Model {
    /*
     * Get user by it's credentials
     * @param String $email
     * @param String $password
     * @return array
     */
    public function getUser($email, $password)
    {
        $query = ""
                . "SELECT USER.*"
                . "FROM USER "
                . "WHERE USER.EMAIL = '%s' AND USER.PASSWORD = '%s'";

        $query = sprintf($query, $this->db->real_escape_string($email), $this->db->real_escape_string($password));

        if ($result = $this->db->query($query)) {
            $row = $result->fetch_assoc();
            if (!$row) return false;
            $user = array(
                'id' => $row['id'],
                'email' => $row['email'],
                'name' => $row['name']
            );
            $result->close();
        } else
            die($this->db->error);
        return $user;
    }
}