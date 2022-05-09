<?php
include 'partials/header.php';
include './utils/link.php';
?>
<link href="./style/style_home.css" rel="stylesheet">
<?php
$DB = "SELECT * FROM users WHERE 1";
$pdo = $bdd->prepare($DB);
$result = $pdo->execute([$_SESSION['id']]);
$result = $pdo->fetchAll(PDO::FETCH_ASSOC);

// foreach($result as $rlt){
?>
<section class="main">
    <div class="wrapper">
        <div class="left-col">
            <div class="status-wrapper">
                <?php foreach ($result as $rlt) { ?>
                    <div class="status-card">
                        <div class="profile-pic">
                            <a href="./profil.php?id=<?= $rlt['id'] ?>">
                                <img src="<?= $rlt['profil_picture'] ?>" alt="photo de profile">

                        </div>
                        <p class="username"><?= $rlt['pseudo'] ?></p> </a>
                    </div>
                    <!-- // tout les users de la table users -->
                <?php } ?>
            </div>
        </div>
</section>
<?php

?>
<section class="main">
    <div class="wrapper">
        <div class="left-col">
            <div class="post">
                <?php
                $DB = "SELECT `url_post`, `id_user` FROM post ORDER BY `time_post` DESC";
                $pdo = $bdd->prepare($DB);
                $result = $pdo->execute();
                $result = $pdo->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $rlt) {
                ?>
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="<?= $rlt['profil_picture'] ?>" alt="pdp du post"></div>
                        <p class="username">non disponible</p>
                    </div>
                </div>
                    <div class="post-img">
                        <img src="<?= $rlt['url_post'] ?>">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>