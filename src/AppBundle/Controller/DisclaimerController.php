<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DisclaimerController extends Controller
{
    /**
     * @Route("/disclaimer", name="disclaimer")
     */
    public function indexAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Disclaimer | Charlotte, NC",
            'description'   => "STAXCryo recommends that clients consult with a medical professional prior to using our services to confirm whether cryotherapy is appropriate for their health."
        );
        
        return $this->render('disclaimer/index.twig', [
            'meta'  => $meta,
        ]);
    }
}