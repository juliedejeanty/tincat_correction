<?php
    require("head.php");
    var_dump($_GET);
?>


<body>
    <div class="form-container">
    <!-- formulaire method post pour modifier seulement le pseudo qui exécute la fonction userEdit.php!--> 
        <form action="" method="post">
            <p>Changer de pseudo</p>
            <input type="text">
            <input type="submit" value="Modifier">
        </form>
</body>