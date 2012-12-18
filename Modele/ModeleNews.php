<?php

require_once 'Modele/Modele.php';

/**
 * Classe modélisant un billet de blog
 *
 * @author Baptiste
 */
class ModeleNews extends Modele
{
    // Lis toutes les news
    public function lireTout()
    {
        $sql = 'select * from T_NEWS N JOIN T_CATEGORIE C ON N.CAT_ID=C.CAT_ID order by NEWS_ID desc';
        return $this->executerLecture($sql);
    }
    // Lis une seule news
    public function lireUnSeul($id)
    {
        return $this->executerLecture("select $ from T_NEWS where NEWS_ID=" .$id);
    }
}
