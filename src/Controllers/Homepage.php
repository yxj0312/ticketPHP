<?php declare(strict_types = 1);

namespace ticketPHP\Controllers;

use Http\Request;
use Http\Response;
use ticketPHP\Template\Renderer;

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
        private $renderer;

        public function __construct(Request $request, Response $response, Renderer $renderer)
        {
            $this->request = $request;
            $this->response = $response;
            $this->renderer = $renderer;
        }

        public function show()
        {
//            $content = '<h1>Hello World</h1>';
//            $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
//            $this->response->setContent($content);
//            echo $this->response->getContent();
            $data = [
                'name' => $this->request->getParameter('name', 'stranger'),
            ];
//            $html = $this->renderer->render('Hello {{name}}', $data);
            $html = $this->renderer->render('Homepage', $data);
            $this->response->setContent($html);

//            echo $this->response->getContent();
        }
}