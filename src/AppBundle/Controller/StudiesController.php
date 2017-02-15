<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudiesController extends Controller
{
    /**
     * @Route("/medical-studies", name="medical-studies")
     */
    public function indexAction(Request $request)
    {
        $weightLoss = Array(
            'title'     => "Weight Loss",
            'subtitle' => "Cryotherapy: An Emerging Weight Management Option",
            'text'      => "Obesity is considered to be a serious global health "
                . "crisis associated with different comorbidities affecting various "
                . "organ systems as manifested by certain health conditions such as "
                . "obstructive sleep apnea, malignancies, coronary artery disease "
                . "and metabolic problems. Hence, wide range of treatment options to "
                . "manage weight are being utilized to address this issue.These "
                . "include lifestyle modification, exercise programs and anti-obesity "
                . "medications (Hamdy, Uwaifo, & Oral, 2016).",
            'link'      => "/images/Cryotherapy-An-Emerging-Weight-Management-Option.pdf"
        );
        
        $beautyAndAntiAging = Array(
            'title'     => "Beauty and Aging",
            'subtitle' => "Cryotherapy to Defy the Aging Process",
            'text'      => "Aging is an inevitable reality that entails changes "
                . "in an individual’s physical appearance and overall health status. "
                . "In fact, according to the Global Health Observatory (GHO) data "
                . "reported by the World Health Organization (WHO), the average life "
                . "expectancy of the global population in the year 2015 was 71.4 "
                . "years (World Health Organization,2016). Moreover, by the year "
                . "2030, it is expected that one out of five of the global "
                . "population will be over 65 years old. Hence, extensive research "
                . "studies have focused on methods to defy the ageing process, "
                . "preserve vigor and prolong an individual’s lifespan while "
                . "maintaining a good quality of life in the advancing years "
                . "(Low, 2013).",
            'link'      => "/medical-studies/beauty-and-aging"
        );
        
        $recovery = Array(
            'title'     => "Recovery",
            'subtitle' => "Athletic Recovery Through Cryotherapy",
            'text'      => "Athletes and individuals who engage in physical "
            . "activities and strenuous routines are prone to develop "
            . "musculoskeletal sports injuries, which may result from accidents, "
            . "improper use of equipment and poor training practices including "
            . "failure to do warm-up and stretching exercises. Some of the most "
            . "common types of sports injuries are muscle sprains and strains, "
            . "ligament or tendon tears, joint dislocation and bone fracture "
            . "that can eventually affect an athlete’s performance. In addition, "
            . "sports injuries can either be acute or chronic...",
            'link'      => "/medical-studies/recovery"
        );
        
        $wellness = Array(
            'title'     => "Wellness",
            'subtitle' => "Contribution of Cryogenically Cooled Air on Wellness",
            'text'      => "Cold therapy is probably one of the oldest treatment "
            . "modalities. Regular application of cold material on painful or "
            . "inflamed parts of the body improves symptoms by alleviating pain "
            . "by decreasing blood flow to the inflamed organ or body part, "
            . "thereby decreasing sensation. Controlled local application of "
            . "ice packs is an ordinary treatment in modern rheumatology. "
            . "Application of coldness on almost the whole body has been used "
            . "for centuries through a widely present practice of cold water "
            . "swimming. There are many cold water swimmers in present time.",
            'link'      => "/images/Contribution-of-Cryogenically-Cooled-Air-on-Wellness.pdf"
        );
        
        $performance = Array(
            'title'     => "Performance",
            'subtitle' => "Effects of Cryotherapy on Body Performance",
            'text'      => "The use of cold therapy to relieve pain and "
            . "inﬂammation associated with sports injuries and overuse has been "
            . "practiced for centuries in different parts of the world. However, "
            . "in  the year 1981, Yamauchi  et al. introduced a form of whole body "
            . "cold-exposure, also referred to as wholebody cryotherapy(WBC), "
            . "that aims to treat rheumatic diseases. With  WBC’s noteworthy "
            . "beneﬁts, it gradually becomes an accepted practice in some parts "
            . "of the world, not only to facilitate recovery among athletes, "
            . "but also to improve overall organ function and body performance. "
            . "In fact, several studies were conducted to determine the beneﬁts "
            . "of WBC in supporting different organ systems such as the "
            . "circulatory, respiratory and immune systems (Westerlund, 2009). ",
            'link'      => "/images/effects-of-cryotheapy-on-body-performance.pdf"
        );
        
        $studies = Array(
            $weightLoss,
            //$beautyAndAntiAging,
            //$recovery,
            $wellness,
            $performance
        );
        
        $meta = Array(
            'title'         => "STAXCryo | Medical Studies | Charlotte, NC",
            'description'   => "Still have questions?  No problem!  Check out these great medical studies for more information."
        );
        
        return $this->render('studies/index.twig', [
            'meta'  => $meta,
            'studies'   => $studies,
        ]);
    }

}