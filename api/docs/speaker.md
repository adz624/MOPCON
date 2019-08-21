# Speaker API

取得講者資訊

## 取得所有講者資訊

- **URL**

  `/api/2019/speaker`

- **Method**

  `GET`

- **URL Params**

  None

- **Data Params**

  None

- **Success Response:**

  - Code: 200

    Content:

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
          "bio": "Ullam alias magni fugiat at. Error earum aut aperiam cupiditate. Atque suscipit voluptas aut sed ullam architecto.",
          "bio_e": "Aliquam voluptatem iste tenetur nesciunt. Maiores consequatur labore minus voluptatum odio inventore magni. Vero suscipit debitis commodi fugit non.",
          "photo_for_speaker_web": "https://picsum.photos/200",
          "photo_for_speaker_mobile": "https://picsum.photos/200",
          "photo_for_session_web": "https://picsum.photos/200",
          "photo_for_session_mobile": "https://picsum.photos/200",
          "link_fb": "https://www.funk.com/sit-voluptas-cumque-reiciendis-est",
          "link_github": "https://www.schoen.com/id-sunt-ut-quod-modi-voluptas-commodi-maxime",
          "link_twitter": "http://oconnell.info/ut-et-iste-necessitatibus-reprehenderit",
          "link_other": "http://www.sporer.com/quis-eveniet-incidunt-quibusdam-illo-commodi-et-eaque",
          "topic": "Maxime nesciunt.",
          "topic_e": "Est aliquid sed eum quae in.",
          "summary": "Repudiandae voluptatem placeat qui modi quia dignissimos. Tempora in ex saepe officiis sunt laborum. Quia eum qui totam dolor numquam.",
          "summary_e": "Aut ducimus odio distinctio vitae. Iure delectus quam voluptatem iste reiciendis nisi et. Temporibus nihil repellat earum molestiae. Autem ut a eveniet omnis quidem. Eveniet ducimus et quaerat. Vitae porro sed molestiae architecto veritatis modi. Earum et consequuntur ut qui quas ex et. Neque eos dolore ut maiores perspiciatis dolor.",
          "is_keynote": true,
          "started_at": "1571446800",
          "ended_at": "1571450400",
          "room": "R2",
          "floor": "4F",
          "sponsor_id": "1",
          "recordable": true,
          "level": "Basic",
          "tags": [
            "ai",
            "cloud"
          ]
        }
      ]
    }
    ```

- **Error Response:**

  - Code: 404

    Content:

    ```json
    {
      "Success": false,
      "message": "Not found",
      "data": []
    }
    ```

    

## 取得單一講者資訊

- **URL**

  `/api/2019/speaker/:id`

- **Method**

  `GET`

- **URL Params**

  **Required:**

  - id=[integer]

- **Data Params**

  None

- **Success Response:**

  - Code: 200

    Content:

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
        "bio": "Ullam alias magni fugiat at. Error earum aut aperiam cupiditate. Atque suscipit voluptas aut sed ullam architecto.",
        "bio_e": "Aliquam voluptatem iste tenetur nesciunt. Maiores consequatur labore minus voluptatum odio inventore magni. Vero suscipit debitis commodi fugit non.",
        "photo_for_speaker_web": "https://picsum.photos/200",
        "photo_for_speaker_mobile": "https://picsum.photos/200",
        "photo_for_session_web": "https://picsum.photos/200",
        "photo_for_session_mobile": "https://picsum.photos/200",
        "link_fb": "https://www.funk.com/sit-voluptas-cumque-reiciendis-est",
        "link_github": "https://www.schoen.com/id-sunt-ut-quod-modi-voluptas-commodi-maxime",
        "link_twitter": "http://oconnell.info/ut-et-iste-necessitatibus-reprehenderit",
        "link_other": "http://www.sporer.com/quis-eveniet-incidunt-quibusdam-illo-commodi-et-eaque",
        "topic": "Maxime nesciunt.",
        "topic_e": "Est aliquid sed eum quae in.",
        "summary": "Repudiandae voluptatem placeat qui modi quia dignissimos. Tempora in ex saepe officiis sunt laborum. Quia eum qui totam dolor numquam.",
        "summary_e": "Aut ducimus odio distinctio vitae. Iure delectus quam voluptatem iste reiciendis nisi et. Temporibus nihil repellat earum molestiae. Autem ut a eveniet omnis quidem. Eveniet ducimus et quaerat. Vitae porro sed molestiae architecto veritatis modi. Earum et consequuntur ut qui quas ex et. Neque eos dolore ut maiores perspiciatis dolor.",
        "is_keynote": true,
        "started_at": "1571446800",
        "ended_at": "1571450400",
        "room": "R2",
        "floor": "4F",
        "sponsor_id": "1",
        "recordable": true,
        "level": "Basic",
        "tags": [
          "ai",
          "cloud"
        ]
      }
    }
    ```

- **Error Response:**

  - Code: 404

    Content:

    ```json
    {
      "Success": false,
      "message": "Not found",
      "data": []
    }
    ```

  - Code: 400

    Content:

    ```json
    {
      "Success": false,
      "message": "Error Message",
      "data": []
    }
    ```

## 取得所有講師演講主題

- **URL**

  `/api/2019/speaker/tags`

- **Method**

  `GET`

- **URL Params**

  None

- **Data Params**

  None

- **Success Response:**

  - Code: 200

    Content:

    ```json
    {
      "success": true,
      "message": "Success.",
      "data": [
        "ai",
        "cloud"
      ]
    }
    ```

- **Error Response:**

  - Code: 400

    Content:

    ```json
    {
      "Success": false,
      "message": "Error message",
      "data": []
    }
    ```
