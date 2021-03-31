<?php
namespace App\Model;

use App\Model\ConnexionBdd;

class AuteurModel{

    private $db;

    public function __construct(){
        $instanceConnexion = new ConnexionBdd;
        $this->db = $instanceConnexion->connect();
    }

    //         // $prep->debugDumpParams();  // en cas d'erreurs

    function findAllAuteurs(){
        $results=[];
        return $results;
    }


    function createAndPersistAuteur($donnees){

    }


    function removeByIdAuteur($id){

    }

    function findOneByIdAuteur($id){

    }

    function updateAndPersistAuteur($id, $donnees){

    }


    // liste déroulante add/edit OEUVRE

    function findAllDropdownAuteurs(){

    }
}
