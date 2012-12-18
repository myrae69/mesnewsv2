<?php

/**
 * Classe abstraite fournissant les services communs aux modèles
 *
 * @author mbarr
 */
abstract class Modele
{

    private $bdd;
    
    // instancie la bdd
    private function getBdd()
    {
        if ($this->bdd === null) {
            $this->bdd = new PDO('mysql:host=localhost;dbname=mesnews', 'root', '');
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->bdd->query('set names utf8');
        }
        return $this->bdd;
    }
    
    // Execute une requete de lecture
    protected function executerLecture($sql, $lirePremierElement = false)
    {
        $resultats = $this->getBdd()->query($sql);
        if ($lirePremierElement === true)
            return $resultats->fetch();
        else
            return $resultats;
    }
    // Execute une requete de modification
    protected function executerModification($sql, $valeurs)
    {
        $requete = $this->getBdd()->prepare($sql);
        $requete->execute($valeurs);
    }

}

