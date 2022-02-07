<?php 
    
if(isset($_POST['Pseudo']) && 
!empty($_POST['Pseudo'])){

include '../utils/link.php'; 

    $pdostmtUser = $bdd->prepare('SELECT `pseudo`,`id` FROM `users` WHERE pseudo = ?');
    $pdostmtUser->execute([$_POST['Pseudo']]);
    $result = $pdostmtUser->fetch();
    // $user = pdostmtUser->fetch(PDO::FETCH_ASSOC);


    
    if ($result) {

    header('Location: ../page1.php?id='.$result[`id`]);

    }else {
        $pdostmt = $bdd->prepare('INSERT INTO `users`(`ip_creation`, `pseudo`) VALUES (?,?)');
        $result = $pdostmt->execute([$_SERVER['REMOTE_ADDR'],$_POST['Pseudo']]);

        header('Location: ../page1.php?id='.$bdd->lastInsertId());
    }
}else{
    // header('location: ../index.php');
}
?>
