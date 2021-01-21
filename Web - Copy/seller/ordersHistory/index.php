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



include "info.php";
include "viewOrders.php";

?>

<?php
include "../CommenLayouts/footer.php";
?>

