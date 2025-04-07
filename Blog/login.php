<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Blog</title>
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
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="auth-container">
                    <div class="auth-header">
                        <h2>Bienvenue !</h2>
                        <p>Veuillez vous connecter</p>
                    </div>
                    <form method="POST" action="treatment_login.php" class="auth-form">
                        <div class="form-group">
                            <label for="mail">Email</label>
                            <input name="mail" type="email" class="form-control" id="mail" placeholder="Entrez votre email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                        </div>
                        <button name="login" type="submit" class="btn btn-primary">Se connecter <i class="fas fa-sign-in-alt ms-2"></i></button>
                    </form>
                    <div class="auth-footer">
                        <p>Pas encore de compte? <a href="sign_in.php">Inscrivez-vous ici</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html