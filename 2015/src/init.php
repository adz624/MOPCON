<?php
include __DIR__ . "/../../vendor/autoload.php";
include __DIR__ . '/sponsor.php';
include __DIR__ . '/speaker.php';
include __DIR__ . '/schedule.php';

//////////////////////////////////////////////////////////////////////////////
function getSpeakerById($id)
{
    static $speakers = null;
    if (null === $speakers) {
        $speakers = getAllSpeakers();
    }
    return isset($speakers[$id]) ? $speakers[$id] : null;
}

//////////////////////////////////////////////////////////////////////////////
// speakerId 為空值，若 title, pic 未設定就會指定 title = "MOPCON", pic = "images/schedule/mopcon.png"
// speakerId 找到講者 ID，若 title, pic, speaker 未設定就會自動帶入
// speakerId 異常，找不到講者 ID 會強制蓋掉 title, pic, speaker 為 晚點告訴你 :P
//////////////////////////////////////////////////////////////////////////////
function getAllSchedule()
{
    $schedule = setSchedule();
    for($i = 0; $i < count($schedule); $i++) {
        if($schedule[$i]["speakerId"] === '') { //無講者
            $schedule[$i]['title'] = isset($schedule[$i]['title']) ? $schedule[$i]['title'] : "MOPCON";
            $schedule[$i]['pic'] = isset($schedule[$i]['pic']) ? $schedule[$i]['pic'] : "images/schedule/mopcon.png";
            $schedule[$i]["speaker"] = isset($schedule[$i]["speaker"]) ? $schedule[$i]["speaker"] : "";
            continue;
        }

        if(is_array($schedule[$i]["speakerId"])) { //複數講者
            $schedule[$i]["title"] = "";
            $schedule[$i]["speaker"] = "";
            foreach($schedule[$i]["speakerId"] as $speakerId) {
                $speaker = getSpeakerById($speakerId);
                if($speaker === null) continue;

                if($schedule[$i]["title"] != '') {
                    $schedule[$i]["title"] .= " 與 ";
                }
                $schedule[$i]["title"] .= $speaker['name'];
                $schedule[$i]["speaker"] .= "<p>" . $speaker['name'] . "：<br>" . $speaker['bio'] . "<p>";
            }
            $schedule[$i]['pic'] = isset($schedule[$i]["pic"]) ? $schedule[$i]["pic"] : 'images/schedule/secret.jpg'; //異常處理
        } else { //單一講者
            $speaker = getSpeakerById($schedule[$i]["speakerId"]);
            if($speaker === null) { //異常處理
                $schedule[$i]["speakerId"] = '';
                $schedule[$i]["title"] = '晚點告訴你 :P';
                $schedule[$i]["speaker"] = '';
                $schedule[$i]['pic'] = 'images/schedule/secret.jpg';
            } else {
                $schedule[$i]["title"] = isset($schedule[$i]["title"]) ? $schedule[$i]["title"] : $speaker['name'];
                $schedule[$i]["speaker"] = isset($schedule[$i]["speaker"]) ? $schedule[$i]["speaker"] : $speaker['bio'];
                $schedule[$i]['pic'] = isset($schedule[$i]["pic"]) ? $schedule[$i]["pic"] : "images/speaker/" . $speaker['pic'];
            }
        } 
    }
    return $schedule;
}
//////////////////////////////////////////////////////////////////////////////
function getLang()
{
    static $lang = null;
    if ($lang) {
        return $lang;
    }

    $supported_langs = [
        'zh',
        'en'
    ];

    if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs)) {
        $lang = $_GET['lang'];
    } elseif(isset($_COOKIE['lang'])) {
        $lang = $_COOKIE['lang'];
    } else {
        if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
            $browser_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
        } else {
            $browser_lang = 'zh';
        }
        $lang = in_array($browser_lang, $supported_langs) ? $browser_lang : 'en';
    }
    setcookie('lang', $lang);

    return $lang;
}

function getI18n($msg_data)
{
    if (!is_array($msg_data) || 0 === count($msg_data)) {
        return [];
    }

    $lang = getLang();

    if (isset($msg_data[$lang])) {
        return $msg_data[$lang];
    }
    if (isset($msg_data['en'])) {
        return $msg_data['en'];
    }
    return reset($msg_data); // return first group
}

function render($template_name, $params)
{
    $main_msg = [
        'zh' => [
            'sitetitle' => '行動科技年會 | MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogtitle' => '行動科技年會 | MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogsitename' => '行動科技年會 | MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogdesc' => '濁水溪以南最強大行動科技研討會，2015強勢回歸',
            'navcommunity' => '社群',
            'navlocation' => '地圖',
            'navcfp' => '徵稿',
            'navprevious' => '歷年',
            'navspeaker' => '講者',
            'navsession' => '議程',
            'navsponsor' => '贊助',
        ],
        'en' => [
            'sitetitle' => 'MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogtitle' => 'MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogsitename' => 'MOPCON 2015 | Mobile / Open / Platform Conference',
            'ogdesc' => 'Your favoeite conference for mobile technology in southern Taiwan is now back in 2015',
            'navcommunity' => 'Community',
            'navlocation' => 'Location',
            'navcfp' => 'Call for paper',
            'navprevious' => 'Previous Events',
            'navspeaker' => 'Speakers',
            'navsession' => 'Session',
            'navsponsor' => 'Sponsors',
        ],
    ];

    $params = array_replace_recursive(
        [
            'main' => getI18n($main_msg),
            'lang' => getLang(),
            'og_image' => 'snapshot-mid.png',
            'og_url' => '',
        ],
        $params
    );
    $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../twig');
    $twig = new \Twig_Environment($loader);
    $twig->addExtension(new Jralph\Twig\Markdown\Extension(new Jralph\Twig\Markdown\Parsedown\ParsedownExtraMarkdown));
    echo $twig->render($template_name, $params);
}
