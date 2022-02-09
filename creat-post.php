<?php
 include 'partials/header.php'; 
?>
<?php
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    include './utils/link.php';

    // $DB = "SELECT  FROM users WHERE id = ?";
    // $pdo = $bdd->prepare($DB);
    // $result = $pdo->execute(array($_SESSION['id']));
    // $result = $pdo->fetch(PDO::FETCH_ASSOC);


    if ($id) {

?>
        <link href="./style/style_edit_profil.css" rel="stylesheet">
        <div class="container">
            <h1>Creer un post</h1>
            <form action="./process/post-edit.php?User_id=<?=$_SESSION['id']?>" method="post">
                <label>url de votre image</label>
                <input type="text" name="imgUrl" >
                <label>description du post</label>
                <div class="textarea">
                    <textarea name="DescritionPost"></textarea>
                </div>
                <input type="submit" value="publier">
            </form>
        </div>
<?php
    } else {
    }
} else {
}

?>