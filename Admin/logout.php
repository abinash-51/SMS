<?php
session_start();
session_unset();
session_destroy();
header ('location:school/Admin/login.php');
?>