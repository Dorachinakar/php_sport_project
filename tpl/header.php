<?php define('LOGO', 'sport<i class="bi bi-app"></i>app') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sport app <?= isset($page_title) ? "| $page_title" : ""; ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
            <div class="container">
                <a class="navbar-brand" href="./"><?= LOGO ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./about.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">blog</a>
                        </li>
                        <?php if (!isset($_SESSION['user_id'])) : ?>
                            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="./sign_in">sign in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sign_up">sign up</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="./profile.php"><?= $_SESSION['user_name'] ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sign_out.php">sign out</a>
                                </li>
                            <?php endif; ?>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </header>