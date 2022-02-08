<?php
include './utils/link.php'; 

$DB = "SELECT * FROM users WHERE id = ?";
$pdo = $bdd->prepare($DB);
$result = $pdo->execute(array($_GET['id']));
$result = $pdo->fetch(PDO::FETCH_ASSOC);

?>

<?php include 'partials/header.php'; 
?>

<link href="style_profil.css" rel="stylesheet">
<div class="profile-section">
    <div class="profile">
        <div class="profile-image">
            <img src="<?= $result['profil_picture'] ?>" alt="">
        </div>
        <div class="profile-user-settings">
            <h1 class="profile-user-name"><?= $result['pseudo'] ?></h1>
            <button class="btn profile-edit-btn">Edit Profile</button>
            <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
        </div>
        <div class="profile-stats">
            <ul>
                <li><span class="profile-stat-count">164</span> posts</li>
                <li><span class="profile-stat-count">188</span> followers</li>
                <li><span class="profile-stat-count">206</span> following</li>
            </ul>
        </div>
        <div class="profile-bio">
            <p><span class="profile-real-name">Jane Doe</span><?= $result['description'] ?> 📷✈️🏕️</p>
        </div>
    </div>
    <!-- fin de profile section -->
</div>

<!-- gallery partie -->


<div class="profile-section">
    <div class="gallery">
        <div class="gallery-item" tabindex="0">
            <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="">
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>
            </div>
        </div>
    </div>
</div>



