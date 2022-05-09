<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instascam</title>
    <link rel="icon" href ="../image/Instagram_logo_2016.svg.png" type="image/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link href="../style/style.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="../style/style_header.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="navigation">
            <div class="logo">
                <a class="no-underline" href="../home.php">
                    InstaScam
                </a>
            </div>
            <div class="navigation-search-container">
                <i class="fa fa-search"></i>
                <form action="../process/search.php" method="post">
                    <input class="search-field" type="text" name="Search" placeholder="Rechercher">
                </form>
                <div class="search-container">
                    <div class="search-container-box">
                        <div class="search-results">

                        </div>
                    </div>
                </div>
            </div>
            <!-- target="_blank"  a place  dans un <a> et permet d'ouvrire un url dans une nouvelle page-->
            <div class="navigation-icons">
                <a href="../home.php?id=<?= $_SESSION['id'] ?>" class="navigation-link">
                    <i class="fa fa-compass"></i>
                </a>
                <a href="../creat-post.php?id=<?= $_SESSION['id'] ?>" class="navigation-link">
                    <i class="fa fa-plus-square"></i>
                </a>
                <a href="./profil.php?id=<?= $_SESSION['id'] ?>" class="navigation-link">
                    <i class="fa fa-user-circle"></i>
                </a>
                <a href="../process/logout.php?id=<? $_SESSION['id'] ?>" class="navigation-link">
                    <i class="fa fa-sign-out"></i>
                </a>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>