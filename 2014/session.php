<?php
include __DIR__.'/src/Savant3.php';
include __DIR__.'/src/sessions.php';
include __DIR__.'/src/speakers.php';

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
    if (!isset($session['speakerId']) || !isset($speakers[$session['speakerId']])) {
        $session['speaker'] = $default_speaker;
        // BEGIN: dirty work, 不要打我...
        is_file('images/speakers/'.session['speakerId'].'.jpg') ? 
            session['speakerId'].'.jpg' : $session['speaker']['pic'];
        // END: dirty work, 不要打我...
    } else {
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
