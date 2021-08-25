<!DOCTYPE html>
<html>
<body>
	<?php
		$db=mysqli_connect('localhost','root','','dienthoai');	
		if(!$db)
		{
			echo "Lỗi kết nối";
		}else
		{
			$id=$_REQUEST['id'];
			$sql_del="delete from congty where id='".$id."'";
			mysqli_query($db,$sql_del);
			header('location:homecongty.php');
		}
	?>
</body>
</html>