# 志工團隊 API

## 志工團隊清單
- **URL**

    /api/2019/volunteer

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
      "volunteer": [
        {
          "id":"1",
          "name": "議程委員會",
          "photo": "/images/community/qwdqwdqwdq.jpg"
        },
        {
          "id":"2",
          "name": "議程組",
          "photo": "/images/community/qwdqwdqwdq.jpg"
        },
        {
          "id":"3",
          "name": "財務組",
          "photo": "/images/community/qwdqwdqwdq.jpg"
        }
      ]
    }
  }
  ```

## 志工團隊 Volunteer
- **URL**

  /api/2019/volunteer/:id

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
      "name": "場務組",
      "photo": "/images/community/qwdqwdqwdq.jpg",
      "members": [
        "李曉明",
        "王曉華",
      ],
      "introducion": "場地之守護神，照料與會者的一切，為工人把屎把尿。場地的一切柴米油鹽醬醋茶都是我們負責。",
      "introducion_en": ""
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
