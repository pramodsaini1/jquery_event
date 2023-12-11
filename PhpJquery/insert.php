<?php
if(isset($_REQUEST["roll"]) && isset($_REQUEST["name"]) && isset($_REQUEST["avg"]) ){
    $roll=$_REQUEST["roll"];
    $name=$_REQUEST["name"];
    $avg=$_REQUEST["avg"];
    echo $roll." ".$name." ".$avg;

    $conn=mysqli_connect("localhost","root","","srev");
    if(mysqli_query($conn,"insert into demo values($roll,'$name',$avg)")>0){
        echo"success";
    }
    else{
        echo "again";
    }
}



?>