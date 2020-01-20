<?php
    echo "Edit User";

    // 1 : connect to database
    require("database.php");

    //new pseudo
    //Pour s'assurer que l'on recoit bien toute les informations via le formulaire on fait un var_dump
    var_dump($_POST["newPseudo"]);
    var_dump($_POST["user_id"]);


    //Préparer Update
    //Update dans la table users le pseudo par le nouveau pseudo à condition que l'user_id soit égal à l'user_id de l'utilisateur 
    $req = $db->prepare("UPDATE users SET pseudo = :newPseudo WHERE id = :user_id");

        //2ème méthode 
        //$req = $db->prepare("UPDATE users SET pseudo=?  WHERE id=?");

    //bindParam (id, newPseudo)
    //On défini tous les paramètres de sorte à ce que l'userID précédent corresponde à celui de l'utilisateur
    // Les deux points servent à sélectionner, à attribuer une valeur à quelque chose, ça sert à définir une variable. On sélectionne donc la variable newpseudo que l'on remplace par le nouveau pseudo avec la méthode POST
    $req->bindParam(":newPseudo" , $_POST["newPseudo"]);
    $req->bindParam(":user_id" , $_POST["user_id"]);


        //Pour la 2ème méthode : rédiger comme ci-dessous en veillant à renseigner les valeurs dans le bon ordre
        //$req->bindParam([$_POST["newPseudo"]] , [$_POST["user_id"]]);

    
    //execute
    $req->execute();

    //header Location : on redirige l'utilisateur vers la page profils
    header("location:../profils.php");


