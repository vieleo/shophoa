<?php
   ob_start();
  if(isset($_POST['dangky'])){
	 $tenkhachhang=$_POST['hovaten'];
	 $email=$_POST['email'];
	 $dienthoai=$_POST['dienthoai'];
	 $matkhau=md5($_POST['matkhau']);
	 $diachi=$_POST['diachi'];
	 $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUES ('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
	 if ($sql_dangky) {
		echo '<p style ="color:green">Bạn đã đăng ký thành công</p>';
		$_SESSION['dangky'] =$tenkhachhang;
		$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        header('Location:sanpham.php?quanly=giohang');
	 }
  } 
  ob_flush();
?>
<p>Đăng ký thành viên</p>
<style type="text/css">
    table.dangky tr td{
   	padding:5px;
   }
</style>
<form action="" method="POST">
<table border="1" width="80%" style="border-collapse:collapse;">
  <tr>
   	<td>Họ và tên</td>
   	<td><input type="text" size="50" name="hovaten"></td>
  </tr>
  <tr>
   	<td>Email</td>
   	<td><input type="text" size="50" name="email"></td>
  </tr>
  <tr>
   	<td>Điện thoại</td>
   	<td><input type="text"size="50"  name="dienthoai"></td>
  </tr>
  <tr>
   	<td>Địa chỉ</td>
   	<td><input type="text"size="50"  name="diachi"></td>
  </tr>
  <tr>
   	<td>Mật khẩu</td>
   	<td><input type="text" size="50" name="matkhau"></td>
  </tr>
  <tr>
   	<td ><input type="submit"name="dangky" value="Đăng ký"></td>
   	<td><a href="pages/main/dangnhap.php"> Đăng nhập nếu có tài khoản</a></td>
  </tr>
</table>
</form>