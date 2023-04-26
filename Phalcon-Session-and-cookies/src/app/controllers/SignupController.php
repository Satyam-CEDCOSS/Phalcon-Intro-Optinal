<?php

use Phalcon\Mvc\Controller;
use Phalcon\Session\Factory;

class SignupController extends Controller
{

    public function IndexAction()
    {
        // Redirected to View
    }

    public function registerAction()
    {
        $user = new Users();
        $this->session->set('data', $this->request->getPost());
        $user->assign(
            $this->request->getPost(),
            [
                'name',
                'email',
                'password'
            ]
        );
        $success = $user->save();

        $this->view->success = $success;

        if ($success) {
            $this->view->message = "Register succesfully";
        } else {
            $this->view->message = "Not Register succesfully due to following\
             reason: <br>" . implode("<br>", $user->getMessages());
        }
    }
}
