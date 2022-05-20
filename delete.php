<?php 

    include_once('function.php');

    if(isset($_GET['username'])){
        $username = $_GET['username'];
        $deletedata = new DB_con;
        $sql = $deletedata->delete($username);

        if($sql){
            echo "<script> alert('Record was deleted!!'); </script>";
            echo "<script> window.location.href='index.php'; </script>";
        }
    }

?>