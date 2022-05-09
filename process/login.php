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

    // $user = pdostmtUser->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $monId = $result['id'];
        
    }else{
        
        $pdostmt = $bdd->prepare('INSERT INTO `users`(`ip_creation`, `pseudo`,`password`) VALUES (?,?,?)');
        $rlt = $pdostmt->execute([$_SERVER['REMOTE_ADDR'],$_POST['Pseudo'],$_POST['Password']]);
        $monId= $bdd->lastInsertId();
        // header('Location: ../profil.php?id='.$rlt['id']);        

        
        // var_dump("ttt");
        // die;
    }
    $_SESSION['pseudo'] = $_POST['Pseudo'];
    $_SESSION['id'] = $monId ;
    header('Location: ../profil.php?id='.$monId);
}else{

    header('location: ../index.php?Error=Un des champs est incorrect ou n\'est pas rempli');
}

?>
