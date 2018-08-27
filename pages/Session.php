<?php

    session_start();
    if(empty($_SESSION['username'])){
        header('location:../index.php');
    }
    #else{
        #echo "<a href='../logout.php'> Logout</a>";
    #}
?>