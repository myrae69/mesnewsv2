<?php

require 'Controleur/ControleurNews.php';

/**
 * Description of ControleurFrontal
 *
 * @author mbarr
 */
class ControleurFrontal extends Controleur {

    private $ctrlNews;

    public function __construct()
    {
        $this->ctrlNews = new ControleurNews();
    }
    // Route une requête
    public function routerRequete()
    {
        try {
            if (!empty($_POST)) {
                $this->routerRequetePost();
            }
            elseif (!empty($_GET)) {
                $this->routerRequeteGet();
            }
            else {
                $this->ctrlNews->listerNews();  // action par défaut
            }
        }
        catch (Exception $e) {
            $this->afficherErreur($e->getMessage());
        }
    }
    

}

