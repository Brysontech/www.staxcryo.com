<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TreatmentsController extends Controller
{
    /**
     * @Route("/treatment", name="treatments")
     */
    public function indexAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Treatment and Pricing | Charlotte, NC",
            'description'   => "Getting started is quick and easy!  Just pick a pricing package that best suites your routine or call/email for a consultation."
        );
        
        return $this->render('treatment/index.twig', [
            'meta'  => $meta,
        ]);
    }
}