<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Skins/Css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="skins/Css/bootstrap.min.css">
  </head>
  <body>
  <div id="dangky">
		<h1>ĐĂNG KÝ</h1>
		<form action="register.php" method="POST" onsubmit="return check_dangky()">
			<table>
				<tr>
					<td>Mã Sinh Viên</td>
					<td><input  class="inpbox" id="masv" type="text" name="masv"></td>
				</tr>
				<tr>
					<td>Mật Khẩu</td>
					<td><input class="inpbox" id="matkhau" type="password" name="matkhau"></td>
				</tr>
				<tr>
					<td>Họ Tên</td>
					<td><input class="inpbox" id="hoten" type="text" name="hoten"></td>
				</tr>
				<tr>
					<td>Ngày Sinh</td>
					<td><input class="inpbox" id="ngaysinh" type="date" name="ngaysinh"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input class="inpbox" id="email" type="email" name="email"></td>
				</tr>
				<tr>
					<td>SDT</td>
					<td><input class="inpbox" id="sdt" type="text" maxlength="11" name="sdt"></td>
				</tr>
				<tr>
					<td>Niên Khóa</td>
					<td><input class="inpbox" id="nienkhoa" type="number" min="1" max="99" name="nienkhoa"></td>
				</tr>
				<tr>
					<td>Năm Kết Thúc</td>
					<td><input class="inpbox" id="namkt" type="number" min="<?php echo date('Y')?>"  max="2100" name="namkt"></td>
				</tr>
				<tr>
					<td>Khoa</td>
					<td><select class="inpbox" name="khoa" id="khoa">
						<option value selected="false" disabled="true">Khoa</option>
						<option value="1">Công nghệ thông tin</option>
						<option value="2">Dược</option>
						<option value="3">Kế toán</option>
						<option value="4">Thể thao</option>
						<option value="5">Khoa học ứng dụng</option>
						<option value="6">Khoa học xã hội và nhân văn</option>
						<option value="7">Kỹ thuật công trình</option>
						<option value="8">Lao động và công đoàn</option>
						<option value="9">Luật</option>
						<option value="10">Môi trường và bảo hộ lao động</option>
						<option value="11">Mỹ thuật công nghiệp</option>
						<option value="12">Ngoại ngữ</option>
						<option value="13">Quản trị kinh doanh</option>
						<option value="14">Tài chính - ngân hàng</option>
						<option value="15">Toán - thống kê</option>
						<option value="16">Điện - điện tử</option>
					</select></td>
				</tr>
				<tr>
					<td>Lớp</td>
					<td><select class="inpbox" name="lop" id="lop"></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center"><button type="submit">Đăng Ký</button></td>
				</tr>
			</table>
		</form>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="Skins/JS/bootstrap.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="Skins/JS/jqr.js"></script>
  </body>
  
</html>