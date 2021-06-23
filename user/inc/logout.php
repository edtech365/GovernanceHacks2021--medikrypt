<?php
    session_start();
    if(isset($_SESSION["isLogin"])){
        session_destroy();
    }
    header("Location: ../");

?>