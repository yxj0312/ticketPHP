<?php


namespace ticketPHP\Controllers;


abstract class BlogController implements Controller
{
    protected $user;
    protected $post;

    public function __construct($user, $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    abstract public function index();
}