<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestimonialsController extends Controller
{
    /**
     * @Route("/testimonials", name="testimonials")
     */
    public function indexAction(Request $request)
    {
        return $this->render('testimonials/index.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}