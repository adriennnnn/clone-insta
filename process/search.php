<?php session_start() ;?>
<?php
include '../utils/link.php';

$search = $_POST['Search'];
    // var_dump($search);
    // die;
$sql = "SELECT id FROM users WHERE pseudo LIKE '$search'";
$result = $bdd->query($sql);
$rlt = $result->fetch();

if ($rlt) {
    header('Location: ../profil.php?id='.$rlt['id'].'');

}else{

}
