<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Quản lý danh bạ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  padding: 2px;
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

  <div class="header">
    <h1>Website Quản Lý danh bạ</h1>
  </div>

  <div class="topnav">
    <a href="homeadmin.php">Trang chủ</a>
    <a href="frmAdd.php">Thêm giảng viên</a>
    <a  href="homecongty.php">Kiểm tra công ty</a>
    <a href="dangxuat.php">Đăng Xuất</a>
  </div>
   <form action="addgv.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="40%">
      <tr>
        <td>Họ tên</td>
        <td><input type="text" name="hoten" size="15" required></td>
      </tr>
      <tr>
        <td>Số điện thoại</td>
        <td><input type="text" name="sdt" size="15" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" size="15" required></td>
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
                                         echo "<option value='".$r['id']."'>".$r['congty']."</option>";
                                     }
                                 }
                             }
                        ?>
            </select> 
        </td>
      </tr>
      <tr align="center">
        <td colspan="2"><input type="submit" name="" value="Nhập">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" name="" value="Nhập lại"></td>
      </tr>

</body>
</html>


