<?php
    $isEmpty = FALSE;

    function connect($databaseName = FALSE){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "Doctors_Appointment_System";

    
        $conn = $databaseName? :new mysqli($hostname, $username, $password);
        if($conn->connect_error){
            die("Not connected: ".$conn->connect_error);
        }
        return $conn;
    }

    function createDatabase(){
        $conn = connect();
        $sql = "CREATE DATABASE IF NOT EXISTS Doctors_Appointment_System";

        if($conn->query($sql) !== TRUE){
            echo "Database creation failed ".$conn->error;
        }
    }

    function createAdminsTable(){
        $conn = connect("Doctors_Appointment_System");
        $sql_table = "CREATE TABLE IF NOT EXISTS Users(
            userID INT(6) AUTO_INCREMENT PRIMARY KEY,
            firstname varchar(200) NOT NULL,
            lastname varchar(200) NOT NULL,
            email varchar(200) NOT NULL,
            pass varchar(200) NOT NULL,
            gender varchar(20) NOT NULL,
            phone INT(70) NOT NULL,
            username varchar(200) UNIQUE NOT NULL,
            dob date NOT NULL,
            user_type varchar(20) NOT NULL
        )";
        if($conn->query($sql_table) !== TRUE){
            echo "<br>Table creation failed: ".$conn->error;
        }
    }

    function createDoctorsTable(){
        $conn = connect("Doctors-Appointment");
        $sql_table = "CREATE TABLE IF NOT EXISTS Users(
            userID INT(6) AUTO_INCREMENT PRIMARY KEY,
            firstname varchar(200) NOT NULL,
            lastname varchar(200) NOT NULL,
            email varchar(200) NOT NULL,
            pass varchar(200) NOT NULL,
            gender varchar(20) NOT NULL,
            phone INT(70) NOT NULL,
            username varchar(200) UNIQUE NOT NULL,
            dob date NOT NULL,
            user_type varchar(20) NOT NULL
        )";
        if($conn->query($sql_table) !== TRUE){
            echo "<br>Table creation failed: ".$conn->error;
        }
    }   
    
    function createPatientTable(){
        $conn = connect("Doctors_Appointment_System");
        $sql_table = "CREATE TABLE IF NOT EXISTS Users(
            userID INT(6) AUTO_INCREMENT PRIMARY KEY,
            firstname varchar(200) NOT NULL,
            lastname varchar(200) NOT NULL,
            email varchar(200) NOT NULL,
            pass varchar(200) NOT NULL,
            gender varchar(20) NOT NULL,
            phone INT(70) NOT NULL,
            username varchar(200) UNIQUE NOT NULL,
            dob date NOT NULL,
            user_type varchar(20) NOT NULL
        )";
        if($conn->query($sql_table) !== TRUE){
            echo "<br>Table creation failed: ".$conn->error;
        }
    }
    

    function getData($sql){
        $conn = connect("Doctors_Appointment_System");
        if($result = $conn->query($sql)){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }
            else{
                $GLOBALS['isEmpty'] = TRUE;
                return FALSE;
            }
        }
        else{
            return "Error: " . $conn->error;
        }
    }
    
    function setData($sql){
        $conn = connect("Doctors_Appointment_System");
    
        if($conn->query($sql)){
            return TRUE;
        }
        else{
            return "Error: " . $conn->error;
        }
    }

    function deleteData($sql){
        $conn = connect("Doctors_Appointment_System");

        if($conn->query($sql)){
            return TRUE;
        }
        else{
            return "Error: " . $conn->error;
        }
    }
?>