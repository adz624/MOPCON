<?php
include __DIR__ . '/src/init.php';

$params = [
    'pageid' => 'schedule',
    'schedules' => getSchedule(),
];


render('schedule.twig', $params);
