

	<?php
	//Lấy dữ liệu trên form

	print_r($_POST);
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
			
			$sql_insert="insert into congty(id, congty,sdt,diachi,email) values('".$id."','".$congty."','".$sdt."','".$diachi."','".$email."')";			
			$query = mysqli_query($db,$sql_insert);
		}

		if($query) {
			header('location:homecongty.php');
		} else {
			echo "Lỗi!";
		}
	?>