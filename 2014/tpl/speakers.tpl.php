<div class="speaker-wrap md-text">
<?php foreach($this->speakers as $speaker):?>

<section class="speaker-container">
<div class="speaker-img"><img src="images/speakers/<?=urlencode($speaker['pic'])?>" alt=""></div>
<h2 class="speaker-name"><?=htmlspecialchars($speaker['name'])?></h2>
<h4 class="title"><?=htmlspecialchars($speaker['company'])?>&nbsp;<?=htmlspecialchars($speaker['title'])?></h4>
<div class="description">
<p><?=htmlspecialchars($speaker['bio'])?>
</div>
</section>

<?php endforeach;?>
</div>
