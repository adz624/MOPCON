<?php
include __DIR__.'/src/Savant3.php';
include __DIR__.'/src/sessions.php';
include __DIR__.'/src/speakers.php';
include __DIR__.'/src/sponsors.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];
$tpl = new Savant3($config);

// 頁面設定
$tpl->title = "議程表";
$tpl->mainClass = 'talk-☴';


// 取得資料
$sessions = sessions();
$speakers = speakers();
$sponsors = sponsors();

$default_speaker = [
    'name' => '神秘嘉賓',
    'company' => '神秘組織',
    'title' => '藏鏡人',
    'bio' => '猜猜我是誰',
    'pic' => 'generic_speaker.png',
];

// 組合資料
$session_data = [];
foreach ($sessions as $session) {
    if (isset($session['speakerId']) && isset($sponsors[$session['speakerId']])) {
        // 講者是贊助商，以贊助商資料為準
        $sponsor = $sponsors[$session['speakerId']];
        $session['speaker'] = [
            'name' => $sponsor['name'],
            'company' => '',
            'title' => '',
            'bio' => $sponsor['desc'],
            'pic' => "../sponsor/{$sponsor['img']}",
        ];
    } elseif (!isset($session['speakerId']) || !isset($speakers[$session['speakerId']])) {
        // 沒有講者資料...開始通靈塞預設資料
        $session['speaker'] = $default_speaker;
        // BEGIN: dirty work, 不要打我...
        $session['speaker']['pic'] = is_file('images/speakers/' . $session['speakerId'])
            ? $session['speakerId']
            : $session['speaker']['pic'];
        $session['speaker']['name'] = (is_file('images/speakers/' . $session['speakerId']) && $session['speakerId'][0] != '.')
            ? substr($session['speakerId'], 6, -4)
            : $session['speaker']['name'];
        // END: dirty work, 不要打我...
    } else {
        // 就是個講者資料
        $session['speaker'] = $speakers[$session['speakerId']];
    }

    $date = $session['date'];
    $time = $session['time'];
    $session_data[$date][$time][] = $session;
}

$tpl->sessions = $session_data;

// 輸出畫面
$tpl->content = $tpl->getOutput('session.tpl.php');
$tpl->display('main.tpl.php');
