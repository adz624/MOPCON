<?php
include __DIR__ . '/src/init.php';

$params = [
    'pageid' => 'schedule',
    'schedules' => getAllSchedule(),
];


render('schedule.twig', $params);
