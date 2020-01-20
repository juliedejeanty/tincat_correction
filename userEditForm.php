<?php
    require("head.php");


    //Récupérer l'ID
    var_dump($_GET);
?>


<body>
    <div class="form-container">
    <!-- formulaire method post pour modifier seulement le pseudo qui exécute la fonction userEdit.php!--> 
        <form action="functions/editUser.php" method="post">
            <p>Changer de pseudo</p>
            <!-- le champs name est indispensable pour faire en sorte que le pseudo soit correctement transmit--> 
            <input type="text" name="newPseudo">
            <!-- Vu qu'on utilise la method Post, on peut utiliser un autre champs pour transférer des infos d'une page à l'autre plutot que d'utiliser la method GET--> 
            <input type="hidden" name="user_id" value="<?php echo $_GET["user_id"]?> "> <!--Pour transmettre l'id de l'utilisateur on utilise donc GET et on rend le champs invisible de sorte à ce que l'information ne soit pas visible mais qu'elle soit envoyée à l'utilisateur. Attention cette méthode n'est pas sécuritaire puisque n'importe qui peut modifier le code en faisant inspecter !-->
            <input type="submit" value="Modifier">
        </form>
</body>