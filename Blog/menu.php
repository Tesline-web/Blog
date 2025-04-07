<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        .nav {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-color: #333;
            margin: 0;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #f39c12;
            color: #fff;
        }

        .nav-item:last-child {
            margin-right: 0;
        }

        .nav-link {
            font-weight: bold;
        }

        .nav-link:focus {
            outline: none;
        }

        .nav-item a {
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-item {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

    <ul class="nav">
        <?php if(!isset($_SESSION['connected'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="sign_in.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        <?php endif; ?>

        <?php if(isset($_SESSION['connected'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="addpost.php">Ajouter un article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_blog.php">Admin blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        <?php endif; ?>
    </ul>

</body>
</html>
