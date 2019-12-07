<?php
function get_session_msg()
{
    $msg="";

    if(isset($_SESSION["msg"]))
    {
        $msg=$_SESSION["msg"];
        unset($_SESSION["msg"]);
    }

    return $msg;
