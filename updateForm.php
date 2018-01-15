<?php
// DBに接続
$link = pg_connect("host=localhost dbname=postgres user=postgres password=root");
// 変数宣言
$empId = $_POST['empId'];
$empNm = '';
$empAd = '';
$upTime = '';
// キーに紐づくデータを取得
$result = pg_query($link, "SELECT * FROM test WHERE emp_id='{$empId}'");
// 取得したデータを画面に出力する用の変数に代入
for($i = 0 ; $i < pg_num_rows($result) ; $i++) {
	$rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
	$empNm = $rows['emp_nm'];
	$empAd = $rows['emp_ad'];
	$upTime = $rows['up_time'];
}
// DBの接続を切断
$close_flag = pg_close($link);
?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>ユーザ情報登録画面</title>
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
	        .txt {
	            margin-bottom: 30px;
	        }
	        .txt label {
	            display: inline-block;
	            width:120px;
	        }
	        .empId input {
	        	background-color: #DDDDDD;
	        }
	        .upTime input {
	        	background-color: #DDDDDD;
	        }
	        .main-button {
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
	            width: 140px;
	            height: 51px;
	        }
	        .top {
	        	margin-right: 20px;
	        }
	        .btn input:hover {
	            background-color: #FF8856;
	            opacity: 0.6;
	            cursor: pointer;
	        }
	    </style>
	    <script type="text/javascript">
	    	function update() {
	    		document.getElementById('form').action="confirmForm.php";
	    	}
	    </script>
	</head>
	<body>
	    <div class="main">
	        <div class="main-wrapper">
	            <div class="main-header">
	                <h1>ユーザ情報登録画面</h1>
	            </div>
	            <div class="main-form">
	                <form id="form" name="form" action="loginForm.php" method="post">
	                    <div class="main-text">
	                        <div class="txt empId">
	                            <label>担当者ID</label>
	                            <input type="text" name="empId" readonly="readonly" value="<?= $empId ?>">
	                        </div>
	                        <div class="txt empNm">
	                            <label>担当者名</label>
	                            <input type="text" name="empNm" value="<?= $empNm ?>">
	                        </div>
	                        <div class="txt empAd">
	                            <label>メールアドレス</label>
	                            <input type="text" name="empAd" value="<?= $empAd ?>">
	                        </div>
	                        <div class="txt upTime">
	                            <label>最終更新日時</label>
	                            <input type="text" readonly="readonly" value="<?= $upTime ?>">
	                        </div>
	                    </div>
	                    <div class="main-button">
	                        <div class="btn top">
	                            <input type="submit" value="TOP">
	                        </div>
	                        <div class="btn update">
	                            <input type="submit" value="更新" onclick="update();">
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</body>
</html>
