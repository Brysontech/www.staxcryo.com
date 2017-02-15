<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Getting Fit Just Got Cooler | Charlotte, NC",
            'description'   => "When the right cryotherapy equipment is used, the science of subjecting the entire human body to extreme cold temperatures to stimulate the healing of its circutory, nervous, and energy systems is a powerful remedial technology."
        );
        
        return $this->render('index/index.twig', [
            'meta'  => $meta,
        ]);
    }
}
