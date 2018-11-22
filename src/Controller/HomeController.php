<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
  * @Route("/")
  */
  public function index()
  {

      return $this->render('home.html.twig');

  }

  /**
  * @Route("/blog/{slug<[a-z\d-]+>?Article Sans Titre}", name="blog_title")
  */
  public function show($slug)
  {

      return $this->render('home.html.twig',array(
        'slug' => $slug));

  }

}
