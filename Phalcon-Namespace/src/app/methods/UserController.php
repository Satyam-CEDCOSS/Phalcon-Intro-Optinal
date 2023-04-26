<?php

namespace MyApp\User\Controllers;

use Phalcon\Mvc\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        // hello
        echo "<h1>App Name :</h1>";
        echo "<br>";
        echo $this->config->app->name;
        die;
    }
}
