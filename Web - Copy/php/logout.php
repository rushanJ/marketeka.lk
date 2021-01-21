<?php
session_start();
session_destroy();

header("Location: ../index"); /* Redirect browser */
exit();
?>
