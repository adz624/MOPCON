# 主要議程 API

## 主要議程表
- **URL**

    /api/2019/session

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
        "date": "1571414400",
        "period": [
          {
            "started_at": "1571445000",
            "ended_at": "1571446800",
            "event": "報到",
            "room": {}
          },
          {
            "started_at": "1571446800",
            "ended_at": "1571447700",
            "event": "開幕",
            "room": {}
          },
          {
            "started_at": "1571447700",
            "ended_at": "1571450400",
            "event": "",
            "room": {
              "All": {
                "session_id": 1,
                "room": "R2",
                "location": "4F二廳",
                "speaker_id": 1,
                "name": "家佳",
                "name_e": "Hilbert Boyle",
                "company": "大國集團公司",
                "company_e": "Da Kao",
                "job_title": "incidunt",
                "job_title_e": "incidunt",
                "photo_for_session_web": "https://picsum.photos/200",
                "photo_for_session_mobile": "https://picsum.photos/200",
                "topic": "Maxime nesciunt.",
                "topic_e": "Est aliquid sed eum quae in.",
                "started_at": "1571446800",
                "ended_at": "1571450400",
                "tags_tech": [
                  "ai",
                  "cloud"
                ],
                "tags_design": [
                  "UI/UX"
                ],
                "tags_other": [],
                "is_keynote": true,
                "is_sponsor_session": true,
                "recordable": true,
                "level": "Basic"
              }
            }
          },
          {
            "started_at": "1571446800",
            "ended_at": "1571447700",
            "event": "休息",
            "room": {}
          },
          {
            "started_at": "1571447700",
            "ended_at": "1571450400",
            "room": {
              "R1": {
                "session_id": 1,
                "room": "R1",
                "location": "3F一廳",
                "speaker_id": 1,
                "name": "家佳",
                "name_e": "Hilbert Boyle",
                "company": "大國集團公司",
                "company_e": "Da Kao",
                "job_title": "incidunt",
                "job_title_e": "incidunt",
                "photo_for_session_web": "https://picsum.photos/200",
                "photo_for_session_mobile": "https://picsum.photos/200",
                "topic": "Maxime nesciunt.",
                "topic_e": "Est aliquid sed eum quae in.",
                "started_at": "1571446800",
                "ended_at": "1571450400",
                "tags_tech": [
                  "ai",
                  "cloud"
                ],
                "tags_design": [
                  "UI/UX"
                ],
                "tags_other": [],
                "is_keynote": true,
                "is_sponsor_session": true,
                "recordable": true,
                "level": "Basic"
              },
              "R2": {
                "session_id": 1,
                "room": "R2",
                "location": "4F二廳",
                "speaker_id": 1,
                "name": "家佳",
                "name_e": "Hilbert Boyle",
                "company": "大國集團公司",
                "company_e": "Da Kao",
                "job_title": "incidunt",
                "job_title_e": "incidunt",
                "photo_for_session_web": "https://picsum.photos/200",
                "photo_for_session_mobile": "https://picsum.photos/200",
                "topic": "Maxime nesciunt.",
                "topic_e": "Est aliquid sed eum quae in.",
                "started_at": "1571446800",
                "ended_at": "1571450400",
                "tags_tech": [
                  "ai",
                  "cloud"
                ],
                "tags_design": [
                  "UI/UX"
                ],
                "tags_other": [],
                "is_keynote": true,
                "is_sponsor_session": true,
                "recordable": true,
                "level": "Basic"
              },
              "R3": {
                "session_id": 1,
                "room": "R2",
                "location": "4F三廳",
                "speaker_id": 1,
                "name": "家佳",
                "name_e": "Hilbert Boyle",
                "company": "大國集團公司",
                "company_e": "Da Kao",
                "job_title": "incidunt",
                "job_title_e": "incidunt",
                "photo_for_session_web": "https://picsum.photos/200",
                "photo_for_session_mobile": "https://picsum.photos/200",
                "topic": "Maxime nesciunt.",
                "topic_e": "Est aliquid sed eum quae in.",
                "started_at": "1571446800",
                "ended_at": "1571450400",
                "tags_tech": [
                  "ai",
                  "cloud"
                ],
                "tags_design": [
                  "UI/UX"
                ],
                "tags_other": [
                  "Startup"
                ],
                "is_keynote": true,
                "is_sponsor_session": true,
                "recordable": true,
                "level": "Basic"
              }
            }
          },
          {
            "started_at": "",
            "ended_at": "",
            "event": "END",
            "room": {}
          },
          {
            "started_at": "",
            "ended_at": "",
            "event": "講者晚宴",
            "room": {}
          }
        ]
      }
    ]
  }
  ```
## 主要議程清單
- **URL**

    /api/2019/session/list

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
          "session_id": 1,
          "room": "R1",
          "location": "3F一廳",
          "speaker_id": 1,
          "name": "家佳",
          "name_e": "Hilbert Boyle",
          "company": "大國集團公司",
          "company_e": "Da Kao",
          "job_title": "incidunt",
          "job_title_e": "incidunt",
          "photo_for_session_web": "https://picsum.photos/200",
          "photo_for_session_mobile": "https://picsum.photos/200",
          "topic": "Maxime nesciunt.",
          "topic_e": "Est aliquid sed eum quae in.",
          "started_at": "1571446800",
          "ended_at": "1571450400",
          "tags_tech": [
            "ai",
            "cloud"
          ],
          "tags_design": [
            "UI/UX"
          ],
          "tags_other": [],
          "is_keynote": true,
          "is_sponsor_session": true,
          "recordable": true,
          "level": "Basic"
        },
        {
          "session_id": 1,
          "room": "R2",
          "location": "4F二廳",
          "speaker_id": 1,
          "name": "家佳",
          "name_e": "Hilbert Boyle",
          "company": "大國集團公司",
          "company_e": "Da Kao",
          "job_title": "incidunt",
          "job_title_e": "incidunt",
          "photo_for_session_web": "https://picsum.photos/200",
          "photo_for_session_mobile": "https://picsum.photos/200",
          "topic": "Maxime nesciunt.",
          "topic_e": "Est aliquid sed eum quae in.",
          "started_at": "1571446800",
          "ended_at": "1571450400",
          "tags_tech": [
            "ai",
            "cloud"
          ],
          "tags_design": [
            "UI/UX"
          ],
          "tags_other": [],
          "is_keynote": true,
          "is_sponsor_session": true,
          "recordable": true,
          "level": "Basic"
        }

    ]
  }
  ```
  
