<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/home.css">
    <title>Digital Library-Accueil</title>
</head>
<body>
<?php include_once 'fragment/header.php'?>

<div class="containerGeneral">
    <div class="container">
        <div class="categorieSection">
<h2>Catégories</h2>
                <?php
                foreach ($categories as $categorie){
                    ?>
                <a href="#"><?php echo $categorie['name'];?></a>
               <?php }
                ?>
        </div>


    <div class="bookSection">
        <h2>Nouveautés</h2>
        <div class="cards">
            <?php foreach ($lastBooks as $lastBook) {
                ?>
                    <div class="card">
                        <img src="<?php echo $lastBook['cover'] ?>" alt="">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $lastBook['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>

        </div>

        <h2>Policier</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryPolicier as $bookOfCategoryPolicier) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryPolicier['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryPolicier['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>

        <h2>Fantastique</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryFantastique as $bookOfCategoryFantastique) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryFantastique['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryFantastique['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>

        <h2>Science Fiction</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryScienceFiction as $bookOfCategoryScienceFiction) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryScienceFiction['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryScienceFiction['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>

        <h2>Roman</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryRoman as $bookOfCategoryRoman) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryRoman['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryRoman['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>

        <h2>Romance</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryRomance as $bookOfCategoryRomance) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryRomance['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryRomance['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>

        <h2>Aventure</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryAventure as $bookOfCategoryAventure) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryAventure['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryAventure['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>

        <h2>Bande dessinnées</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryBandesDessinees as $bookOfCategoryBandesDessinees) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryBandesDessinees['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryBandesDessinees['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>

        <h2>Manga</h2>
        <div class="cards">
            <?php foreach ($booksOfCategoryManga as $bookOfCategoryManga) {
                ?>
                    <div class="card">
                        <img src="<?php echo $bookOfCategoryManga['cover'] ?>" alt="image livre">
                        <div class="btnCard">
                            <a href="vue/detailBook.php/<?php echo $bookOfCategoryManga['id'] ?>" id="btnDetail">Voir le détail</a>
                            <a href="#" id="btnCart">Ajouter au panier</a>
                        </div>
                    </div>
            <?php }
            ?>
        </div>
    </div>
    </div>
</div>
</body>
</html>
