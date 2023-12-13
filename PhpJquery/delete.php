<?php
if(isset($_REQUEST["roll"])){
	$roll=$_REQUEST["roll"];
	$conn=mysqli_connect("localhost","root","","srev");
	if(mysqli_query($conn,"delete from demo where sn=$roll")>0){
		echo"success";
	}
	
}


?>