<?php
	print_r($_POST);
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
			
			$sql_insert="insert into canbo values('".$id."','".$hoten."','".$sdt."','".$email."','".$id_cq."')";
			$query = mysqli_query($db,$sql_insert);
		}

		if($query) {
			header('location:homeadmin.php');
		} else {
			echo "Lỗi!";
		}
	?>