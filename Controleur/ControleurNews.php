<?php

require_once 'Modele/ModeleNews.php';

require_once 'Controleur/Controleur.php';

/**
 * Contrôleur des actions liées aux news
 *
 * @author mbarr
 */
class ControleurNews extends Controleur
{
    private $modeleNews;
    
    public function __construct()
    {
        $this->modeleNews = new ModeleNews();
    }
    // Liste les news dans listeNews.php
    public function listerNews()
    {
        $news = $this->modeleNews->lireTout();
        $this->genererVue('listeNews', array('news' => $news));
    }
}

