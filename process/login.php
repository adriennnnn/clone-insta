<?php session_start() ;?>
<?php 
if(isset($_POST['Pseudo']) && 
!empty($_POST['Pseudo']) &&
isset($_POST['Password']) &&
!empty($_POST['Password'])
){
include '../utils/link.php'; 

    $pdostmtUser = $bdd->prepare('SELECT `pseudo`,`id`,`password` FROM `users` WHERE pseudo = ? && password = ?');
    $pdostmtUser->execute([$_POST['Pseudo'], $_POST['Password']]);
    $result = $pdostmtUser->fetch();
    $monId = $result['id'];
    // $user = pdostmtUser->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        
        header('Location: ../profil.php?id='.$result['id']);
        
    }elseif(empty($monId)){
        
        $pdostmt = $bdd->prepare('INSERT INTO `users`(`ip_creation`, `pseudo`,`password`) VALUES (?,?,?)');
        $rlt = $pdostmt->execute([$_SERVER['REMOTE_ADDR'],$_POST['Pseudo'],$_POST['Password']]);
        $monIdDeux= $bdd->lastInsertId();
        // header('Location: ../profil.php?id='.$rlt['id']);        

        header('Location: ../profil.php?id='.$monId);
        // var_dump("ttt");
        // die;
    }
}else{

    header('location: ../index.php?Error=Un des champs est incorrect ou n\'est pas rempli');
}

$_SESSION['pseudo'] = $result['pseudo'];
$_SESSION['id'] = $monId ;
?>
