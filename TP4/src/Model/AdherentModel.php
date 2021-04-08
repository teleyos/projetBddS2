<?php
namespace App\Model;

use App\Model\ConnexionBdd;

class AdherentModel{

    private $db;

    public function __construct(){
        $instanceConnexion = new ConnexionBdd;
        $this->db = $instanceConnexion->connect();
    }

    function findAllAdherents(){
        $results=[];
        $requete = "SELECT ad.nom, ad.adresse, ad.date_paiement as datePaiement, ad.id, count(empr.adherent_id) as nbrEmprunt
        , IF (CURRENT_DATE()>DATE_ADD(date_paiement, INTERVAL 1 YEAR),1,0) as retard
        , IF (CURRENT_DATE()<DATE_ADD(date_paiement, INTERVAL 11 MONTH),1,0) as retardProche
        , DATE_ADD(date_paiement, INTERVAL 1 YEAR) as datePaiementFutur
        FROM ADHERENT ad
        LEFT JOIN EMPRUNT empr ON empr.adherent_id=ad.id
        AND empr.date_retour IS NULL
        GROUP BY ad.id
        ORDER BY ad.nom;";
        $prep=$this->db->prepare($requete);
        $prep->execute();
        $results=$prep->fetchAll();

        return $results;
    }

    function findAllDropdownAdherents(){
        //
    }

    function createAndPersistAdherent($donnees){
        //
    }


    function removeByIdAdherent($id){
        //
    }

    function findOneByIdAdherent($id){
        //
    }


    function updateAndPersistAdherent($id, $donnees){
        //
    }


}

