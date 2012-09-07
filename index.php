<?php
	$thisPage = 'home';
	$arr = array($thisPage, 'Page');
?>
<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>Mobile Open Platform Conference</title>
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="<?php echo join('', $arr); ?>">
	<div id="wrap">
		<?php include_once('header.php'); ?>
		<div id="mainContent">
			<p class="anchor"><a href="#mainContenftKey" id="mainContentKey" accesskey="c">主要內容區</a></p>
			<div class="row">
				<div class="article span9">
					<div class="section">
						<h2>宗旨</h2>
						<p><abbr title="Mobile Open Platform Conference">MOPCON</abbr> 全名為 Mobile Open Platform Conference，為非營利的技術研討會，成立宗旨為針對移動通訊領域結合實際的產業面與工程研發(平台工具、後台服務、 移動應用)做比較深入的探討。希望藉由年度固定聚會持續專注這個領域, 培養台灣移動式領域人才或促使更多人投入這個領域的發展，並增加此領域廠商的能見度與第三方各種合作機會。我們將會邀請國外移動式領域廠商、專家增加與國內廠商、開發者更多交流與互動的機會。
            </p>
					</div>
					<div class="section">
						<h2>研討會</h2>
						<ul class="sessionList">
							<li><i class="icon-time">&nbsp;</i> 時間：2012/10/27-28（六日兩天）</li>
							<li><i class="icon-road">&nbsp;</i> 地點：高雄軟體園區A棟一樓交誼廳/301會議室</li>
							<li><i class="icon-user">&nbsp;</i> 主題：MOPCON 2012議程主軸為「電子票劵」，此議題之應用因近年手機硬體相機、NFC，軟體如雲端服務、QR code等技術發展逐漸成形，預計明年將發酵引發產業中新應用，故MOPCON將針對此主題尋求相關實作經驗的工程人員與廠商來產業上、中、下游進行完整探討與經驗分享。</li>
						</ul>
						<p class="toRegLink">
							<a class="btn btn-success" href="https://registrano.com/login">立即註冊</a>
							<span class="logo"><img src="img/registrano-logo.png" alt="Registrano logo" /></span>
						</p>
					</div>
				</div>
				
				<div class="fbWall span3">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fmopcon&amp;width=198&amp;height=415&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23eeeeee&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border: 1px solid #eeeeee; background-color: #f7f7f7; overflow:hidden; width:198px; height:415px;" allowTransparency="true"></iframe>
				</div>
			</div>
		</div>
		<hr />
		<?php include_once('nav.php'); ?>
	</div>
	<?php include_once('footer.php'); ?>
</body>
</html>
