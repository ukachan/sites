<html lang="ja">
<?php
if(!empty($_POST['comment']) && !empty($_POST['mailaddress'])){
	if(mb_send_mail("banzu_kobayashi@hyper.ocn.jp", "HPからのお問合せ", "問い合わせ内容：".$_POST['comment'], "名前： ".$_POST['nickname']."　メールアドレス： ".$_POST['mailaddress'])){
//		echo '送信完了！';
		$tags = <<<THM
	<span id="sousin">送信完了！</span>
THM;
	}else{
		echo '送信失敗！通信状況を確認した上で再度送信して下さい。';
	}
	header("Location: " . $_SERVER['PHP_SELF']);
}
?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="空調工事・保守、内装、電気、給排水・設備、防災設備、仮設、塗装工事ならバンズイノベーション">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
		<link rel="icon" href="favicon.png">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile_style.css">
        <script src="./script/script.js"></script>
        <!-- twitter card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@bondsinnobation" />
        <meta property="og:url" content="https://banzu.tokyo" />
        <meta property="og:title" content="バンズイノベーション" />
        <meta property="og:description" content="空調工事・保守、内装、電気、給排水・設備、防災設備、仮設、防水工事ならバンズイノベーション" />
        <meta property="og:image" content="https://banzu.tokyo/favicon.png" />
        <!-- end twitter card -->
		<title>バンズイノベーション</title>
	</head>
	<body>
		<header>
			<p class="logo"><a href="./index.html"><img src="image/title_logo.png" alt="株式会社バンズイノベーション"></a></p>
			<p class="hidden">株式会社バンズイノベーション</p>
			<p class="inquiry">ご相談・お見積りはお電話で<a href="tel:0358567567">Tel: 03-5856-7567</a></p>
			<div class="cBoth"></div>
			<h1 class="lft">空調工事・保守、内装、電気、給排水設備、防災設備、仮設、塗装工事ならバンズイノベーション</h1>
		</header>
		<section class="header-img">
			<p class="msg msg-one">未来へ紡ぐ</p>
			<p class="msg msg-two">絆を紡ぐ</p>
			<p class="msg msg-three">バンズイノベーション</p>
			<p class="msg msg-four">Bonds Inobation Co.,Ltd</p>
			<p class="msg msg-five">Support in Technology</p>
		</section>
		<nav>
			<ul>
				<a href="./company.html"><li>会社概要</li></a><!--
			--><a href="./buisiness_info.html"><li>事業案内</li></a><!--
			--><a href="./actual.html"><li>実績紹介</li></a><!--
			--><a href="./trading_company.html"><li>取引会社</li></a><!--
			--><a href="./contact.php"><li>お問合せ</li></a>
			</ul>
		</nav>
		<section class="main_content">
			<p class="main_header"><i class="fas fa-cube"></i> - An inquiry - お問合せ</p>
			<fieldset>
				<legend>ご意見・ご要望等</legend>
				<div id="massage"><?php echo $tags ?></div>
				<form action="contact.php" method="post">
					<p class="form"><span>お名前：</span><input id="nuckname" type="text" name="nickname"></p>
					<p class="form"><span>メールアドレス:</span><input id="mailaddress" type="text" name="mailaddress"></p>
					<p class="form"><span>お問合せ内容:</span><textarea id="comment" name="comment" rows="5" cols="40"></textarea></p>
					<p id="submit"><input id="button" type="submit" value="送信"></p>
				</form>
			</fieldset>
		</section>
		<footer>
			&copy; 2018 <strong>Bonds Innobation Co.,Ltd</strong>
			<p><a href="./privacy.html">プライバシー・ポリシー</a></p>
		</footer>
	</body>
</html>
