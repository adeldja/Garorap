<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     * @Route("/solde/{id}", name="detailSolde")
     */
    public function detailSolde($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $unUser = $entityManager->getRepository("App:User")->find($id);
        
        
        return $this->render('User/ConsulterSolde.html.twig', [
            'unUser' => $unUser

         ] );
    }
    

}