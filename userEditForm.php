<?php
    require("head.php");

?>


<body>
    <div class="form-container">
        <strong> <?php echo $_GET["id"];?> </strong>

        <form action="functions/userEdit.php" method="post">
            <p>Changer de pseudo</p>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>">
            <input type="submit" value="Modifier">
        </form>
</body>