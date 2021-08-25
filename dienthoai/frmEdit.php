<!DOCTYPE html>
<html>
<head>
	<title>Sửa thông tin đoàn viên</title>
	<meta charset="utf-8">
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: arial
}

/* Định dạng header */
  .header {
  background-color: #e9d8f4;
  color: #58257b;
  padding: 10px;
  text-align: center;
}

/* Định dạng thanh điều hướng trên cùng */
.topnav {
  overflow: hidden;
  background-color: #58257b;
}

/* Định dạng link điều hướng */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Thay đổi màu liên kết khi di chuột qua */
.topnav a:hover {
  background-color: #db7093;
  color: white;
  font-weight: bold
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid purple;
}

input[type=text]:focus {
  background-color: lightblue;
}

select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid purple;
}

select:focus {
  background-color: lightblue;
}

option {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid purple;
}

option:focus {
  background-color: lightblue;
}

tr{
  text-align: center; 
  vertical-align: middle;
}

body {
  background: url(pic1.jpg);
  background-size: cover;
}

input[type="submit"] {
  background-color: #e9d8f4;
  border: none;
  color: #58257b;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

input[type="reset"] {
  background-color: #e9d8f4;
  border: none;
  color: #58257b;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}


</style>
</head>
<body>
	<?php
		$id=$_REQUEST['id'];
		$db=mysqli_connect('localhost','root','','dienthoai');	
		if(!$db)
		{
			echo "Lỗi kết nối";
		}else
		{
			$sql_hienthi="select * from canbo where id='".$id."'";
			$kq=mysqli_query($db,$sql_hienthi);
			if(mysqli_num_rows($kq)>0)
			{
				while($r=mysqli_fetch_array($kq))
				{
					$id=$r['id'];
					$hoten=$r['hoten'];
					$sdt=$r['sdt'];
					$email=$r['email'];
					$id_cq=$r['id_cq'];
					
				}
			}
		}
	?>
	<form action="editgv.php" method="POST">
	<center>
		<h2>CẬP NHẬT THÔNG TIN</h2>
		<table border="0" width="40%">
			<tr>
				<td>Mã giảng viên</td>
				<td><input type="text" name="id" size="15" readonly value="<?php echo $id;?>"></td>
			</tr>
			<tr>
				<td>Họ tên</td>
				<td><input type="text" name="hoten" size="30" required value="<?php echo $hoten;?>"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="sdt" value="<?php echo $sdt;?>" size="10"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>" size="10"></td>
			</tr>
			<tr>
        		<td>Công ty</td>
        		<td><select class="form-control" name="id_cq">
		                        <?php
		                             $db = mysqli_connect("localhost","root","","dienthoai");
		                             if(!$db){
		                                 echo "Lỗi kết nỗi";
		                             }else{
		                                 $sql_tv = "select * from congty";
		                                 $tv = mysqli_query($db,$sql_tv);
		                                 if(mysqli_num_rows($tv)>0){
		                                     while($r = mysqli_fetch_array($tv)){
		                                         echo "<option value='".$r['id_cq']."'>".$r['congty']."</option>";
		                                     }
		                                 }
		                             }
		                        ?>
		            </select> 
		        </td>
		     </tr>
			
			<tr align="center">
				<td colspan="2"><input type="submit" name="" value="Update"></td>
			</tr>

		</table>
		<hr>
	</center>
	</form>

</body>
</html>