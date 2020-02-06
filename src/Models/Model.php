<?php


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


    }
}