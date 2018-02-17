<?php

namespace App\Controllers;

use Slim\Views\Twig as View;

class DashboardController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'dashboard.twig');
    }
}
