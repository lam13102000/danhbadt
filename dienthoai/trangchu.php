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
    <h1>Danh bạ điện thoại</h1>
  </div>

  <div class="topnav">
    <a href="trangchu.php">Trang chủ</a>
    <a href="homecongty.php">Kiểm tra công ty</a>
  </div>
  <form action="search.php" method="POST">
    <input type="text" name="key" required size="25" placeholder="Tìm kiếm thông tin"> 
    <input type="submit" name="" value="Tìm kiếm">
    </form>
  <br>
    <?php
      $db=mysqli_connect('localhost','root','','dienthoai');  
      if(!$db)
      {
        echo "Lỗi kết nối";
      }
      else
      {   
        //Viết SQL => thực thi
        $sql_select="select * from canbo";
        $kq=mysqli_query($db,$sql_select);
        //Trình bày dữ liệu dạng bảng
      echo '<table border="1  " cellspacing="0" cellpadding="0" width="100%">';
      echo "<tr align='center'>";
        echo "<td>Mã giảng viên</td>";
        echo "<td>Họ và tên</td>";
        echo "<td>Số điện thoại</td>";
        echo "<td>Email</td>";
        echo "<td>Mã công ty</td>";

      echo "</tr>";
      if(mysqli_num_rows($kq)>0)
      {
        while($r=mysqli_fetch_array($kq))
        {
          echo "<tr>";
            $id=$r['id'];
            echo "<td>".$r['id']."</td>";
            echo "<td>".$r['hoten']."</td>";
            echo "<td>".$r['sdt']."</td>";      
            echo "<td>".$r['email']."</td>";
            echo "<td>".$r['id_cq']."</td>";
          echo "</tr>";
        }
      }
      
    echo "</table>";
      }
    ?>
  </br>

</body>
</html>


