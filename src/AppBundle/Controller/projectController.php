<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class projectController extends Controller
{
    /**
     * @Route("/project/index" ,name="index_page")
     */
    public function indexAction()
    {
        $ref =$this ->getDoctrine()
            ->getRepository('AppBundle:refDb')
            ->findAll();

        $tag =$this ->getDoctrine()
            ->getRepository('AppBundle:tagDb')
            ->findAll();
        return $this->render('project/show.html.twig',array('ref'=>$ref,'tag'=>$tag

        ));
    }

    /**
     * @Route("/project/login", name="login_page")
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('project/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/project/student" ,name="student_page")
     */
    public function studentAction()
    {
        return $this->render('project/student.html.twig',array(

        ));
    }

    /**
     * @Route("/project/profile", name="profile_page")
     */
    public function profileAction()
    {
        return $this->render('project/profile.html.twig',array(

        ));
    }

    /**
     * @Route("/project/notes", name ="project_show_notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];
        /**
         *
         */
        $data =[
            'notes'=>$notes,
        ];

        return new JsonResponse($data);
    }
}
