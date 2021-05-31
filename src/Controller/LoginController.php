<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class LoginController extends AbstractController{
    /**
     * @Route("/login/{slug}", name="loginpage")
     */
    public function showLogin($slug=''){
        return $this->render('login.html.twig');
    }
}