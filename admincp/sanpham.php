
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admincp</title>
	
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
	
	<style type="text/css">
		body {
	    background: aliceblue;
		}
	</style>
</head>
<body>
	<h3 class="title_admin">Chào Mừng Bạn Đến Với Trang Quản Trị</h3>
	<div class="wrapper">
	<?php
	       include("config/config.php");
	 	   include("modules/header.php");
	       include("modules/menu.php");
	       include("modules/main.php");
	       include("modules/footer.php");
	?>
	</div>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
	<script>
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script>
</body>
</html>