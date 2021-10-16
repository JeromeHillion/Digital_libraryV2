<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/detailsBookView.css">
    <title><?php echo $bookDetails['name'] ?></title>
</head>
<body>
<?php include_once 'fragment/header.php'?>
<div class="containerGeneral">
    <div class="infosBook">
        <div class="bookIdentity">
            <div class="info">
                <div class="cover"><img src="<?php echo $bookDetails['cover'] ?>" alt="image couverture livre"></div>
                <div class="infoIdentity">
                    <h1>Nom du livre : <?php echo $bookDetails['name'] ?></h1>
                    <span>Nom de l'autheur :</span>
                    <p><?php echo $author['name']?></p>
                    <span>Catégorie :</span>
                    <p> <?php echo $category['name']?></p>
                    <span>Date de publication : </span>
                    <p><?php echo $datePublication ?></p>
                    <a href="#" id="btnCart">Ajouter au panier</a>
                </div>

            </div>
            <div class="summary">
                <h2>Résumé</h2>
                <p><?php echo $bookDetails['summary']?></p>
            </div>
        </div>

        </div>


</div>
</body>
</html>