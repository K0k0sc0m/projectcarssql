<?php

function connect(){
    return new mysqli("localhost","root","","projectcars");
}

function find($id){
    $conn = connect();
    $sql = "SELECT * from `cars` where id =" .$id;
    $result = $conn->query($sql);
    $conn->close();
    return $result->fetch_assoc();
}



function all(){
    $conn = connect();
    $sql = "SELECT * from `cars`";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function store(){
    $conn = connect();
    $sql = 'INSERT INTO `cars`(`id`,`manufacturer`,`model`,`year`,`color`,`milage`,`fuel`,`techinspection`) VALUES (NULL,"'.$_POST['manufacturer'].'","'.$_POST['model'].'","'.$_POST['year'].'","'.$_POST['color'].'","'.$_POST['milage'].'","'.$_POST['fuel'].'","'.$_POST['techinspection'].'")';
    $conn->query($sql);
    $conn->close();
}

function update(){
    $conn = connect();
    $sql = 'UPDATE `cars` SET `manufacturer`="'.$_POST['manufacturer'].'",`model`="'.$_POST['model'].'",`year`="'.$_POST['year'].'",`color`="'.$_POST['color'].'",`milage`="'.$_POST['milage'].'",`fuel`="'.$_POST['fuel'].'",`techinspection`="'.$_POST['techinspection'].'" WHERE id =' .$_POST['update'];
    $conn->query($sql);
    $conn->close();
}

function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `cars` WHERE id=".$id;
    $conn->query($sql);
    $conn->close();
}


?>