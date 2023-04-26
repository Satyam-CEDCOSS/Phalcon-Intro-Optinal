<?php

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        // Redirected to View
    }



    public function loginAction()
    {
        $sql = 'SELECT * FROM Users WHERE email = :email:';
        $query = $this->modelsManager->createQuery($sql);
        $cars = $query->execute(
            [
                'email' => $_POST["email"]
            ]
        );
        if ($cars[0]->password==$_POST["password"]) {
            $this->view->message = "success";
        } else {
            $this->view->message = "error";
        }
    }
}
