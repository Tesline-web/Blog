<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body> 
    
    <?php
    include_once('functions.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php include_once('menu.php'); ?>
            </div>
        </div>
        <div class="admin-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h1><i class="fas fa-columns me-2"></i>Dashboard</h1>
                        <p class="text-muted">Manage your blog posts</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="admin-card">
                <div class="table-responsive">
                    <table class="table table-hover admin-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $articles = get_all_articles_admin();
                            foreach($articles as $article): 
                            ?>
                            <tr>
                                <td><?= $article['id'] ?></td>
                                <td>
                                    <div class="article-title-cell">
                                        <span class="article-title"><?= $article['title'] ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="updatepost.php?id=<?= $article['id'] ?>" class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <?php include("t_delete.php") ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
</body>
</html>