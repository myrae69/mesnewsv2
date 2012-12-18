<?php $titre = 'Mes News' ?>

<?php ob_start() ?>
<?php foreach ($news as $donnee): ?>
<article>
    <header>
        <h1 class="titreNews"><?php echo $donnee['NEWS_TITRE'] ?></h1>
        <time><?php echo $donnee['NEWS_DATE'] ?></time>
    </header>
    <p><?php echo $donnee['NEWS_CONTENU'] ?></p>
    <footer class="categorie">Catégorie : <?php echo $donnee['CAT_NOM'] ?></footer>
</article>
<hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean() ?>

<?php include 'gabarit.php' ?>