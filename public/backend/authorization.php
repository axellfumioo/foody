<?php

function checkRole()
{
    session_start();
    if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
        return true;
    } else{
        $_SESSION['msg'] = "Error! Access Denied";
        header("Location: localhost:3000/public/index.html");
    }
}
?>