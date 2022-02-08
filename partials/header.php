<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instascam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link href="../style/style.css" rel="stylesheet"> -->
    <link href="../style/style_header.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="navigation">
            <div class="logo">
                <a class="no-underline" href="#">
                    InstaScam
                </a>
            </div>
            <div class="navigation-search-container">
                <i class="fa fa-search"></i>
                <input class="search-field" type="text" placeholder="Search">
                <div class="search-container">
                    <div class="search-container-box">
                        <div class="search-results">

                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-icons">
                <a href="./home.php" target="_blank" class="navigation-link">
                    <i class="fa fa-compass"></i>
                </a>
                <a href="./profil.php?id=?'.<?=$_GET['id']?>.'" class="navigation-link">
                    <i class="fa fa-plus-square"></i>
                </a>
                <a href="./profil.php?id=?'.<?=$_GET['id']?>.'" class="navigation-link">
                    <i class="fa fa-user-circle"></i>
                </a>

            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>