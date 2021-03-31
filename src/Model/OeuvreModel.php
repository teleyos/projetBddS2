<?php
namespace App\Model;

use App\Model\ConnexionBdd;

class OeuvreModel{

    private $db;

    public function __construct(){
        $instanceConnexion = new ConnexionBdd;
        $this->db = $instanceConnexion->connect();
    }

    function findAllOeuvres(){
        $requete ="";
        $prep=$this->db->prepare($requete);
        $prep->execute();
        $results = $prep->fetchAll();
        return $results;
    }


    function findByIdAuteurOeuvre($id){
        $requete ="SELECT * FROM OEUVRE WHERE idAuteur = :id;";
        return $result;
    }


    function createAndPersistOeuvre($donnees){
    }


    function removeByIdOeuvre($id){
    }

    function findOneByIdOeuvre($id){
    }

    function updateAndPersistOeuvre($id, $donnees){
    }

}
