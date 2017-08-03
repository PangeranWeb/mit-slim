<?php
namespace Mit\Controller;

use Mit\AbstractController;

class BookController extends AbstractController
{
    public function book($request, $response, $args)
    {
    	$data = $this->account_model->getAccountById(1);
        //$this->renderer->render($response, 'index.phtml', $args);
    }
}
?>
