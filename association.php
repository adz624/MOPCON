<?php
	$thisPage = 'association';
	$arr = array($thisPage, 'Page');
?>
<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>Mobile Open Platform Conference</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="<?php echo join('', $arr); ?>" class="normalLayout">
	<div id="wrap">
		<?php include_once('header.php'); ?>
		<div id="mainContent">
			<p class="anchor"><a href="#mainContenftKey" id="mainContentKey" accesskey="c">主要內容區</a></p>
			<div class="article">
				<h2>活動行程</h2>
				<dl class="sessionList">
					<dt>活動議程表</dt>
					<dd>目前活動尚在接洽中，尚無確定議程，先列出活動時間表。</dd>
				</dl>
				<table class="sessionDate">
					<thead>
						<tr>
							<th scope="col">活動時間</th>
							<th scope="col" colspan="2">週六</th>
							<th scope="col" colspan="2">週日</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>9:00 ~ 9:50</td>
							<td colspan="2">&nbsp;</td>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td>9:50 ~ 10:00</td>
							<td>休息</td>
							<td>休息</td>
							<td>休息</td>
							<td>休息</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr />
		<?php include_once('nav.php'); ?>
	</div>
	<?php include_once('footer.php'); ?>
</body>
</html>