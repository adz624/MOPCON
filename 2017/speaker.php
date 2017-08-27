<?php
include __DIR__ . '/src/init.php';

$pageid = 'speaker';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'speakers' => [],
];
$params['og_url'] = 'speaker.php';

	$params['speakers'] = getAllSpeakers();
	$params['main']['ogdesc'] = '濁水溪以南最強大行動科技研討會，星光閃閃講師盡在這邊！'; 	

	// $templates = [
	//     'zh' => 'speaker.twig',
	//     // 'en' => 'speaker_en.twig',
	// ];


if (count($params['speakers']) === 0 || current($params['speakers']) === null) {
    header('Location: /2017/speaker.php');
    exit;
}

// print_r(getAllSpeakers());exit;
// if (count($params['speakers']) === 0 ) {
//     header('Location: /2016/speaker.php');
//     exit;
// }
if (isset($_GET['api'])) {
    getJson($params);
}

$lang = getLang();
if($lang!=='zh') {
    header("Location:./");
}
// $template = isset($templates[$lang]) ? $templates[$lang] : $templates['zh'];

render('speaker.twig', $params);
