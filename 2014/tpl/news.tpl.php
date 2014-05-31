<?php foreach($this->articles as $article):?>
	<?php
        date_default_timezone_set('Asia/Taipei');
		$timestamp = strtotime($article['published']);
		$time['y'] = date('Y', $timestamp);
		$time['m'] = date('m', $timestamp);
		$time['d'] = date('d', $timestamp);
	?>
	<section class="anti-☢">
		<time>
			<em><?=(int) $time['y'] ?></em><br><?=(int) $time['m'] ?>/<?=(int) $time['d'] ?>
		</time>
		<div class="news-content">
			<?php if(isset($article['title']) && false): ?>
			<h2><?= $article['title'] ?></h2>
			<?php endif;?>
			<div class="news-label">
				<p><?= $article['content'] ?>
				<p><a href="<?= htmlspecialchars($article['alternate'])?>">原文連結</a>
			</div>
		</div>
	</section>

<?php endforeach;?>
