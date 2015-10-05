<?php
include __DIR__ . '/src/init.php';

$template_name = ('en' === getLang())
    ? "cfp_en.twig"
    : "cfp.twig";

$params = [
    'pageid' => 'cfp',
    'filemtime' => filemtime('cfp.php'), 
    'data' => null,
];

if (isset($_GET['api'])) {
	getJson($params);
}
render($template_name, $params);
