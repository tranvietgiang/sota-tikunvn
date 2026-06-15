<!DOCTYPE html>
<html lang="<?= $config['website']['lang-doc'] ?>">

<head>
    <?php include TEMPLATE . LAYOUT . "head.php"; ?>
    <?php include TEMPLATE . LAYOUT . "css.php"; ?>
</head>

<body>

    <div id="wrapper">

        <div class="content1">
            <?php

            include TEMPLATE . LAYOUT . "header.php";
            include TEMPLATE . LAYOUT . "main.php";
            include TEMPLATE . LAYOUT . "footer.php";
            include TEMPLATE . LAYOUT . "js.php";
            ?>
        </div>
    </div>

</body>

</html>