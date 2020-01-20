<?php
    echo "Edit User";

    // 1 : connect to database
    require("database.php");

    //ID
    //new pseudo
    //Pour s'assurer que l'on recoit bien toute les informations via le formulaire

    var_dump($_POST);

    $req = $db->prepare("UPDATE users SET id = ? WHERE id = ?");

    //Update
    $req->execute(["id"]);    

    //header Location
    //header("location:../profils.php");


