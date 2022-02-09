<?php session_start() ;?>
<?php 
if(isset($_POST['imgUrl']) && 
    !empty($_POST['imgUrl'])&&
    isset($_POST['DescritionPost']))
{
    include '../utils/link.php';
    // $pdostmtUser = $bdd->prepare('SELECT * FROM `post`');
    // $pdostmtUser->execute();
    // $result = $pdostmtUser->fetch();
    $pdostmt = $bdd->prepare('INSERT INTO `post`(`id_user`,`ip`, `url_post`,`description`) VALUES (?,?,?,?)');
    $result = $pdostmt->execute([$_SESSION['id'] ,$_SERVER['REMOTE_ADDR'],$_POST['imgUrl'], $_POST['DescritionPost']]);

    if ($result) {
        header('Location: ../profil.php?id='.$_SESSION['id'].'?success=votre post a été ajouté avec succès !');
    } else {
        header('Location: ../profil.php?error=echec de la publication');
    }
}else{

}