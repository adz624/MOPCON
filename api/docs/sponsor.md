**Sponsor Api**
----

Returns json data about sponsor information.

### 欄位說明

贊助商 API 的 resopnse 主要分為兩層，第一層為贊助級別分類，第二層為各個級別之贊助商細資料

#### 贊助商類別分類

注意！級別有呈現順序，可以依照 object 的順序進行呈現

- tony_stark(array): Tony Stark 級別之贊助商（沒有此級別之贊助商會用 empty array 顯示）
- bruce_wayne(array): Bluce Wayne 級別之贊助商（沒有此級別之贊助商會用 empty array 顯示）
- hacker(array): Hacker 級別之贊助商（沒有此級別之贊助商會用 empty array 顯示）
- geek(array): Geek 級別之贊助商（沒有此級別之贊助商會用 empty array 顯示）
- developer(array): Developer 級別之贊助商（沒有此級別之贊助商會用 empty array 顯示）
- education(array): 教育贊助之贊助商（沒有此級別之贊助商會用 empty array 顯示）
- special_thanks(array): 特別感謝之合作對象（沒有此級別會用 empty array 顯示）
- co-organizer(array): 協辦單位（沒有此級別會用 empty array 顯示）
- ksg_support(array): 高雄市經發局專用呈現級別（沒有此級別會用 empty array 顯示）

```json
{
  "success": true,
  "message": "success",
  "data": {
    "tony_stark": [],
    "bruce_wayne": [],
    "hacker": [],
    "geek": [],
    "developer": [],
    "special_thanks": [],
    "education": [],
    "co-organizer": [],
    "ksg_support": [],
  }
}
```
#### 贊助商欄位

- logo(string): 贊助商 LOGO
- sponsor(string): 贊助商中文名稱
- sponsor_e(string): 贊助商英文名稱
- sponsor_id(int): 贊助商 id
- about_us(string): 贊助商簡介
- about_us_e(string): 贊助商英文簡介
- facebook_url(string): 粉絲頁連結（如果沒有提供會使用 empty string)
- official_website(string): 企業官方網站（如果沒有提供會使用 empty string）
- career_information(string): 企業徵才資訊連結（如果沒有提供會使用 empty string)
- sponsor_type(string): 贊助商級別
- speaker_information(array): 此企業的相關講師（如果沒有則會使用 empty array)
  - img(object):
    - mobile(string): Mobile 使用的圖片連結
    - web(string): Web 使用的圖片連結
  - name(string): 講者名稱
  - name_e(string): 講者英文名稱
  - title(string): 演講題目
  - title_e(string): 演講英文題目
  - started_at(timestamp): 演講開始時間，單位為秒
  - ended_at(timestamp): 演講結束時間，單位為秒
  - room(string): 會議廳
  - tags(object):
    - ${color_hex}(array): 這個分類的 tags ， color_hex 為這個類別的色碼，只要是這個 tag 都是給這個色碼

### Request

* **URL**
  * **贊助商資訊**

    `/api/2019/sponsor`

* **Method:**

  `GET`

* **URL Params**

  **Optional:**

    sponsor_id = {sponsor_id}

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**

    `/api/2019/sponsor`
    ```json
    {
        "success": true,
        "message": "success",
        "data": {
            "tony_stark": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_e": "Stark-industry0",
                    "sponsor_id": 1,
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_e": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "tony_stark",
                    "speaker_information": [
                        {
                            "img": {
                                "web": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                                "mobile": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            },
                            "name": "小明",
                            "name_e": "little min",
                            "title": "Stark-industry Taiwan CEO",
                            "title_e": "Stark-industry Taiwan CEO",
                            "started_at": 1571537400,
                            "ended_at": 1571539800,
                            "room": "R1",
                            "tags": {
                              "#98ce02": [],
                              "#ff4492": [],
                              "#01aaf0": [
                                "IoT"
                              ]
                            }
                        }
                    ]
                }
            ],
            "bruce_wayne": [],
            "hacker": [],
            "geek": [],
            "developer": [],
            "special_thanks": [],
            "education": [],
            "co-organizer": [],
            "ksg_support": [],
        }
    }
    ```
    `/api/2019/sponsor?sponsor_id=1`
    ```json
    {
        "success": true,
        "message": "success",
        "data": [
            {
                "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                "sponsor": "史塔克",
                "sponsor_e": "Stark-industry0",
                "sponsor_id": 1,
                "about_us": "我們是台灣史塔克,史塔克很棒棒",
                "about_us_e": "We are Stark-industry Taiwan. We are great",
                "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                "official_website": "https://www.Stark-industry.com",
                "career_information": "https://careers.Stark-industry.com/jobs/",
                "sponsor_type": "tony_stark",
                "speaker_information": [
                    {
                        "img": {
                            "web": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "mobile": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                        },
                        "name": "小明",
                        "name_e": "little min",
                        "title": "Stark-industry Taiwan CEO",
                        "title_e": "Stark-industry Taiwan CEO",
                        "started_at": 1571537400,
                        "ended_at": 1571539800,
                        "room": "R1",
                        "tags": {
                          "#98ce02": [],
                          "#ff4492": [],
                          "#01aaf0": [
                            "IoT"
                          ]
                        }
                    }
                ]
            }
        ]
    }
    ```

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/api/2019/sponsor",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
