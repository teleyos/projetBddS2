<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

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
    public function afficherAdherents() {
        $adherents=$this->instanceModelAdherent->findAllAdherents();
        return $this->render('adherent/showAdherents.html.twig', ['adherents' => $adherents]);
    }

    /**
     * @Route("/adherent/creerAdherent", name="adherent_creerAdherent")
     */
    public function creerAdherent() {
        $aujourdhui = new DateTime();
        $donnees['datePaiement']=$aujourdhui->format('d/m/Y');   // date de cotisation convertie en chaîne de caractères
        echo $this->twig->render('adherent/addAdherent.html.twig', ['adherent' => $donnees]);
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


    public function validatorAdherent($donnees) {
        $erreurs=array();

        if(!preg_match("/^[A-Za-z ]{1,}/",$donnees['nom'])) {
            $erreurs['nom'] = 'nom composé de 2 lettres minimum';
        }
        if(!preg_match("/^[A-Za-z ]{1,}/",$donnees['prenom'])) {
            $erreurs['prenom'] = 'prenom composé de 2 lettres minimum';
        }

        $dateConvert = \DateTime::createFromFormat('d/m/Y', $donnees['datePaiement']);
        if ($dateConvert == NULL) {
            $erreurs['datePaiement'] = 'La date doit être au format JJ/MM/AAAA';
        }
        else {
            if ($dateConvert->format('d/m/Y') !== $donnees['datePaiement']) {
                $erreurs['datePaiement']='La date n\'est pas valide (format JJ/MM/AAAA)';
            }
        }

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