<?php

var_dump($_POST["id"]);


    // on se connecte à notre base
    require("database.php");

    $id = $_POST['id'];

    // lancement de la requête
    if(empty($_POST['id'])){
        $messagepseudo = "Veuillez renseigner un nouveau pseudo";
        header("Location: ../userEditForm.php?message=$messagepseudo");   
    }
    
    else{
        $req = $db->prepare("UPDATE users SET $id=? WHERE id=?");
        // execute
        $req->execute([$id]);
        $messageconfirmpseudo = "Votre pseudo a bien été changé";
        header("location: ../profils.php?message=$messageconfirmpseudo");
    }

    
