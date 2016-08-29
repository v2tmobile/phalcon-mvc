<?php
namespace Multiple\Api\Controllers;

use \Modules\Models\Services\Services as Services;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        try {
            $data['message'] = 'Hey, I\'m API module';
            return $this->json($data);

        } catch (\Exception $e) {
        	$this->flash->error($e->getMessage());
        }
    }
}

