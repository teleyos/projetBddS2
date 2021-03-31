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

