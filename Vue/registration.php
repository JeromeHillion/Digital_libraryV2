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
                    <label for="firstname">Prénom</label>
                    <div class="inputField">
                        <input type="text" id="firstname" name="firstname">
                        <img src="../public/images/icons/check.png" id="checkFirstname" class="check" alt="icon check">
                        <img src="../public/images/icons/multiply.png" id="errorFirstname" class="error" alt="icon error">
                    </div>
                </div>


                <div class="field">
                    <label for="username">Nom</label>
                    <div class="inputField">
                        <input type="text" id="username" name="username">
                        <img src="../public/images/icons/check.png"  class="check" id="checkUsername" alt="icon check">
                        <img src="../public/images/icons/multiply.png"  class="error" id="errorUsername" alt="icon error">
                    </div>
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <div class="inputField">
                        <input type="email" id="email" name="email">
                        <img src="../public/images/icons/check.png"  class="check" id="checkEmail" alt="icon check">
                        <img src="../public/images/icons/multiply.png"  class="error" id="errorEmail" alt="icon error">
                    </div>
                </div>

                <div class="field">
                    <label for="password">Mot de passe</label>
                    <div class="inputField">
                        <input type="password" id="password" name="password">
                        <img src="../public/images/icons/check.png"  class="check" id="checkPassword" alt="icon check">
                        <img src="../public/images/icons/multiply.png"  class="error" id="errorPassword" alt="icon error">
                    </div>
                </div>

                <div class="field">
                    <label for="verif_password">Indiquer votre mot de passe à nouveau</label>
                    <div class="inputField">
                        <input type="password" id="verifPassword"  name="verifPassword">
                        <img src="../public/images/icons/check.png"  class="check" id="checkVerifPassword" alt="icon check">
                        <img src="../public/images/icons/multiply.png"  class="error" id="errorVerifPassword" alt="icon error">
                    </div>
                </div>

                <button type="submit" id="btn_submit">Envoyer</button>
            </form>
        </div>
    </div>
    <script src="../public/js/registration.js"></script>
</body>
</html>
