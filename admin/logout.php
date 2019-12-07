<?php
session_start();
include("connectin.php");
session_destroy();
header("location:index.php");
?>