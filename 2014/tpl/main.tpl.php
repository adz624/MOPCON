<?php

	if (!isset($this->og_desc)) {
		$this->og_desc = "Mobile Open Platform Conference (MOPCON) 行動科技應用開發者年會是全台第一個針對移動應用開發的技術研討會，希望大家共同來參與。";
	}

?><!doctype html>
<html lang="zh-tw">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?= htmlspecialchars($this->title) ?> | 行動科技應用開發者年會 | MOPCON 2014 | Mobile / Open / Platform Conference</title>
	<meta content="<?= htmlspecialchars($this->title) ?> | 行動科技應用開發者年會 | MOPCON 2014 | Mobile / Open / Platform Conference" property="og:title">
	<meta content="http://mopcon.org/2014" property="og:url">
	<meta content="<?= htmlspecialchars($this->og_desc) ?>" property="og:description">
	<meta content="http://mopcon.org/img/snapshot-2014.jpg" property="og:image">
	<meta content="website" property="og:type">
	<meta content="行動科技應用開發者年會 | MOPCON 2014 | Mobile / Open / Platform Conference" property="og:site_name">
	<script src="js/jquery.min.js"></script>
	<script src="js/all.js"></script>
	<!--[if lt IE 9]>
	    <script type="text/javascript" src="js/html5shiv.js"></script>
	    <script type="text/javascript" src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="perspective">
	<menu class="main-menu mobile">
	<a href="/" class="logo"></a>
	<ul>
		<li class="menu-link"><a href="news.html"><span>公告</span></a></li>	
		<li class="menu-link"><a href="session.html"><span>議程</span></a></li>
		<li class="menu-link"><a href="sponsor.html"><span>贊助</span></a></li>
		<li class="menu-link"><a href="speakers.html"><span>講者</span></a></li>
		<li class="menu-link"><a href="location.html"><span>交通</span></a></li>
		<!-- <li class="menu-link"><a href="#"><span>IRC</span></a></li>-->
		<!-- <li class="menu-link"><a href="#"><span>Apps</span></a></li> -->
		<li class="menu-link"><a href="community.html"><span>社群</span></a></li>
		<!-- <li class="menu-link"><a href="#"><span>其他</span></a></li> -->
	</ul>
</menu>
	<div class="block"></div>
	<div class="relative"><div class="absolute">
	<div class="main">
		<div class="container">
<!-- layout start -->
<article class="content <?= htmlspecialchars($this->mainClass)?>">
	<div class="page-title">
		<a class="showmenu">
			<i class="icon-list22"></i>
		</a>
		<h1><?= htmlspecialchars($this->title) ?></h1>
	</div>
<?=$this->content ?>
<!-- layout end -->
<div class="footer-line"></div>
		</div>
	</div>
	</div>
	</div>
</div>
</body>
</html>
