<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Model\EmpruntModel;
use App\Model\OeuvreModel;
use App\Model\ExemplaireModel;


class ExemplaireController extends AbstractController
{
    private $instanceModelOeuvre;
    private $instanceModelExemplaire;
    private $instanceModelEmprunt;


    public function __construct(){
        $this->instanceModelEmprunt = new EmpruntModel();
        $this->instanceModelOeuvre = new OeuvreModel();
        $this->instanceModelExemplaire = new ExemplaireModel();
    }

    /**
     * @Route("/exemplaire", name="exemplaire_index")
     */
    public function index()
    {
        echo $this->twig->render('layout.html.twig');
    }

    /**
     * @Route("/exemplaire/afficherExemplaires", name="exemplaire_afficherExemplaires")
     */
    public function afficherExemplaires($noOeuvre)
    {
    }

    /**
     * @Route("/exemplaire/creerExemplaire/{noOeuvre}", name="exemplaire_creerExemplaire")
     */
    public function creerExemplaire($noOeuvre)
    {
    }


    /**
     * @Route("/exemplaire/validFormCreerExemplaire", name="exemplaire_validFormCreerExemplaire")
     */
    public function validFormCreerExemplaire()
    {

    }

    /**
     * @Route("/exemplaire/supprimerExemplaire/{noExemplaire}", name="exemplaire_supprimerExemplaire")
     */
    public function supprimerExemplaire($noExemplaire='')
    {
    }


    /**
     * @Route("/exemplaire/modifierExemplaire/{noExemplaire}", name="exemplaire_modifierExemplaire")
     */
    public function modifierExemplaire($noExemplaire='')
    {
    }



    public function validFormModifierExemplaire()
    {
    }


    public function validatorExemplaire($donnees)
    {
    }

}





