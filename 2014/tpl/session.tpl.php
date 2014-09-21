<?php
include __DIR__.'/../src/Parsedown.php';
$parsedown = new Parsedown();

?>
<div class="waring">
目前議程尚在調整中，顯示資料並非最終結果。不便之處敬請多多包涵
</div>
<div class="row date-link">
    <a href="#day-2">連至第二天議程 10/26 →</a>
</div>
<?php foreach ($this->sessions as $date => $day_sessions):?>
<div class="date">
<?=htmlspecialchars($date)?>
</div>
<?php foreach ($day_sessions as $time => $time_sessions):?>
<time><?=htmlspecialchars($time)?></time>
<div class="row">
<?php foreach ($time_sessions as $idx => $session):
    $idx++;
    $article_style = count($time_sessions)>1 ? "area-{$idx}" : "area-all";
?>
    <a name="<?=htmlspecialchars($date."_".$time."_".$session['room'])?>"/>
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
            <figure style="overflow:hidden;">
            <?php 
            // XXX hack，強行調整這幾張圖片位置
            if ('KKBOX_drake_guan.jpg' === $session['speaker']['pic']) {
                $pos_offset = "margin-top:-18px;";
            } elseif ('KKBOX_VincentChen.jpg' === $session['speaker']['pic']) {
                $pos_offset = "margin-top:-10px;";
            } else {
                $pos_offset = '';
            }
            ?>
            <img style="width:auto; height:auto;<?=$pos_offset?>" src="images/speakers/<?=htmlspecialchars($session['speaker']['pic'])?>">
            </figure>
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