<?php
session_start();
$_SESSION["shopId"]=1;
if (!isset($_SESSION["shopId"])) {
	//header("Location: ../index.php"); /* Redirect browser */
    exit();
}
include "../CommenLayouts/header.php";
include "../CommenLayouts/slideDrawer.php";
?>

<?php



include "tileButtons.php";
include "info.php";
?>

<?php
include "../CommenLayouts/footer.php";
?>

