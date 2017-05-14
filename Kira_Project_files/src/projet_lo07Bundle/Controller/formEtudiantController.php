<?php
/**
 * Created by PhpStorm.
 * User: Siimo
 * Date: 14/05/2017
 * Time: 00:10
 */

namespace projet_lo07Bundle\Controller;


use projet_lo07Bundle\Entity\etudiant;
use projet_lo07Bundle\Form\etudiantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class formEtudiantController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */

    public function addAction(Request $request){
        $etudiant = new etudiant();
        $form = $this->createForm(etudiantType::class,$etudiant);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();
            return new Response('Etudiant ajouté');
        }
        $formView = $form->createView();
        return $this->render('etudiantAjout.html.twig',array('form'=>$formView));
    }
}