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
                <button class="btn profile-edit-btn">Edit Profile</button>
                <input type="hidden" name="user_id" value="<?=$result['id']?>">
                <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="profile-stats">
            <ul>
                <li><span class="profile-stat-count">2727</span> posts</li>
                <li><span class="profile-stat-count">42</span> followers</li>
                <li><span class="profile-stat-count">rien</span> following</li>
            </ul>
        </div>
        <div class="profile-bio">
            <p><span class="profile-real-name"></span><?= $result['description'] ?> 📷✈️🏕️</p>
        </div>
    </div>
    <!-- fin de profile section -->
</div>

<!-- gallery partie -->


<div class="profile-section">
    <div class="gallery">
        <div class="gallery-item" tabindex="0">
            <img src="<!-- la il va y avoir un problem-->" class="gallery-image" alt="">
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> <!-- nombre de like--></li>
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> <!-- nombre de commentaire --></li>
                </ul>
            </div>
        </div>
    </div>
</div>



