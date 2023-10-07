<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


   //                                      createing of database
   /* $servername="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password);
    if($conn){
        echo " connected sucessfully ";
    }
    else{
        echo " not connected ";
    }
    echo "<br>";
    $sql="CREATE DATABASE LOGINBASE";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo " database is not created ";
    }
    else{
        echo " database is created sucessfully ";
    }
    */



//                                createing a table
/*
    $servername="localhost";
    $username="root";
    $password="";
    $database="LOGINBASE";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo " connected successfully ";
    } 
    else{
        echo " not connected ";
    }
    echo "<br>";
    $sql="CREATE TABLE `FORMTABLE`(`S.NO` INT(12) , `NAME OF USER` VARCHAR(15) , `PASSWORD` VARCHAR(10))";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo " not created successfully ";
    }
    else{
        echo " created successfully ";
    }
    */

    //                                    inserting a table
  /* $servername="localhost";
    $username="root";
    $password="";
    $database="LOGINBASE";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo " connected successfully ";
    }
    else{
        echo " not connected ";
    }
    echo "<br>";
    $sql="INSERT INTO `FORMTABLE`(`S.NO`,`NAME OF USER`,`PASSWORD`) VALUES ('3','RAHUL','CVBN')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo " NOT inserted successfully ";
    }
    else{
        echo " inserted ";
    }
    */

    //                                       delete from table
    /*$servername="localhost";
    $username="root";
    $password="";
    $database="LOGINBASE";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo " connected successfully ";
    }
    else{
        echo " not connected ";
    }
    $sql="DELETE FROM `FORMTABLE` WHERE `S.NO`='1'";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo " not deleted ";
    }
    else{
        echo " deleted ";
    }
    */
    // select from table
    /*$servername="localhost";
    $username="root";
    $password="";
    $database="LOGINBASE";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo " connected successfully ";
    }
    else{
        echo " not connected ";
    }
    $sql="SELECT * FROM `FORMTABLE`";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    echo $num;
    echo "<br>";
    $no=1;
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            echo $no . " hello " . $row['NAME OF USER'] . " your password is " . $row['PASSWORD'];
            echo "<br>";
            $no=$no+1;
        }
    }
    */
    //   selecting by where condition
    /*$servername="localhost";
    $username="root";
    $password="";
    $database="LOGINBASE";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo " connected successfully ";
    }
    else{
        echo " not connected ";
    }
    $sql="SELECT * FROM `FORMTABLE` WHERE `NAME OF USER`='RITIK'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    echo "<br>";
    echo $num;
    echo "<br>";
    $no=1;
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            echo $no . "HELLO" .  $row['NAME OF USER'] . " YOUR PASSWORD IS " . $row['PASSWORD'];
            echo "<br>";
            $no=$no+1;
        }
    }
    */
    $servername="localhost";
    $username="root";
    $password="";
    $database="LOGINBASE";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if($conn){
        echo " connected successfully ";
    }
    else{
        echo " not connected ";
    }
    $sql="UPDATE `FORMTABLE` SET `NAME OF USER`='MRUTYUNJAYA' WHERE `PASSWORD`='SDFG23'";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "not update";
    }
    else{
        echo "updated";
    }

    
    


    ?>
</body>
</html>