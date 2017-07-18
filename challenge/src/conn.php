<?php
session_start();
function query($sql) {
    $host='127.0.0.1';
    $user='corb3nik';
    $pass='corb3nik';
    $database='corb3nik_cms';
    $con = mysqli_connect($host,$user,$pass,$database);
    if (mysqli_connect_errno($con))
        die('Could not connect: ' . mysqli_connect_error());

    $result = mysqli_query($con,$sql);

    if ($result === false) {
      die(mysqli_error($con));
    }

    if($result===true) {
        mysqli_close($con);
        return $result;
    }
    $res=array();
    do {
        $row=mysqli_fetch_array($result);
        if($row)
            $res[]=$row;
    }
    while($row);
    mysqli_close($con);
    return $res;
}

include_once "lib.php";
