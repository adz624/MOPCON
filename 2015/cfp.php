<?php
include __DIR__ . '/src/init.php';

$template_name = ('en' === getLang())
    ? "cfp_en.twig"
    : "cfp.twig";

render($template_name, [
    'pageid' => 'cfp',
]);
