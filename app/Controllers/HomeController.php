<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig as View;
use App\Models\User;


class HomeController
{
    public function index(Response $response, Request $request, View $view,
    User $user)
    {
      return $view->render($response, 'home.twig');
    }
}
