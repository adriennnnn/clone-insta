<?php
if (isset($_POST['user_id'])) {
    $id = $_POST['user_id'];

    include './utils/link.php';

    $DB = "SELECT * FROM users WHERE id = ?";
    $pdo = $bdd->prepare($DB);
    $result = $pdo->execute(array($_POST['user_id']));
    $result = $pdo->fetch(PDO::FETCH_ASSOC);


    if ($result) {

?>
        <link href="./style/style_edit_profil.css" rel="stylesheet">
        <div class="container">
            <h1>Éditer votre profil</h1>
            <form action="./process/edit-profil.php?User_id=<?= $result['id'] ?>" method="post">
                <label>Votre Pseudo</label>
                <input type="text" name="Pseudo" value="<?= $result['pseudo'] ?>">

                <label>l'url de Votre pdp</label>
                <input type="text" name="Pdp" value="<?= $result['profil_picture'] ?>">

                <label>Votre description</label>
                <div class="textarea">
                    <textarea name="Descrition" value="<?= $result['description'] ?>"></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
<?php
    } else {
    }
} else {
}

?>