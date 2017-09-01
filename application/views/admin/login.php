<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset=utf-8 />
	<title>Form login basic</title>		
	</head>
	<style>
	.container{
		float:left;
		width:600px;
	}
	.form-group{
		float:left;
		width:100%;
	}	
	.form-group label{
		float:left;
		width:20%;
	}	
	.form-group input{
		float:left;
		width:70%;
		margin-top:5px;
	}	
	.information{
		margin-top: 8%;
	}
	.btn{
		width:50%;
		margin: 15px 0px 0px 20%;
	}
	</style>
	<body>
		<div class="container">
			<div class="row">
				<div class="information">
					<h3 align="center" style="margin-bottom: 20px;">Đăng nhập</h3>
					<form method="post">
						<div class="form-group">
							<label for="">Tên đăng nhập</label>
							<input name="tai_khoan" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input name="mat_khau" type="password" class="form-control" required>
						</div>
						<input type="submit" value="Đăng nhập" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</body>
<html>