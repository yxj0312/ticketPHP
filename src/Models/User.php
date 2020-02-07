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

        var_dump($query);

        if ($result = $this->db->query($query)) {
            $row = $result->fetch_assoc();
            var_dump($row);
        }
    }
}