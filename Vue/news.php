<?php $titre = 'Mes News - Ajout' ?>

<?php ob_start() ?>
<form method="post" action="index.php">
    <textarea id="titreNews" class="txt" name="titre" rows="2" placeholder="Le titre de la news" required></textarea><br />
    <textarea id="txtNews"class="txt" name="contenu" rows="4" placeholder="Le contenu de la news" required></textarea><br />
    <input id="newsCateg" name="categorie" type="text" placeholder="La catégorie de la news" required /><br />
    <p class="centre"><input id="btnAjouter" type="submit" value="Ajouter" /></p>
</form>
<?php $contenu = ob_get_clean() ?>

<?php include 'gabarit.php' ?>