## 主要議程資訊
- **URL**

    /api/2019/conf/session/:session_id

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
    "data": [
      {
        "session_id": 1,
        "room": "R2",
        "location": "4F三廳",
        "speaker_id": 1,
        "name": "家佳",
        "name_e": "Hilbert Boyle",
        "company": "大國集團公司",
        "company_e": "Da Kao",
        "job_title": "incidunt",
        "job_title_e": "incidunt",
        "photo_for_session_web": "https://picsum.photos/200",
        "photo_for_session_mobile": "https://picsum.photos/200",
        "topic": "Maxime nesciunt.",
        "topic_e": "Est aliquid sed eum quae in.",
        "summary": "Repudiandae voluptatem placeat qui modi quia dignissimos. Tempora in ex saepe officiis sunt laborum. Quia eum qui totam dolor numquam.",
        "summary_e": "Aut ducimus odio distinctio vitae. Iure delectus quam voluptatem iste reiciendis nisi et. Temporibus nihil repellat earum molestiae. Autem ut a eveniet omnis quidem. Eveniet ducimus et quaerat. Vitae porro sed molestiae architecto veritatis modi. Earum et consequuntur ut qui quas ex et. Neque eos dolore ut maiores perspiciatis dolor.",
        "started_at": "1571446800",
        "ended_at": "1571450400",
        "tags_tech": [
          "ai",
          "cloud"
        ],
        "tags_design": [
          "UI/UX"
        ],
        "tags_other": [
          "Startup"
        ],
        "is_keynote": true,
        "is_sponsor_session": true,
        "recordable": true,
        "level": "Basic"
      }
    ]
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