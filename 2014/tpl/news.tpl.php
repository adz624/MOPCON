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
			<svg class="news-svg" width="72" height="72">
	          <line class="news-svg-top" x1="0" y1="0" x2="216" y2="0"/>
	          <line class="news-svg-left" x1="0" y1="72" x2="0" y2="-144"/>
	          <line class="news-svg-bottom" x1="72" y1="72" x2="-144" y2="72"/>
	          <line class="news-svg-right" x1="72" y1="0" x2="72" y2="216"/>
	     	</svg>
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
