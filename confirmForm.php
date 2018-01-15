<?php
// DBに接続
$link = pg_connect("host=localhost dbname=postgres user=postgres password=root");
// 変数宣言
$empId = $_POST['empId'];
$empNm = $_POST['empNm'];
$empAd = $_POST['empAd'];
$upTime = date("Y/m/d H:i:s");
// キーに紐づくデータを更新
$sql = pg_query($link, "UPDATE test SET emp_nm='{$empNm}', emp_ad='{$empAd}', up_time='{$upTime}' WHERE emp_id='{$empId}'");
// キーに紐づくデータを取得
$result = pg_query($link, "SELECT * FROM test WHERE emp_id='{$empId}'");
// 取得したデータを画面に出力する用の変数に代入
for($i = 0 ; $i < pg_num_rows($result) ; $i++) {
	$rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
	$empId = $rows['emp_id'];
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
	    <title>ユーザ情報確認画面</title>
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
	        .txt input {
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
	    	function regist() {
	    		document.getElementById('form').action="updateForm.php";
	    	}
	    </script>
	</head>
	<body>
	    <div class="main">
	        <div class="main-wrapper">
	            <div class="main-header">
	                <h1>ユーザ情報確認画面</h1>
	            </div>
	            <div class="main-form">
	                <form id="form" name="form" action="loginForm.php" method="POST">
	                    <div class="main-text">
	                        <div class="txt empId">
	                            <label>担当者ID</label>
	                            <input type="text" name="empId" value="<?= $empId ?>" readonly="readonly">
	                        </div>
	                        <div class="txt empNm">
	                            <label>担当者名</label>
	                            <input type="text" name="empNm" value="<?= $empNm ?>" readonly="readonly">
	                        </div>
	                        <div class="txt empAd">
	                            <label>メールアドレス</label>
	                            <input type="text" name="empAd" value="<?= $empAd ?>" readonly="readonly">
	                        </div>
	                        <div class="txt upTime">
	                            <label>最終更新日時</label>
	                            <input type="text" name="upTime" value="<?= $upTime ?>" readonly="readonly">
	                        </div>
	                    </div>
	                    <div class="main-button">
	                        <div class="btn top">
	                            <input type="submit" value="TOPに戻る">
	                        </div>
	                        <div class="btn regist">
	                            <input type="submit" value="登録画面に戻る" onclick="regist();">
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</body>
</html>
