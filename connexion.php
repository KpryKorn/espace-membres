<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>

<body>

    <div id="center-container">
        <p>Merci de vous connecter pour accéder au contenu.</p>
        <img src="Firefighter-PNG-Photo.png" alt="image de sapeur pompier" id="image-pompier">
        <form method="POST" action="">
            <input type="password" name="password" placeholder="Mot de passe">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = $_POST['password'];

            if ($password === 'pompier2023') {
                header('Location: ./index.html');
                exit();
            } else {
                echo '<p id="error-message">Mot de passe incorrect.</p>';
            }
        }
        ?>
    </div>

</body>

</html>