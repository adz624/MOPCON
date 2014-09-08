<?php
include __DIR__.'/../src/Parsedown.php';
$parsedown = new Parsedown();

?>

<?php foreach ($this->sessions as $date => $day_sessions):?>
<h2><?=htmlspecialchars($date)?></h2>
<?php foreach ($day_sessions as $time => $time_sessions):?>
<time><?=htmlspecialchars($time)?></time>
<div class="row">
<?php foreach ($time_sessions as $idx => $session):
    $idx++;
    $article_style = count($time_sessions)>1 ? "area-{$idx}" : "area-all";
?>
    <article class="<?=$article_style?>" href="#inline_content">
        <div class="place">
<?php if (isset($session['room'])): ?>
            <span class="btn btn-primary"><?=htmlspecialchars($session['room'])?></span>
<?php endif;?>
<?php if (isset($session['tag'])): ?>
            <span class="btn" style="background-color:<?=htmlspecialchars($session['tagColor'])?>"><?=htmlspecialchars($session['tag'])?></span>
<?php endif;?>
        </div>
        <div class="talker">
            <figure><img src="images/speakers/<?=htmlspecialchars($session['speaker']['pic'])?>"></figure>
            <h3><?=htmlspecialchars($session['speaker']['name'])?></h3>
            <h2><a href="#"><?=htmlspecialchars($session['title'])?></a></h2>
            <div class="detail">
                <p class="title">議題介紹</p>
                <p class="introduce"><?=htmlspecialchars($session['desc'])?></p>
                <p class="title">講者簡介</p>
                <p class="introduce"><?=htmlspecialchars($session['speaker']['bio'])?></p> 
                <a href="#" class="jq-close">
                    <i class="icon-cross3"></i>
                </a>
            </div>
        </div>
    </article>
<?php endforeach;?>
</div>
<?php endforeach;?>
<?php endforeach;?>