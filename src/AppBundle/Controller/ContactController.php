<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction(Request $request)
    {
        $meta = Array(
            'title'         => "STAXCryo | Contact Us To Get Started Today! | Charlotte, NC",
            'description'   => "You can contact STAXCryo via our online form, email, or phone call. You can also visit our facility located at 3722 South Tryon St, Charlotte, NC."
        );
        
        return $this->render('contact/index.twig', [
            'meta'  => $meta,
        ]);
    }
    
    /**
     * @Route("/contact/lead", name="lead")
     * @Method("POST")
     */
    public function leadAction(Request $request)
    {
        $response = 0;
        
        $userData = array();
        parse_str($_POST['data'], $userData);
        
        if($userData['name'] && $userData['email']){
            $data = Array(
                'name'      => $userData['name'],
                'email'     => $userData['email'],
                'subject'   => $userData['subject'],
                'message'   => $userData['message'],
            );
            
            $result = $this->sendLeadEmail($data);
            
            if($result){
                $response = 1;
            }
        } else {
            $response = 0;
        }
        
        //Should return a 0 or 1 and alert the user success or failure
        return new Response(json_encode($response));
    }
    
    private function sendLeadEmail($data){
        $message = \Swift_Message::newInstance()
        ->setSubject('New Lead from STAXCryo.com')
        ->setFrom('leads@staxcryo.com')
        ->setTo('info@staxcryo.com')
        ->setBody(
            $this->renderView(
                'Emails/lead.html.twig',
                array('data' => $data,)
            ),
            'text/html'
        )
        ->addPart(
            $this->renderView(
                'Emails/lead.txt.twig',
                array('data' => $data,)
            ),
            'text/plain'
        )
    ;
        //try{
            $this->get('mailer')->send($message);
        //} catch (Exception $ex) {
            //return false;
        //}
        
        return true;
    
    }
}