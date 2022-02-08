<?php session_start() ; ?>
<?php
if (isset($_POST['Pseudo']) 
&& !empty($_POST['Pseudo']) 
&& isset($_POST['Pdp']) 
&& !empty($_POST['Pdp'])
&& isset($_POST['Descrition']) 
&& !empty($_POST['Descrition'])) {

// $id = $_GET['User_id'];    
    include '../utils/link.php';


$pdostmt = $bdd->prepare('UPDATE  users SET pseudo = ?, profil_picture = ?, description = ? WHERE id= ?');
$result = $pdostmt->execute([$_POST['Pseudo'],$_POST['Pdp'],$_POST['Descrition'], $_GET['User_id']]);
    
if ($result) {
    header('Location: ../profil.php?id='.$_SESSION['id'].'?success=modification réussie !');
} else {
    header('Location: ../profil.php?error=la modification a échoué');
}

var_dump('tt');
die;

}else{
    header('Location: ../profil_edit.php?id='.$_SESSION['id'].'?error= Vous devez remplir tous les champs');


}