<?php
session_start();
include("connectin.php");
$_session['login']='';
$_session['user']=0;
session_destroy();
header("location:index.php");
?>