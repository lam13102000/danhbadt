	<?php
	//Lấy dữ liệu trên form
		$id=$_POST['id'];
		$congty=$_POST['congty'];
		$sdt=$_POST['sdt'];
		$diachi=$_POST['diachi'];
		$email=$_POST['email'];
	//Kết nối đến MySQL
		$db=mysqli_connect('localhost','root','','dienthoai');	
		if(!$db)
		{
			echo "Lỗi kết nối";
		}
		else
		{			
			$sql_update="update congty set congty='".$congty."',sdt='".$sdt."',diachi='".$diachi."',email='".$email."'where id='".$id."'";
			mysqli_query($db,$sql_update);			
			header('location:homecongty.php');
		}
	?>