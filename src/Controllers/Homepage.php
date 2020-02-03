<?php declare(strict_types = 1);

namespace ticketPHP\Controllers;

use Http\Request;
use Http\Response;

class Homepage
{
//    private $response;
//
//    public function __construct(Response $response)
//    {
//        $this->response = $response;
//    }
//
//    public function show()
//    {
//        $this->response->setContent('Hello World');
//
//        echo $this->response->getContent();
//    }

        private $request;
        private $response;

        public function __construct(Request $request, Response $response)
        {
            $this->request = $request;
            $this->response = $response;
        }

        public function show()
        {
            $content = '<h1>Hello World</h1>';
            $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
            $this->response->setContent($content);
            echo $this->response->getContent();
        }
}