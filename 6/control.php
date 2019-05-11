<?php

include 'database.php';

$control = new gabungControl;

if(isset($_GET['id'])){
    $skill = $_POST['skill'];

    //echo $skill.$_GET['id'];
    $control->insertSkill($_GET['id'], $skill);
    header("Location: index.php");
}else{
    $nama = $_POST['nama'];
    $dataUser = $control->insertProg($nama);
    header("Location: index.php");
}
?>