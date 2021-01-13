<?php
session_start();
if (!isset($_SESSION["Id"])) {
	header("Location: ../index.php"); /* Redirect browser */
    exit();
}

include "../CommenLayouts/header.php";
include "../CommenLayouts/slideDrawer.php";
?>

<?php


include "title.php";
include "info.php";
include "tileButtons.php";

?>

<?php
include "../CommenLayouts/footer.php";
?>

