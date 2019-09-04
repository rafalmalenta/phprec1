<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class MyController extends AbstractController{
        /**
         * @Route("/")
         * 
         */
        public function welcome(){
            return $this->render('mytemplates/welcome.html.twig');
        }
    }