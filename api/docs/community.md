# 主辦社群與參與社群 API

## 社群清單
- **URL**

    /api/2019/community

- **Method**

    `GET`

- **Success Response**

  - Code: 200
  - Content:
  ```JSON
  {
    "success": true,
    "message": "Success.",
    "data": {
      "community" : [
        {
          "id":"1",
          "name": "GDG Cloud Kaohsiung",
          "photo": "/images/community/qwdqwdqwdq.jpg"
        },
        {
          "id":"2",
          "name": "Kaohsiung Python User Group",
          "photo": "/images/community/eryeryery.jpg"
        }
      ],
      "participant": [
        {
          "id":"1",
          "name": "As A Product Designer",
          "photo": "/images/community/qwdqwdqwdq.jpg"
        }
      ]
    ]
  }
  ```

## 主辦社群organizer
- **URL**

  /api/2019/community/organizer/:id

- **Method**

  `GET`

- **URL Params**

    **Required:**

    - id=[integer]

- **Success Response**

  - Code: 200
  - Content:
  ```JSON
  {
    "success": true,
    "message": "Success.",
    "data": {
      "name": "GDG Cloud Kaohsiung",
      "photo": "/images/community/qwdqwdqwdq.jpg",
      "introduction": "GDG Kaohsiung\n(Google Developer Group Kaohsiung)\nGDG Kaohsiung 是以研究 Google 以及 Android App 領域的技術、設計、新創或相關產業為主的開發者群。每個月至少會有一場實體聚會在高雄舉行。\nGDG Kaoshiung 前身是 Android 高雄開發者社群，自從2014年三月開始舉辦，每月會有一到兩場的實體會，舉行時間原則上依講者和場地許可時間安排，實際活動時間請持續關注社團，我們會隨時公佈最新的活動訊息歡迎對相關領域有興趣的朋友可以參與聚會，一起交流討論。",
      "introduction_en": "",
      "facebook": "",
      "twitter": "",
      "instagram": "",
      "telegram":""
    }
  }
  ```
- **Error Response**

  錯誤的 id

  - Code: 400
  - Content:
  ```JSON
  {
    "success": false,
    "message": "Bad request",
    "data": []
  }
  ```

  不存在的 id
  - Code: 404
  - Content:
  ```JSON
  {
    "success": false,
    "message": "Not found",
    "data": []
  }
  ```

## 參與社群participant
- **URL**

  /api/2019/community/participant/:id

- **Method**

  `GET`

- **URL Params**

    **Required:**

    - id=[integer]

- **Success Response**

  - Code: 200
  - Content:
  ```JSON
  {
    "success": true,
    "message": "Success.",
    "data": {
      "name": "GDG Cloud Kaohsiung",
      "photo": "/images/community/qwdqwdqwdq.jpg",
      "introduction": "GDG Kaohsiung\n(Google Developer Group Kaohsiung)\nGDG Kaohsiung 是以研究 Google 以及 Android App 領域的技術、設計、新創或相關產業為主的開發者群。每個月至少會有一場實體聚會在高雄舉行。\nGDG Kaoshiung 前身是 Android 高雄開發者社群，自從2014年三月開始舉辦，每月會有一到兩場的實體會，舉行時間原則上依講者和場地許可時間安排，實際活動時間請持續關注社團，我們會隨時公佈最新的活動訊息歡迎對相關領域有興趣的朋友可以參與聚會，一起交流討論。",
      "introduction_en": "",
      "facebook": "",
      "twitter": "",
      "instagram": "",
      "telegram":""
    }
  }
  ```

- **Error Response**

  錯誤的 id

  - Code: 400
  - Content:
  ```JSON
  {
    "success": false,
    "message": "Bad request",
    "data": []
  }
  ```

  不存在的 id
  - Code: 404
  - Content:
  ```JSON
  {
    "success": false,
    "message": "Not found",
    "data": []
  }
  ```
