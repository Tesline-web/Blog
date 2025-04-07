<!DOCTYPE html>
<html lang="fr">
    <?php
    include_once('functions.php');
    $article = get_one_article($_GET['id']); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article['title'] ?></title>
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
                <?php include_once('menu.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h2><?= $article['title'] ?></h2>

                    <div class="post-content">
                        <?= $article['content'] ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?php include_once('widgets/sidebar.php'); ?>
            </div>
        </div>
    </div>
</body>
</html>