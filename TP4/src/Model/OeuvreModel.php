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


    function findByIdAuteurOeuvre($id) {
        $requete ="SELECT id as noOeuvre, auteur_id as idAuteur, titre, date_parution as dateParution, photo FROM OEUVRE WHERE auteur_id = ?;";
        $prep=$this->db->prepare($requete);
        $prep->bindParam(1, $id, \PDO::PARAM_INT);
        $prep->execute();
        $result=$prep->fetchAll();

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
