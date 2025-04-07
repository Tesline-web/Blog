<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <?php include_once('functions.php');
                  include_once('menu.php'); ?>
            </div>
            <div class="col-12">
                <div class="container py-4">
                    <div class="row justify-content-center">
                        <?php 
                        $articles = get_all_articles();
                        if ($articles) {
                            foreach($articles as $article) { ?>
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="card-title text-center mb-0"><?= $article['title'] ?></h3>
                                        </div>    
                                        <div class="card-body">
                                            <p class="card-text"> <?php echo get_exerpt($article['content']); ?></p>
                                            <div class="text-center mt-3">
                                                <a href="article.php?id=<?= $article['id'] ?>" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            }
                        } ?>
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