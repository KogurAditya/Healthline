<?php
include("function.php");
session_start();
session_destroy();
redirect("login.php");
?>