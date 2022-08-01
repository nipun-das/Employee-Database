<?php
$conn = mysqli_connect("localhost","root","");
if($conn == false){
    die("Error");
}
$sqlcreatedb = "CREATE DATABASE IF NOT EXISTS db_employees";
mysqli_query($conn,$sqlcreatedb);

$selectdb = mysqli_select_db($conn,"db_employees"); 

if($selectdb){
    $sqlcreatetable = "CREATE TABLE IF NOT EXISTS administrator(
    admusername VARCHAR(10) NOT NULL UNIQUE,
    admpassword VARCHAR(100) NOT NULL ,
    admemail VARCHAR (100) NOT NULL UNIQUE,
    PRIMARY KEY(admusername))";
mysqli_query($conn,$sqlcreatetable); 
}


$selectdb = mysqli_select_db($conn,"db_employees"); 

if($selectdb){
    $sqlcreatetable = "CREATE TABLE IF NOT EXISTS employee(
    empid int(5) AUTO_INCREMENT NOT NULL UNIQUE ,
    empname VARCHAR(20) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    age INT (100) NOT NULL  ,
    address VARCHAR (100) NOT NULL,
    sex VARCHAR (100) NOT NULL,
    department VARCHAR (100) NOT NULL,
    salary int(10) NOT NULL,
    phonenum int(13) NOT NULL,
    PRIMARY KEY(empid))";
mysqli_query($conn,$sqlcreatetable); 
}
