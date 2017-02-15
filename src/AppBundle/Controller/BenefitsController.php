<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BenefitsController extends Controller
{
    /**
     * @Route("/benefits", name="benefits")
     */
    public function indexAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Benefits of Cryotherapy | Charlotte, NC",
            'description'   => "Utilizing age-old science with modern equipment and techniques, Cryotherapy has many benefits including: weightloss, anti-aging, faster recovery, and over-all wellness."
        );
        
        return $this->render('benefits/index.twig', [
            'meta'  => $meta,
        ]);
    }
    
    /**
     * @Route("/benefits/weight-loss", name="weight loss")
     */
    public function weightLossAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Weight Loss with Cryotherapy | Charlotte, NC",
            'description'   => "Combined with a balanced diet and a steady workout plan Cryotherapy for weight loss can help to burn additional calories in just a single three-minute treatment."
        );
        
        return $this->render('benefits/weight-loss/index.html.twig', [
            'meta'  => $meta,
        ]);
    }
    
    /**
     * @Route("/benefits/beauty-and-anti-aging", name="beauty and anti-aging")
     */
    public function beautyAndAntiAgingAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Beauty & Anti-Aging with Cryotherapy | Charlotte, NC",
            'description'   => "Cryotherapy is an ultra-cold treatment designed to shock the body into action by revving up blood circulation and boosting the immune and central nervous systems."
        );
        
        return $this->render('benefits/beauty-and-anti-aging/index.html.twig', [
            'meta'  => $meta,
        ]);
    }
    
    /**
     * @Route("/benefits/recovery")
     */
    public function recoveryAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Recovery with Cryotherapy | Charlotte, NC",
            'description'   => "Cold therapy has been used for many years to help athletes soothe aching muscles and boost their recovery. Many athletes, professional, amateur, and regular exercisers are now turning to Cryotherapy to help them to recover faster."
        );
        
        return $this->render('benefits/recovery/index.html.twig', [
            'meta'  => $meta,
        ]);
    }
    
    /**
     * @Route("/benefits/wellness")
     */
    public function wellnessAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Wellness with Cryotherapy | Charlotte, NC",
            'description'   => "Health and Wellness go hand in hand, but taking care of one’s body encompasses more than the food we consume and the lifestyle we lead."
        );
        
        return $this->render('benefits/wellness/index.html.twig', [
            'meta'  => $meta,
        ]);
    }
}