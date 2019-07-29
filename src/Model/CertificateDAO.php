<?php

namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Entities\Certificate;
use MathieuMT\myPortfolio\Model\Model;


class CertificateDAO extends Model{
    
    
    public function getCertificateDescription() { // Obtenir la liste des données descriptives pour chaque "Certificat" sous forme de tableau d'objets.
        
        $certificates = [];
        $sql = "SELECT * FROM certificates";
        
        $aboutCertificate = $this->executeRequest($sql); // tableau des données concernant le Certificat
        foreach ($aboutCertificate as $oneCertificate) { // On parcours les tableaux des données pour chaque Certificat
            $certificate = new Certificate($oneCertificate); // On instancie le Certificat (entité) et son tableau de données en objet (pour 1 Certificat)
            $certificates[] = $certificate; /* S'il y a plusieurs Certificats ou s'il y a un seul Certificat , on les regroupe en objets dans un tableau de plusieurs Certificats */
        }
        return $certificates; // On renvoie un tableau de plusieurs objets 
    }
  
}




