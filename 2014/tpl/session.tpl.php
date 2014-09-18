<?php
include __DIR__.'/../src/Parsedown.php';
$parsedown = new Parsedown();

?>
<script>
    $(function(){
    $('.btn:contains("技術")').addClass('btn-pink');
    $('.btn:contains("營運")').addClass('btn-darkgreen');
    $('.btn:contains("活動")').addClass('btn-red');
})
</script>
<?php foreach ($this->sessions as $date => $day_sessions):?>
<div style="border:1px solid #026080; background-color:rgba(0,0,0,0.1); padding:1em; text-align:center;margin-bottom:1.5em;">
<?=htmlspecialchars($date)?>
</div>
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
            <span class="btn btn-blue"><?=htmlspecialchars($session['room'])?></span>
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