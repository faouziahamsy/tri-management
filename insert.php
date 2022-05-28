<?php
include 'db_connect.php';

extract($_POST);

if(isset($_POST['sujetSend']) && isset($_POST['groupeSend'])
&& isset($_POST[ 'encadrantSend'])&& isset($_POST[ 'datedebutSend'])
&& isset($_POST['datefinSend'])&& isset($_POST[ 'descriptionSend'])){



    $sql="insert into cellule (id_cellule,groupe,sujet,id_encadrant,description,date_debut,date_fin)
    values ('$idcelluleSend','$groupeSend','$sujetSend', '$encadrantSend','$descriptionSend','$datedebutSend','$datefinSend')";
    
    $result=mysqli_query($conn,$sql);
}


?>

  