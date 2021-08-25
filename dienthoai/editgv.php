	<?php
	//Lấy dữ liệu trên form
		$id=$_POST['id'];
		$hoten=$_POST['hoten'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$id_cq=$_POST['id_cq'];
	//Kết nối đến MySQL
		$db=mysqli_connect('localhost','root','','dienthoai');	
		if(!$db)
		{
			echo "Lỗi kết nối";
		}
		else
		{			
			$sql_update="update canbo set hoten='".$hoten."',sdt='".$sdt."',email='".$email."',id_cq='".$id_cq."'where id='".$id."'";
			mysqli_query($db,$sql_update);			
			header('location:homeadmin.php');
		}
	?>