<?php
   namespace App\Controller;

   use Symfony\Component\Routing\Annotation\Route;
   use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
   use Symfony\Component\HttpFoundation\Response;
   use Twig\Environment;

   class HomeController extends AbstractController{
      /**
       * @Route("/", name="homepage")
      */
      public function homepage(){
         dump($this);
         return $this->render('home.html.twig', [
            'page' => 'Home', 
            'navigation'=>['href'=>'#', 'caption'=>"HOME"]
         ]);
         //return $this->render('BizLand/index.html', ['the' => 'variables', 'go' => 'here']);
      }

      /**
       * @Route("/blog/{slug}", name="homepage_show")
      */
      public function show($slug=''){
         return $this->render('home.html.twig', [
            'page' => 'Home/'.$slug, 
            'navigation'=>['href'=>'#', 'caption'=>"HOME"]
         ]);
         //return $this->render('BizLand/index.html', ['the' => 'variables', 'go' => 'here']);
      }
   }