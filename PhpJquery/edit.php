<?php
if(isset($_REQUEST["roll"])){
	$roll=$_REQUEST["roll"];
	$conn=mysqli_connect("localhost","root","","srev");
	$rs=mysqli_query($conn,"select * from demo where sn=$roll");
	if($r=mysqli_fetch_array($rs)){
		?>
		<td><input type="text" id="user" value="<?php echo $r[1]?>"></td><td><input type="text" id="avg" value="<?php echo $r[2]?>"></td><td><input type="submit" value="update" class="update" rel="<?php echo $roll?>"></td>
		
		<?php
		
	}
	
}


?>