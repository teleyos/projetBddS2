<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Model\AuteurModel;
use App\Model\OeuvreModel;


class AuteurController extends AbstractController
{

    private $instanceModelOeuvre;
    private $instanceModelAuteur;

    public function __construct(){
        $this->instanceModelAuteur = new AuteurModel();
        $this->instanceModelOeuvre = new OeuvreModel();
    }

    /**
     * @Route("/auteur", name="auteur_index")
     */
    public function index()
    {

    }


    /**
     * @Route("/auteur/afficherAuteurs", name="auteur_afficherAuteurs")
     */
    public function afficherAuteurs()
    {

    }

    /**
     * @Route("/auteur/creerAuteur", name="auteur_creerAuteur")
     */


    public function creerAuteur()
    {
        return $this->render('auteur/addAuteur.html.twig');
    }

    /**
     * @Route("/auteur/validFormCreerAuteur", name="auteur_validFormCreerAuteur")
     */

    public function validFormCreerAuteur()
    {

    }

    /**
     * @Route("/auteur/supprimerAuteur/{id}", name="auteur_supprimerAuteur")
     */

    public function supprimerAuteur($id='')
    {

    }

    /**
     * @Route("/auteur/modifierAuteur", name="auteur_modifierAuteur")
     */

    public function modifierAuteur($id='')
    {

    }

    /**
     * @Route("/auteur/validFormModifierAuteur", name="auteur_validFormModifierAuteur")
     */

    public function validFormModifierAuteur()
    {

    }


    public function validatorAuteur($donnees)
    {
        $erreurs=array();

        return $erreurs;
    }
}
