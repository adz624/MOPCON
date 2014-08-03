<?php
$levels = [
    // ['css name', '變數名稱', '畫面顯示名稱']
    ['sponsor-platinum', 'hacker', 'Hacker'],
    ['sponsor-gold', 'geek', 'Geek'],
    ['sponsor-silver', 'developer', 'Developer'],
    ['sponsor-bronze', 'coder', 'Coder'],
    ['sponsor-media', 'media', '媒體夥伴'],
];
?>
<p>強力徵求贊助廠商，請快與我們（ sponsor [at] mopcon.org ）聯繫</p>
<h3>感謝以下各贊助單位</h3>

<?php foreach($levels as $level):
if (!isset($this->$level[1])) {
    continue;
}
$sponsors = $this->$level[1];
if (count($sponsors) < 0) {
    continue;
}


?><div class="<?= $level[0]?>">
<h2><?=$level[2]?></h2>
<?php foreach($sponsors as $sponsor):?>
        <section>
          <div class="article">
              <a href="<?=htmlspecialchars($sponsor['url'])?>" target="_blank">
              <img src="/2014/images/sponsor/<?= htmlspecialchars($sponsor['img']) ?>" alt="<?=htmlspecialchars($sponsor['name'])?>">
              </a>
              <?=htmlspecialchars($sponsor['desc'])?>
          </div>
        </section>
<?php endforeach;?>

</div>
<?php endforeach;?>
