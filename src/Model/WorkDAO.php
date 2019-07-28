<?php


namespace MathieuMT\myPortfolio\Model;


use MathieuMT\myPortfolio\Model\Work;
use MathieuMT\myPortfolio\Model\Model;

class WorkDAO extends Model{
    
    
    public function getWorkDescription() { // Obtenir la liste des données descriptives pour chaque "Work" sous forme de tableau d'objets.
        
        $works = [];
        $sql = "SELECT * FROM works";
        
        $aboutWork = $this->executeRequest($sql); // tableau des données concernant le travail
        foreach ($aboutWork as $oneWork) { // On parcours les tableaux des données pour chaque utilisateur
            $work = new Work($oneWork); // On instancie l'utisateur (entité) et son tableau de données en objet (pour 1 travail)
            $works[] = $work; /* S'il y a plusieurs travaux ou s'il y a un seul travail , on les regroupe en objets dans un tableau de plusieurs travaux */
        }
        
        //var_dump($aboutWork);
        //var_dump($works);
        return $works; // On renvoie un tableau de plusieurs objets 
    }
  
}




