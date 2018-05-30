<?php
namespace MopCon2018\Utils;

class Base
{
    public function __construct()
    {
        # code...
    }

    public static function test()
    {
        return 'Hello, World!';
    }

    public static function render($template_name, $params)
    {
        $main_msg = [
            'zh' => [
                'sitetitle' => '行動科技年會 2017 | Mobile / Open / Platform Conference',
                'ogtitle' => '行動科技年會 2017 | Mobile / Open / Platform Conference',
                'ogsitename' => '行動科技年會 2017 | Mobile / Open / Platform Conference',
                'ogdesc' => '濁水溪以南最強大行動科技研討會，2017強勢回歸',
                'nav' => [
                    // 'cfp' => '徵稿',
                    'community' => '主辦社群',
                    // 'location' => '地圖',
                    // 'previous' => '歷年 MOPCON',
                    'member' => '志工組織',
                    'speaker' => '講者',
                    'schedule' => '議程',
                    'sponsor' => '贊助',
                    'schedule_unconf' => '交流場次',
                    // 'hackpad' => '2017 hackpad',
                    // 'chatroom' => '聊天室',
                    // 'chatroom_gitter' => '網頁版（Gitter）',
                    // 'chatroom_irc' => 'IRC: #mopcon @ freenode',
                    'hackfoldr' => '共筆記錄',
                    'gitter' => 'Gitter 聊天室',
                    'ticket' => '購票資訊',
                    'apps' => 'Apps',
                    'blog' => '部落格',
                    'stalls' => '社團攤位申請',
                    'code_of_conduct' => 'MOPCON 行動準則',

                ],
                'his_mopcon' => '歷年 MOPCON',
            ],
            'en' => [
                'sitetitle' => 'MOPCON 2017 | Mobile / Open / Platform Conference',
                'ogtitle' => 'MOPCON 2017 | Mobile / Open / Platform Conference',
                'ogsitename' => 'MOPCON 2017 | Mobile / Open / Platform Conference',
                'ogdesc' => 'Your favoeite conference for mobile technology in southern Taiwan is now back in 2017',
                'nav' => [
                    // 'cfp' => 'Call for Presentation',
                    'community' => 'Community',
                    // 'location' => 'Location',
                    // 'previous' => 'Previous Events',
                    'member' => 'Member',
                    'speaker' => 'Speakers',
                    'schedule' => 'Schedule',
                    'schedule_unconf' => 'Unconf',
                    'sponsor' => 'Sponsors',
                    // 'hackpad' => '2016 hackpad',
                    // 'chatroom' => 'Chat Room',
                    // 'chatroom_gitter' => 'Gitter',
                    // 'chatroom_irc' => 'IRC: #mopcon @ freenode',
                    'hackfoldr' => 'HackMD',
                    'gitter' => 'Gitter',
                    'ticket' => 'Ticket',
                    'apps' => 'Apps',
                    'blog' => 'Blog',
                    'stalls' => 'Stalls',
                    'code_of_conduct' => 'MOPCON Code of Conduct',
                ],
                'his_mopcon' => 'Past MOPCON',
            ],
        ];
        $main = self::getI18n($main_msg);
        $main['pagetitle'] = (isset($main['nav'][$params['pageid']])) ? $main['nav'][$params['pageid']] : $params['pagetitle'];
        $webParams = str_replace(['&lang=zh', '&lang=en'], ['', ''], isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : "");
        $params = array_replace_recursive(
            [
                'main' => $main,
                'website' => $_SERVER['HTTP_HOST'],
                // 'webList' => getWebList(),
                'webParams' => $webParams,
                'lang' => self::getLang(),
                'og_image' => 'mopcon2017_large.png',
                // 'og_url' => '',
                'version' => [
                    // 'allCss' => getLastUpdateTime('css.all'),
                    // 'allJs' => getLastUpdateTime('js.all'),
                    // 'webFontsCss' => getLastUpdateTime('css.web-fonts'),
                ],
                'from_app' => $from_app = isset($_GET['from_app']) ? (bool) $_GET['from_app'] : false,
            ],
            $params
        );
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../twig');
        $twig = new \Twig_Environment($loader);
        $twig->addExtension(new \Jralph\Twig\Markdown\Extension(new \Jralph\Twig\Markdown\Parsedown\ParsedownExtraMarkdown));
        $baseUrl = new \Twig_SimpleFunction('baseUrl', function ($path) {
            return '/2018/' . $path;
        });
        $twig->addFunction($baseUrl);

        echo $twig->render($template_name, $params);
    }

    public static function getI18n($msg_data)
    {
        if (!is_array($msg_data) || 0 === count($msg_data)) {
            return [];
        }

        $lang = self::getLang();

        if (isset($msg_data[$lang])) {
            return $msg_data[$lang];
        }
        if (isset($msg_data['en'])) {
            return $msg_data['en'];
        }
        return reset($msg_data); // return first group
    }

    public static function getLang()
    {
        static $lang = null;
        if ($lang) {
            return $lang;
        }

        $supported_langs = [
            'zh',
            'en',
        ];
        $lang = 'zh';

        if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_langs)) {
            $lang = $_GET['lang'];
        } elseif (isset($_COOKIE['lang'])) {
            $lang = $_COOKIE['lang'];
        }
        setcookie('lang', $lang);

        return $lang;
    }

    // public static
}
