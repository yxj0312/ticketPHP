<?php

namespace ticketPHP\Models;

abstract class Model
{
    protected $connectionParam = [
        'host' => '',
        'port' => '',
        'user' => '',
        'password' => '',
        'dbname' => ''
    ];

    protected $db;

    public function __construct($appConfig = null)
    {
        $this->connectionParam = $appConfig['connection']['params'];

        $this->db = mysqli_connect($this->connectionParam['host'], $this->connectionParam['user'], $this->connectionParam['password'], $this->connectionParam['dbname']);

    }
}