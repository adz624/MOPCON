<?php


use Phinx\Migration\AbstractMigration;

class InsertFieldGameQuizzes extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('filegame_quizzes');
        $quizzes = $this->getQuizzes();
        $table->insert($quizzes)->save();
    }

    public function down()
    {
        $idMax = count($this->getQuizzes());
        $this->execute("DELETE FROM filegame_quizzes WHERE quiz_id <= '$idMax'");
    }

    public function getQuizzes()
    {
        $raw_str = "請問 MOPCON 活動的主視覺是由哪一組設計的?@@^@@公關組@@^@@行銷組@@^@@場佈組@@^@@美術組@@^@@美術組
        MOPCON 到今年為止，總共已經辦了幾屆呢？@@^@@6@@^@@8@@^@@9@@^@@7@@^@@7
        請問 MOPCON 的全名為何？@@^@@Move Open Platform Conference@@^@@Mobile Open Person Conference@@^@@Mobile Origin Platform Conference@@^@@Mobile Open Platform Conference@@^@@Mobile Open Platform Conference
        請問 歷屆的 MOPCON 紀念 T-shirt 中沒有出現過下列哪個顏色？@@^@@藍色@@^@@紫色@@^@@綠色@@^@@粉紅色@@^@@粉紅色
        請問 MOPCON 2016 紀念 T-shirt 上的字樣為下列何者？@@^@@一定有小精靈偷偷動過我的程式碼@@^@@LIFE OF A CODE@@^@@i'm just a Programmer@@^@@127.0.0.1@@^@@127.0.0.1
        請問 MOPCON 2017 紀念 T-shirt 上的字樣為下列何者？@@^@@一定有小精靈偷偷動過我的程式碼@@^@@i'm just a Programmer@@^@@127.0.0.1@@^@@LIFE OF A CODE@@^@@LIFE OF A CODE
        請問 MOPCON 2018 紀念 T-shirt 上的字樣為下列何者？@@^@@i'm just a Programmer@@^@@佛系工程師@@^@@127.0.0.1@@^@@一定有小精靈偷偷動過我的程式碼@@^@@佛系工程師
        請問今年 MOPCON 總招是誰？@@^@@Hack@@^@@Hadoop@@^@@Hash@@^@@Heap@@^@@Hash
        請問 MOPCON 紀念 T-shirt 顏色是使用何種方式決定@@^@@固定幾種顏色輪@@^@@公開票選顏色@@^@@隨機產生顏色@@^@@上一屆工人T的顏色為下一屆會眾T的顏色@@^@@上一屆工人T的顏色為下一屆會眾T的顏色
        MOPCON 是濁水溪以南最大科技研討會，請問下列城市不在濁水溪以南？@@^@@雲林縣@@^@@嘉義縣@@^@@台南市@@^@@台中市@@^@@台中市
        請問 MOPCON 活動現場大小事是哪一個組別負責處理的？@@^@@場佈組@@^@@門機組@@^@@美術組@@^@@場務組@@^@@場務組
        請問 MOPCON 活動當天負責記錄講師演講的點點滴滴，真實呈現在大螢幕上的是哪一個組別負責？@@^@@場務組@@^@@資訊組@@^@@攝影組@@^@@錄影組@@^@@錄影組
        「相當於工蟲、探測機或是太空工程車的單位，採礦速度通常跟當月吃了什麼高雄美食有高度相關，目標是在11/3之前蓋出世界奇觀」請根據上述句子判斷是那一組的工作@@^@@財務組@@^@@行政組@@^@@場務組@@^@@贊助組@@^@@贊助組
        請問下列哪一年 MOPCON 舉辦的場地與其他不同@@^@@2013@@^@@2015@@^@@2012@@^@@2017@@^@@2012
        請問下列哪一年 MOPCON 看得到海景？@@^@@2013@@^@@2015@@^@@2014@@^@@2012@@^@@2012
        請問 MOPCON 是在哪一年開始舉辦的？@@^@@1941@@^@@2010@@^@@2018@@^@@2012@@^@@2012
        MOPCON 是什麼以南最大研討會？@@^@@高屏溪@@^@@淡水河@@^@@愛河@@^@@濁水溪@@^@@濁水溪
        如果想參加 MOPCON 下列何者行不通？@@^@@成為贊助商@@^@@報名講者@@^@@擔任志工@@^@@拿梯子假裝維修冷氣@@^@@拿梯子假裝維修冷氣
        請問 M 娘的角色定位是什麼年紀@@^@@6@@^@@18@@^@@20@@^@@15@@^@@15
        請問 MOPCON 最常在哪個月份舉辦？@@^@@九月@@^@@十二月@@^@@十一月@@^@@十月@@^@@十月
        如果想購買 MOPCON 2018 的紀念 T-shirt，可以到哪裡購買？@@^@@報到處@@^@@工人休息室@@^@@服務台@@^@@4樓電梯前@@^@@服務台
        請問每年 MOPCON 一定會製作且必買的紀念商品為何@@^@@M 娘簽名照@@^@@紀念杯墊@@^@@紀念筆記本@@^@@紀念 T-shirt@@^@@紀念 T-shirt
        請問 MOPCON 2018 會眾版紀念 T-shirt 的顏色為何？@@^@@灰白相間的格子@@^@@彩色@@^@@灰色@@^@@綠色@@^@@灰色
        請問 MOPCON 官方網站網址為何？@@^@@https://mopcon.or/2018/@@^@@https://mopcon.org.tw/2018/@@^@@https://mopcon.com/2018/@@^@@https://mopcon.org/2018/@@^@@https://mopcon.org/2018/
        請問 MOPCON 共有幾個議程廳@@^@@一個@@^@@兩個@@^@@四個@@^@@三個@@^@@三個
        請問哪兩個議程廳是位於 ICCK 四樓？@@^@@R1 & R2@@^@@R1 & R3@@^@@R3 & R4@@^@@R2 & R3@@^@@R2 & R3
        請問下列何者不屬於MOPCON贊助級別？@@^@@Geek 級@@^@@Hacker級@@^@@Bruce Wayne級@@^@@T'Challa級@@^@@T'Challa級
        請問 MOPCON 今年的講者徵稿是在哪個月分？@@^@@五月@@^@@八月@@^@@七月@@^@@六月@@^@@六月
        下列虛擬實境技術尚未實現@@^@@AR@@^@@VR@@^@@CR@@^@@MR@@^@@CR
        MOPCON今年活動主軸@@^@@IoT@@^@@區塊鏈@@^@@行動應用@@^@@以上皆是@@^@@以上皆是
        目前市值最大的加密貨幣為?@@^@@BCH@@^@@BBC@@^@@BTC@@^@@HTC@@^@@BTC
        物聯網不涉及哪個領域？@@^@@感知層@@^@@心智層@@^@@網路層@@^@@應用層@@^@@心智層
        UX應用的研究方法不包含哪一個？@@^@@三角比較法   @@^@@KJ取樣法@@^@@脈絡分析@@^@@卡片分類法@@^@@KJ取樣法
        一般來說，要判斷一個系統是否具備人工智慧的能力我們會採用什麼測試去衡量？@@^@@雙盲測試@@^@@圖靈測試@@^@@薛丁格測試@@^@@機靈測試@@^@@圖靈測試
        以下何者不屬於前端開發框架？@@^@@React@@^@@Scala@@^@@Vue@@^@@Angular@@^@@Scala
        在各種程式語言當中，哪一種對於跨網頁與手機平台的開發最具備學習上的優勢？@@^@@Swift@@^@@Python@@^@@Ruby On Rails@@^@@Javascript@@^@@Javascript
        蒐集的資料還可以被規劃，引導開發更大的消費力量。這個流程屬於何種機能？ @@^@@商流@@^@@資訊流@@^@@金流@@^@@物流@@^@@資訊流
        那一個名詞最適合描述將所有物品通過無線通訊、感測技術及互聯網連接起來，實現智慧化的生活環境？@@^@@大數據（Big Data）@@^@@行動運算（Mobile Computing）@@^@@物聯網（Internet of Things）@@^@@雲端運算（Cloud Computing）@@^@@物聯網（Internet of Things）
        深度學習主要是基於哪一種技術實現的？@@^@@類神經網路@@^@@決策樹@@^@@專家系統@@^@@量子運算@@^@@類神經網路";

        $tmp = explode("\n", $raw_str);
        $quizzes = [];

        foreach ($tmp as $key => $row) {
            $quizinfo = explode("@@^@@", $row);
            $choices = array_map(function ($item) { return trim($item); }, array_slice($quizinfo, 1, 4));
            $quizzes[] = [
                'quiz_id' => $key + 1,
                'quiz' => trim($quizinfo[0]),
                'choices' => json_encode($choices, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                'reward' => mt_rand(5, 50),
                'answer' => trim($quizinfo[5]),
                'started_at' => '2018-11-03 08:30:00',
                'expired_at' => '2018-11-04 17:30:00',
                'created_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s')
            ];
        }

        return $quizzes;
    }
}
