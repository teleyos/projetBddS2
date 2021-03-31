<?php
namespace App\Model;

use App\Model\ConnexionBdd;

class ExemplaireModel{

    private $db;

    public function __construct(){
        $instanceConnexion = new ConnexionBdd;
        $this->db = $instanceConnexion->connect();
    }

    function findAllExemplairesByOeuvre($noOeuvre){
        //
    }

    function findDetailsAllExemplairesByOeuvre($noOeuvre){
        //
    }


    function findByIdOeuvreExemplaire($id){
        //
    }

    function createAndPersistExemplaire($donnees){
        //
    }


    function removeByIdExemplaire($noExemplaire){
        //
    }

    function findOneById($noExemplaire){
        //
    }


    function updateAndPersistExemplaire($id, $donnees){
        //
    }
}
