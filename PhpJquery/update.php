<?php
if(isset($_REQUEST["roll"]) && isset($_REQUEST["name"]) && isset($_REQUEST["avg"])){
	$roll=$_REQUEST["roll"];
	$name=$_REQUEST["name"];
	$avg=$_REQUEST["avg"];
	$conn = mysqli_connect("localhost","root","","srev");
		   
		  if(mysqli_query($conn,"update demo set name='$name',avgr=$avg where sn= $roll")>0){
			  echo "Record Updated" ;
		  }
	
}


?>