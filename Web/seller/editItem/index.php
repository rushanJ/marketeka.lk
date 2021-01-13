<?php
session_start();
if (!isset($_SESSION["shopId"])) {
	header("Location: ../index.php"); /* Redirect browser */
    exit();
}
include "../CommenLayouts/header.php";
include "../CommenLayouts/slideDrawer.php";
?>

<?php


include "title.php";
include "info.php";
include "addItem.php";

?>

<?php
include "../CommenLayouts/footer.php";
?>

