<?php
include __DIR__ . '/src/init.php';

$schedules = getSchedule();
foreach ($schedules as $date => $schedule) {
    foreach ($schedule as $timeblock_idx => $timeblock) {
        if (!isset($timeblock['events'])) {
            continue;
        }
        foreach ($timeblock['events'] as $event_idx => $event) {
            if (!isset($event['speaker'])) {
                continue;
            }

            $speaker = getSpeakerById($event['speaker']);
            if (null === $speaker) {
                continue;
            }
            $schedules[$date][$timeblock_idx]['events'][$event_idx]['speaker_id'] = $event['speaker'];
            $schedules[$date][$timeblock_idx]['events'][$event_idx]['speaker'] = $speaker['name'];
        }
    }
}

render("schedule.twig", [
    'pageid' => 'schedule',
    'schedules' => $schedules,
    'room_names' => [
        '1' => '一廳 (R1)',
        '2' => '二廳 (R2)',
        '3' => '三廳 (R3)',
        'all' => '三廳連播 ',
    ],
]);
