# 交流場次 API

## 交流場次資訊
### 欄位說明

交流場次 API 的 resopnse 主要分為兩層，第一層為以天分類，會依照時間順序 group 起來，時間以當天的0點0分為timestamp，第二層為當天交流場次的詳細資料。

##### 注意事項

1. 時間有呈現順序，直接跑迴圈依序呈現 api 所提供的資訊即可， API 已經有排序過了

- date(timestamp): 當天 0 點 0 分 0 秒的 timestamp，單位為秒
- period(array): 交流場次相關資訊，可以參考下方

    ```json
    {
        "success": true,
        "message": "success",
        "data": [ 
            {
                "date": 1571414400,
                "period": []
            },
            {
                "date": 1571500800,
                "period": []
            }
        ]
    }
    ```
### 欄位說明

- date(timestamp): 議程日時間，單位為秒
- period(array): 本日議程所有交流議程
  - started_at(timestamp): 本議程區間開始時間，單位為秒
  - ended_at(timestamp): 本議程區間結束時間，單位為秒
  - isBroadCast(bool): 是否為聯播議程
  - event(string): 議程區塊名稱，通常用來顯示無議程表示（EX: 休息、報到等），如果在議程時間則為空字串
  - room(array): 議程詳細資訊，如果沒有議程會以 empty array 表示
    - name(string): 講師中文名稱
    - name_e(string): 講師英文名稱
    - speaker_id(int): 講者 ID
    - company(string): 公司中文名稱
    - company_e(string): 公司英文名稱
    - job_title(string): 職位中文名稱
    - job_title_e(string): 職位英文名稱
    - topic(string): 議程名稱
    - topic_e(string): 議程英文名稱
    - summary(string): 議程簡介中文
    - summary_e(string): 議程簡介英文
    - is_keynote(bool): 是否為 keynote 議程 (恆為 false)
    - started_at(timestamp): 議程開始時間，單位為秒
    - ended_at(timestamp): 議程結束時間，單位為秒
    - room(string): 議程廳
    - floor(string): 樓層
    - sponsor_id(int): 贊助商編號，如果不是贊助商講者則為 0
    - recordable(bool): 是否提供錄影
    - level(string): 議程難易度
    - img(object): 講者圖片
      - web(string): 網頁版使用 (恆為 empty string)
      - mobile(string): 手機版使用 (恆為 empty string)
    - tags(array): 議程標籤
      - color(string): 標籤色碼
      - name(string): 標籤名稱
    - session_id(int): 議程編號
    - sponsor_info(object):
      - name(string): 贊助商中文名稱
      - name_e(string): 贊助商英文名稱
      - logo_path(string): 贊助商圖片

### Request

- **URL**

  /api/2019/unconf

- **Method**

  `GET`

- **Success Response**

  - Code: 200
  - Content:

  ```json
  {
    "success": true,
    "message": "Success.",
    "data": [
      {
        "date": 1571414400,
        "period": [
          {
            "started_at": 1571447700,
            "ended_at": 1571450400,
            "isBroadCast": false,
            "event": "",
            "room": [
              {
                "name": "家佳",
                "name_e": "Hilbert Boyle",
                "speaker_id": 1,
                "company": "大國集團公司",
                "company_e": "Da Kao",
                "job_title": "incidunt",
                "job_title_e": "incidunt",
                "topic": "Maxime nesciunt.",
                "topic_e": "Est aliquid sed eum quae in.",
                "summary": "summary",
                "summary_e": "summary",
                "is_keynote": false,
                "started_at": 1571446800,
                "ended_at": 1571450400,
                "room": "UnConf",
                "floor": "3F",
                "img": {
                  "web": "",
                  "mobile": "",
                },
                "tags": [
                  {
                    "color": "#01aaf0",
                    "name": "Blockchain"
                  },
                  {
                    "color": "#01aaf0",
                    "name": "IoT"
                  },
                  {
                    "color": "#ff4492",
                    "name": "Startup"
                  }
                ],
                "recordable": true,
                "level": "Basic",
                "session_id": 2019101,
                "sponsor_info": {
                  "name": "大國集團公司",
                  "name_e": "Da Kao",
                  "logo_path": "https://picsum.photos/200"
                }
              }
            ]
          }
        ]
      }
    ]
  }
  ```

## 主要議程清單

提供過濾議程標籤後的議程清單

- **URL**

### 欄位說明

- name(string): 講師中文名稱
- name_e(string): 講師英文名稱
- speaker_id(int): 講者 ID
- company(string): 公司中文名稱
- company_e(string): 公司英文名稱
- job_title(string): 職位中文名稱
- job_title_e(string): 職位英文名稱
- topic(string): 議程名稱
- topic_e(string): 議程英文名稱
- summary(string): 議程簡介中文
- summary_e(string): 議程簡介英文
- is_keynote(bool): 是否為 keynote 議程 (恆為 false)
- started_at(timestamp): 議程開始時間，單位為秒
- ended_at(timestamp): 議程結束時間，單位為秒
- room(string): 議程廳
- floor(string): 樓層
- sponsor_id(int): 贊助商編號，如果不是贊助商講者則為 0
- recordable(bool): 是否提供錄影
- level(string): 議程難易度
- img(object): 講者圖片
  - web(string): 網頁版使用 (恆為 empty string)
  - mobile(string): 手機版使用 (恆為 empty string)
