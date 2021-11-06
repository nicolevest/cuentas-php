<?php
//logout.php
session_start();
session_destroy();
header("location:sispambaindex.php?action=login");
?>
