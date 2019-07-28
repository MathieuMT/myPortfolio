<?php

namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Entities\Certificate;
use MathieuMT\myPortfolio\Model\Model;


class CertificateDAO extends Model{
    
    
    public function getCertificateDescription() { // Obtenir la liste des données descriptives pour chaque "Certificat" sous forme de tableau d'objets.
        
        $certificates = [];
        $sql = "SELECT * FROM certificates";
        
        $aboutCertificate = $this->executeRequest($sql); // tableau des données concernant le travail
        foreach ($aboutCertificate as $oneCertificate) { // On parcours les tableaux des données pour chaque utilisateur
            $certificate = new Certificate($oneCertificate); // On instancie l'utisateur (entité) et son tableau de données en objet (pour 1 travail)
            $certificates[] = $certificate; /* S'il y a plusieurs travaux ou s'il y a un seul travail , on les regroupe en objets dans un tableau de plusieurs travaux */
        }
        
        //var_dump($aboutWork);
        //var_dump($works);
        return $certificates; // On renvoie un tableau de plusieurs objets 
    }
  
}




