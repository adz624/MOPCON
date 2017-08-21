<?php
include __DIR__ . '/src/init.php';


$lang = getLang();
$pageid = 'community';
$params['og_url'] = 'community.php';
$params = [
    'pageid' => $pageid,
    'filemtime' => getLastUpdateTime($pageid),
    'community' => getAllCommunities(),
    'sponsors' => getAllSponsors(),
];
if (isset($_GET['id'])) {
    $id = intval($_GET['id'])-1;
    $params['community'] = getSingleCommunity($id);
    // $params['og_image'] = $params['schedules']['pic'];
    // $params['og_url'] = 'schedule.php?speaker=' . $speaker;
    // $params['main']['ogdesc'] = $params['schedules']['title'] . " : " . $params['schedules']['summary'];

}
render(( isset($_GET['id']) )? 'communityDetail.twig' : 'community.twig', $params);
