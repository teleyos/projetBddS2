<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Model\AuteurModel;
use App\Model\OeuvreModel;
use App\Model\ExemplaireModel;


class OeuvreController  extends AbstractController
{
    private $instanceModelOeuvre;
    private $instanceModelExemplaire;
    private $instanceModelAuteur;

    public function __construct(){
        $this->instanceModelAuteur = new AuteurModel();
        $this->instanceModelOeuvre = new OeuvreModel();
        $this->instanceModelExemplaire = new ExemplaireModel();
    }

    /**
     * @Route("/oeuvre", name="oeuvre_index")
     */
    public function index()
    {
        return $this->render('layout.html.twig', [
            'controller_name' => 'OeuvreController',
        ]);
    }

    /**
     * @Route("/oeuvre/afficherOeuvres", name="oeuvre_afficherOeuvres")
     */
    public function afficherOeuvres()
    {
        return $this->render('oeuvre/showOeuvre.html.twig');
    }

    /**
     * @Route("/oeuvre/creerOeuvre", name="oeuvre_creerOeuvre")
     */
    public function creerOeuvre()
    {
       
    }

    /**
     * @Route("/oeuvre/validFormCreerOeuvre", name="oeuvre_validFormCreerOeuvre")
     */
    public function validFormCreerOeuvre()
    {
        
    }

    /**
     * @Route("/oeuvre/supprimerOeuvre/{id}", name="oeuvre_supprimerOeuvre")
     */
    public function supprimerOeuvre($id='')
    {
       
    }


    /**
     * @Route("/oeuvre/modifierOeuvre/{id}", name="oeuvre_modifierOeuvre")
     */
    public function modifierOeuvre($id='')
    {

    }


    /**
     * @Route("/oeuvre/validFormModifierOeuvre", name="oeuvre_validFormModifierOeuvre")
     */
    public function validFormModifierOeuvre()
    {
  
    }


    public function validatorOeuvre($donnees)
    {
        $erreurs=array();

        return $erreurs;
    }

}


