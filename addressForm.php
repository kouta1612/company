<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>宛先画面</title>
		<style type="text/css">
			.main-wrapper {
				margin: 0 auto;
				width: 400px;
				text-align: center;
			}
			.main-header {
				background-color: #66CCFF;
	            color: white;
	            margin-bottom: 1px;
	            padding: 10px 0;
			}
			.main-header h1 {
				font-size: 22px;
			}
			.main-form {
	            border: 1px solid #DDDDDD;
	            padding: 40px 0;
	        }
	        .main-text {
	            margin-bottom: 50px;
	        }
	        .main-text label {
	        	margin-right: 10px;
	        }
	        .addressBtn {
	        	margin-bottom: 30px;
	        }
	        .title {
	        	margin-bottom: 30px;
	        }
	        .text {
	        	margin-bottom: 30px;
	        }
	        .btn {
	        	display: inline-block;
	        }
	        .btn input {
	            border-radius: 5px;
	            color: white;
	            background-color: #FF8856;
	            opacity: 0.7;
	            padding: 14px 20px;
	            width: 100px;
	            height: 51px;
	        }
	        .cancel {
	        	margin-right: 20px;
	        }
	        .save {
	        	margin-right: 20px;
	        }
	        .btn input:hover {
	        	background-color: #FF8856;
	            opacity: 0.6;
	            cursor: pointer;
	        }
		</style>
	</head>
	<body>
		<div class="main">
			<div class="main-wrapper">
				<div class="main-header">
					<h1>宛先画面</h1>
				</div>
				<div class="main-form">
					<form id="form" name="form" action="" method="post">
						<div class="main-text">
							<div class="txt addressTxt">
								<label>宛先</label>
								<input type="text">
							</div>
							<div class="btn addressBtn">
								<input type="submit" value="宛先">
							</div>
							<div class="txt title">
								<label>件名</label>
								<input type="text">
							</div>
							<div class="txt text">
								<label>本文</label>
								<textarea rows="8" cols="40"></textarea>
							</div>
						</div>
						<div class="main-button">
							<div class="btn cancel">
								<input type="submit" value="キャンセル">
							</div>
							<div class="btn save">
								<input type="submit" value="保存">
							</div>
							<div class="btn send">
								<input type="submit" value="送信">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