- tags(array): 議程標籤
  - color(string): 標籤色碼
  - name(string): 標籤名稱
- session_id(int): 議程編號
- sponsor_info(object):
  - name(string): 贊助商中文名稱
  - name_e(string): 贊助商英文名稱
  - logo_path(string): 贊助商圖片

### Request

- **URL**

  `/api/2019/unconf/list?tags=:tags`

- **Method**

  `GET`

- **URL Params**

    **Optional:**

    - tags=[string]
      - e.g., `/api/2019/unconf/list?tags=ai,cloud`

- **Success Response**

  - Code: 200
  - Content:

  ```json
  {
    "success": true,
    "message": "Success.",
    "data": [
      {
        "name": "家佳",
        "name_e": "Hilbert Boyle",
        "speaker_id": 1,
        "company": "大國集團公司",
        "company_e": "Da Kao",
        "job_title": "incidunt",
        "job_title_e": "incidunt",
        "topic": "Maxime nesciunt.",
        "topic_e": "Est aliquid sed eum quae in.",
        "summary": "summary",
        "summary_e": "summary",
        "is_keynote": false,
        "started_at": 1571446800,
        "ended_at": 1571450400,
        "room": "UnConf",
        "floor": "3F",
        "img": {
          "web": "",
          "mobile": "",
        },
        "tags": [
          {
            "color": "#01aaf0",
            "name": "Blockchain"
          },
          {
            "color": "#01aaf0",
            "name": "IoT"
          },
          {
            "color": "#ff4492",
            "name": "Startup"
          }
        ],
        "recordable": true,
        "level": "Basic",
        "session_id": 2019101,
        "sponsor_info": {
          "name": "大國集團公司",
          "name_e": "Da Kao",
          "logo_path": "https://picsum.photos/200"
        }
      }
    ]
  }
  ```

## 主要議程資訊

提供單一議程資訊

- **URL**

### 欄位說明

- name(string): 講師中文名稱
- name_e(string): 講師英文名稱
- speaker_id(int): 講者 ID
- company(string): 公司中文名稱
- company_e(string): 公司英文名稱
- job_title(string): 職位中文名稱
- job_title_e(string): 職位英文名稱
- topic(string): 議程名稱
- topic_e(string): 議程英文名稱
- summary(string): 議程簡介中文
- summary_e(string): 議程簡介英文
- is_keynote(bool): 是否為 keynote 議程 (恆為 false)
- started_at(timestamp): 議程開始時間，單位為秒
- ended_at(timestamp): 議程結束時間，單位為秒
- room(string): 議程廳
- floor(string): 樓層
- sponsor_id(int): 贊助商編號，如果不是贊助商講者則為 0
- recordable(bool): 是否提供錄影
- level(string): 議程難易度
- img(object): 講者圖片
  - web(string): 網頁版使用 (恆為 empty string)
  - mobile(string): 手機版使用 (恆為 empty string)
- tags(array): 議程標籤
  - color(string): 標籤色碼
  - name(string): 標籤名稱
- session_id(int): 議程編號 
- sponsor_info(object):
  - name(string): 贊助商中文名稱
  - name_e(string): 贊助商英文名稱
  - logo_path(string): 贊助商圖片

### Request

- **URL**

  `/api/2019/unconf/:session_id`

- **Method**

  `GET`

- **URL Params**

  **Required:**

  - session_id=[integer]

- **Success Response**

  - Code: 200
  - Content:

  ```json
  {
    "success": true,
    "message": "Success.",
    "data": {
      "name": "家佳",
      "name_e": "Hilbert Boyle",
      "speaker_id": 1,
      "company": "大國集團公司",
      "company_e": "Da Kao",
      "job_title": "incidunt",
      "job_title_e": "incidunt",
      "topic": "Maxime nesciunt.",
      "topic_e": "Est aliquid sed eum quae in.",
      "summary": "summary",
      "summary_e": "summary",
      "is_keynote": false,
      "started_at": 1571446800,
      "ended_at": 1571450400,
      "room": "UnConf",
      "floor": "3F",
      "img": {
        "web": "",
        "mobile": "",
      },
      "tags": [
        {
          "color": "#01aaf0",
          "name": "Blockchain"
        },
        {
          "color": "#01aaf0",
          "name": "IoT"
        },
        {
          "color": "#ff4492",
          "name": "Startup"
        }
      ],
      "recordable": true,
      "level": "Basic",
      "session_id": 2019101,
      "sponsor_info": {
        "name": "大國集團公司",
        "name_e": "Da Kao",
        "logo_path": "https://picsum.photos/200"
      }
    }
  }
  ```

- **Error Response**

  錯誤的 id

  - Code: 400
  - Content:

  ```json
  {
    "success": false,
    "message": "Bad request",
    "data": []
  }
  ```

  不存在的 id

  - Code: 404
  - Content:

  ```json
  {
    "success": false,
    "message": "Not found",
    "data": []
  }
  ```
