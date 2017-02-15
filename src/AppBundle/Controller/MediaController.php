<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MediaController extends Controller
{
    /**
     * @Route("/media", name="media")
     */
    public function indexAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Media Center | Charlotte, NC",
            'description'   => "Check out our media page with informative videos, pictures from social media, and recent articles."
        );
        
        return $this->render('media/index.twig', [
            'meta'  => $meta,
        ]);
    }
}