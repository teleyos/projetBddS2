<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Model\AdherentModel;
use App\Model\EmpruntModel;


class AdherentController extends AbstractController
{

    private $instanceModelEmprunt;
    private $instanceModelAdherent;

    public function __construct(){
        $this->instanceModelAdherent = new AdherentModel();
        $this->instanceModelEmprunt = new EmpruntModel();
    }


    /**
     * @Route("/adherent", name="adherent_index")
     */
    public function index()
    {
        return $this->render('layout.html.twig', [
            'controller_name' => 'AdherentController',
        ]);
    }


    /**
     * @Route("/adherent/afficherAdherents", name="adherent_afficherAdherents")
     */
    public function afficherAdherents()
    {
        return $this->render('adherent/showAdherents.html.twig');
    }

    /**
     * @Route("/adherent/creerAdherent", name="adherent_creerAdherent")
     */
    public function creerAdherent()
    {

    }

    /**
     * @Route("/adherent/validFormCreerAdherent", name="adherent_validFormCreerAdherent")
     */
    public function validFormCreerAdherent()
    {

    }

    /**
     * @Route("/adherent/supprimerAdherent/{id}", name="adherent_supprimerAdherent")
     */
    public function supprimerAdherent($id='')
    {

    }

    /**
     * @Route("/adherent/modifierAdherent/{id}", name="adherent_modifierAdherent")
     */
    public function modifierAdherent($id='')
    {

    }

    /**
     * @Route("/adherent/validFormModifierAdherent", name="adherent_validFormModifierAdherent")
     */
    public function validFormModifierAdherent()
    {

    }


    public function validatorAdherent($donnees)
    {
        $erreurs=array();

        return $erreurs;
    }


    // bonus
    /**
     * @Route("/adherent/confirmerSuppr/{id}", name="adherent_confirmerSuppr")
     */
    public function confirmerSuppr($id='')
    {
    }
}
