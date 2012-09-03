<?php
	$thisPage = 'home';
	$arr = array($thisPage, 'Page');
?>
<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>Mobile Open Platform Conference</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="<?php echo join('', $arr); ?>">
	<div id="wrap">
		<?php include_once('header.php'); ?>
		<div id="mainContent" class="row">
			<p class="anchor"><a href="#mainContenftKey" id="mainContentKey" accesskey="c">主要內容區</a></p>
			<div class="article span9">
				<div class="section">
					<h2>宗旨</h2>
					<p><abbr title="Mobile Open Platform Conference">MOPCON</abbr> 全名為 Mobile Open Platform Conference，宗旨為針對行動平台應用上、中、下游(設備/作業系統、後端服務、前端應用)進行深入探討之非營利研討會，議題將結合實際的產業面與產品研發。期藉由年度活動持續聚焦於行動應用領域，培養台灣技術與應用人才，並促使更多廠商與資源投入相關領域。</p>
				</div>
				<div class="section">
					<h2>研討會</h2>
					<ul class="sessionList">
						<li><i class="icon-time">&nbsp;</i> 時間：2012/10/27-28（六日兩天）</li>
						<li><i class="icon-road">&nbsp;</i> 地點：高雄軟體園區A棟頂樓 海景會議廳</li>
						<li><i class="icon-user">&nbsp;</i> 主題：MOPCON 2012議程主軸為「電子票劵」，此議題之應用因近年手機硬體相機、NFC，軟體如雲端服務、QR code等技術發展逐漸成形，預計明年將發酵引發產業中新應用，故MOPCON將針對此主題尋求相關實作經驗的工程人員與廠商來產業上、中、下游進行完整探討與經驗分享。</li>
					</ul>
				</div>
			</div>
			<div class="fbWall span3">
				<h3>Facebook Wall</h3>
				<p>ccc...</p>
			</div>
		</div>
		<hr />
		<?php include_once('nav.php'); ?>
	</div>
	<?php include_once('footer.php'); ?>
</body>
</html>