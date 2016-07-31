<?php
include __DIR__ . '/src/init.php';

$templates = [
    'zh' => 'speaker.twig',
    // 'en' => 'speaker_en.twig',
];

$lang = getLang();
if($lang!=='zh') {
    header("Location:./");
}
$template = isset($templates[$lang]) ? $templates[$lang] : $templates['zh'];

$pageid = 'speaker';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'speakers' => [],
];

$params['og_url'] = 'speaker.php';
$params['speakers'] = getAllSpeakers();
$params['main']['ogdesc'] = '濁水溪以南最強大行動科技研討會，星光閃閃講師盡在這邊！'; 	

// print_r(getAllSpeakers());exit;
if (count($params['speakers']) === 0 ) {
    header('Location: /2016/speaker.php');
    exit;
}
if (isset($_GET['api'])) {
    getJson($params);
}
render($template, $params);
