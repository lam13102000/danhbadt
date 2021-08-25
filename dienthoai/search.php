<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm thông tin</title>
</head>
<body>
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

td {
  padding: 12px 20px;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid purple;
}

td:focus {
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

input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
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
	<center>
		<h2>THÔNG TIN TÌM THẤY</h2>
		<a href='homeadmin.php'>Trang chủ</a>
	<br>
	<?php
		$db=mysqli_connect('localhost','root','','dienthoai');	
		if(!$db)
		{
			echo "Lỗi kết nối";
		}
		else
		{	
			$id=$_POST['key'];
			//Viết SQL => thực thi
			$sql_select="select * from canbo where id like '%".$id."%'";
			$kq=mysqli_query($db,$sql_select);
			//Trình bày dữ liệu dạng bảng
		echo '<table border="1" cellspacing="0" width="90%">';
		echo "<tr align='center'>";
			echo "<td>Mã giảng viên</td>";
		    echo "<td>Họ và tên</td>";
		    echo "<td>Chức vụ</td>";
		    echo "<td>SDT Cơ quan</td>";
		    echo "<td>Email</td>";
		    echo "<td>SDT di động</td>";


		echo "</tr>";
		if(mysqli_num_rows($kq)>0)
		{
			while($r=mysqli_fetch_array($kq))
			{
	        echo "<tr>";
	          $id=$r['id'];
	          echo "<td>".$r['id']."</td>";
	          echo "<td>".$r['hoten']."</td>";
	          echo "<td>".$r['chucvu']."</td>";
	          echo "<td>".$r['dtcoquan']."</td>";        
	          echo "<td>".$r['email']."</td>";
	          echo "<td>".$r['dtdidong']."</td>";
	          echo "<td> <a href='frmEdit.php?id=$id'>Sửa</a> </td>";
	          echo "<td> <a href='deletegv.php?id=$id'>Xóa</a> </td>";
	        echo "</tr>";
			}
		}
		
	echo "</table>";
		}
	?>


	</center>
</body>
</html>