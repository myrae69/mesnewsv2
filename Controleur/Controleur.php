<?php

/**
 * Classe abstraite Controleur
 *
 * @author mbarr
 */
abstract class Controleur
{
    // Génere une vue
    protected function genererVue($vue, $donnees)
    {
        $fichierVue = 'Vue/' . $vue . '.php';
        if (file_exists($fichierVue)) {
            extract($donnees);
            require $fichierVue;
        }
        else
            throw new Exception("Fichier $fichierVue non trouvé");
    }
    // Affiche les erreurs
    protected function afficherErreur($msgErreur)
    {
        require 'Vue/erreur.php';
    }

}
