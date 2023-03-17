<?php

//Setting up connection
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}else{
    echo "Conection was esatablished succesfully. <br>";
}

//Creating database bank
$sql= "CREATE DATABASE Bank";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE TABLE `bank`.`customers` ( `Cust_ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`Cust_ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `bank`.`customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES ('1', 'Abdi', 'Abdi@yahoo.com', '3000.00'), ('2', 'Siham', 'Siham@orkut.com', '10000.00'), ('3', 'Niladri', 'Niladri@outlook.com', '5000.00'), ('4', 'Mahdi', 'Mahdi@gmail.com', '15000.00'), ('5', 'Kash', 'Kash@rediff.com', '20000.00'), ('6', 'Ahmed', 'Ahmed@xyz.com', '3500.00'), ('7', 'Rayan', 'Rayan@abc.com', '12000.00'), ('8', 'Ayan', 'ayan@123.com', '30000.00'), ('9', 'Mahamoud', 'mahamoud@gmail.com', '23000.00'), ('10', 'Badri', 'badri@def.com', '40000.00')";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to add entries to table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `bank`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
       echo "Sorry we failed to create table.<br>";
}else{
       echo "Transaction Table Created Successfully.<br>";
}

?>