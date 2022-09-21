<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vehicles";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
                        CREATE TABLE IF NOT EXISTS cars(
                            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            car_name VARCHAR (25) NOT NULL,
                            car_model VARCHAR (20),
                            car_price FLOAT 
                        );
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Cannot Create table...!";
        }

    }else{
        echo "Error while creating database ". mysqli_error($con);
    }

}