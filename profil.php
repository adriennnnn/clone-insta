<?php session_start(); ?>
<?php
include './utils/link.php';

$DB = "SELECT * FROM users WHERE id = ?";
$pdo = $bdd->prepare($DB);
$result = $pdo->execute(array($_GET['id']));
$result = $pdo->fetch(PDO::FETCH_ASSOC);
// var_dump($result);
// die;
?>
<?php
include 'partials/header.php';
?>

<link href="./style/style_profil.css" rel="stylesheet">
<div class="profile-section">
    <div class="profile">
        <div class="profile-image">
            <img src="<?= $result['profil_picture'] ?>" alt="">
        </div>
        <div class="profile-user-settings">
            <h1 class="profile-user-name"><?= $result['pseudo'] ?></h1>
            <form action="./profil_edit.php" method="post">
                <?php
                if ($_SESSION['id'] == $_GET['id']) : ?>
                    <button class="btn profile-edit-btn">Edit Profile</button>
                <?php endif;?>
                <input type="hidden" name="user_id" value="<?= $result['id'] ?>">
                <!-- <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button> -->
                <!-- btn hidden pratique pour jouer au modo -->
            </form>
        </div>
        <div class="profile-stats">
            <ul>
                <?php
                $idpost = $_GET['id'];
                $tt = "SELECT COUNT(*) as posts FROM post WHERE id_user = '$idpost' ";
                $pdo2 = $bdd->prepare($tt);
                $rst = $pdo2->execute();
                $rst = $pdo2->fetch(PDO::FETCH_ASSOC);
                ?>
                <li><span class="profile-stat-count"><?= $rst['posts'] ?></span> posts</li>
                <li><span class="profile-stat-count">1</span> adrien</li>
                <li><span class="profile-stat-count">3 178 643</span> Thomas</li>
            </ul>
        </div>
        <div class="profile-bio">
            <p><span class="profile-real-name"></span><?= $result['description'] ?> </p>
        </div>
    </div>
    <!-- fin de profile section -->
</div>

<!-- gallery partie -->
<?php
$DaB = "SELECT * FROM `post` WHERE id_user= ?";
$pdostment = $bdd->prepare($DaB);
$rlt = $pdostment->execute([$_GET['id']]);
$rlt = $pdostment->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="profile-section">


    <div class="main">
        <div class="gallery">
            <?php foreach ($rlt as $rlts) { ?>
                <div class="gallery-item">
                        <img src="<?= $rlts['url_post'] ?>" class="gallery-image" alt="">
                </div>
            <?php } ?>
        </div>
    </div>













            <!-- <div class="modal-body">
            </div>
            <div class="gallery-item-info">
                <ul>
                    <!-- <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> <!-- nombre de like-->
            <!-- </li>
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> <!-- nombre de commentaire -->
            <!-- </li>
                </ul> 
            </div> -->





</div>

<?php

include './partials/footer.php';
?>
