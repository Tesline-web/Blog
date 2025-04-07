<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - My Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php 
                include_once('functions.php');
                include_once('menu.php'); ?>
            </div>
        </div>
        <div class="auth-welcome-banner">
            <div class="container">
                <h1>Venez donner votre avis</h1>
                <p>Crée un compte pour commencer à partager vos idées !<p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="auth-container">
                    <div class="auth-header">
                        <h2>Crée un compte</h2>
                    </div>
                    <form method="POST" action="treatment_sign_in.php" class="auth-form">
                        <div class="form-group">
                            <label for="mail">Email</label>
                            <input name="mail" type="email" class="form-control" id="mail" placeholder="Entrez votre email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Choisissez votre mot de passe">
                        </div>
                        <button name="sign_in" type="submit" class="btn btn-primary btn-gradient">Crée un compte <i class="fas fa-user-plus ms-2"></i></button>
                    </form>
                    <div class="auth-footer">
                        <p>Vous avez un compte ? <a href="login.php">Connectez-vous ici</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>