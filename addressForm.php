<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>宛先画面</title>
		<link rel="stylesheet" type="text/css" href="addressForm2.css">
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- jQuery UI -->
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
							<div class="txt address">
								<div class="addressTxt">
									<label>宛先</label>
									<input type="text">
								</div>
								<div class="btn btnTop addressBtn">
									<button type="submit">宛先</button>
								</div>
							</div>
							<div class="txt title">
								<label>件名</label>
								<input type="text">
							</div>
							<div class="txt sentence">
								<label>本文</label>
								<textarea rows="7"></textarea>
							</div>
						</div>
						<div class="main-button">
							<div class="btn btnBottom cancel">
								<button type="submit">キャンセル</button>
							</div>
							<div class="btn btnBottom save">
								<button type="submit">保存</button>
							</div>
							<div class="btn btnBottom send">
								<button type="submit">送信</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
