<?php
namespace Multiple\Api\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    // Sends the json response
    public function json($data) {
        $this->view->disable();
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setContent(json_encode($data));
        return $this->response;
    }
}
