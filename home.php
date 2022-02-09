<?php
include 'partials/header.php';
include './utils/link.php';
?>
<link href="./style/style_home.css" rel="stylesheet">
<?php
$DB = "SELECT * FROM users WHERE id = ?";
$pdo = $bdd->prepare($DB);
$result = $pdo->execute([$_SESSION['id']]);
$result = $pdo->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $rlt){
?>
<section class="main">
    <div class="wrapper">
        <div class="left-col">
            <div class="status-wrapper">
                <div class="status-card">
                    <div class="profile-pic">
                        <a href="./profil.php?id=<?=$rlt['id']?>">
                        <img src="<?=$rlt['profil_picture']?>" alt="photo de profile">
                        </a>
                    </div>
                    <p class="username"><?=$rlt['pseudo']?></p>
                </div>
                // tout les users de la table users
        </div>
    </div>
</section>
<?php
}
?>
<sectio class="main">
    <div class="wrapper">
        <div class="left-col">

            <div class="post">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="" alt=""></div>
                        <p class="username">ho que oui</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>