<?php
    //require_once("connect.php");
    require_once("../../../config/connect.php");
    //require_once("../../config/connect.php");
    //require_once("/config/connect.php");

    createDatabase();
    createDoctorsTable();
    createPatientTable();

if (!isset($_POST["admin-login"])){
    echo "<h1>403 Forbidden!</h1>";
}
 
$username = $_POST['admin-username'];
$password = $_POST['admin-password'];

function validateEmptyField(){
    if(empty($username) || empty($password)){
        header("Location: ../index.php?err_msg=Please fill in all fields");
    }
}
?>