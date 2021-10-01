<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/normalize.css">
    <link rel="stylesheet" href="../public/css/registration.css">
    <title>Inscription</title>
</head>
<body>

<div class="container_general">
    <div class="container">
        <div class="picture">
            <img src="../public/images/pexels-polina-zimmerman-3747505.jpg" alt="">
            <div class="text-picture">
                <p>Digital library <span>la culture partout</span></p>
            </div>
        </div>

        <div class="form">
            <h1>Inscription</h1>
            <form id="form">

                <div class="field">
                    <label for="firstname">Prénom</label><br/>
                    <input type="text" id="firstname" name="firstname">
                </div>

                <div class="field">
                    <label for="username">Nom</label><br/>
                    <input type="text" id="username" name="username">
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="field">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password">
                </div>

                <div class="field">
                    <label for="verif_password">Indiquer votre mot de passe à nouveau</label>
                    <input type="password" id="verif_password" name="verif_password">
                </div>

                <button type="submit" id="btn_submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>
<script src="../public/js/registration.js"></script>
</body>
</html>
