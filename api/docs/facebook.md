**Facebook Api**
----

Returns json data about a facebook information.

* **SETTING**
  到 .env 中 填入 facebook 粉專的 token

  ```
  FACEBOOK_TOKEN={yourToken}
  ```


* **URL**
  * **粉專貼文資訊**

    `/api/facebook/posts`

* **Method:**

  `GET`
  
*  **URL Params**

   **Optional:**
 
   `limit=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** 
    ```json
    {
        "success": true,
        "message": "Success get posts",
        "data": [
            {
                "full_picture": "https://external.xx.fbcdn.net/safe_image.php?d=AQAEKbeX-ax-o_CA&url=https%3A%2F%2Fbuzzorange.com%2Ftechorange%2Fwp-content%2Fuploads%2Fsites%2F2%2F2019%2F08%2F1200px-190714_HK_Protest_Incendo_02-1-1024x683.jpg&_nc_hash=AQBXS7vE6N22TokR",
                "message": "不讀不回老闆訊息也不怕，隔天就說我家網路不好～拍謝！\n想安穩睡覺，就千萬別讓老闆發現這個 APP 😱\n\n什麼❗即使沒有網路也能傳送訊息 \n快試試 Bridgefy：https://lihi1.com/b8TXH\n\n#想逼死誰啦 #好吧 #其實是真的很好用\n#騷擾好朋友的工具 #接招吧",
                "id": "219967208129003_2228387760620261",
                "shares": 7,
                "created_time": "2019-08-20T04:00:08+0000",
                "likes": 69,
                "url": "https://www.facebook.com/219967208129003_2228387760620261"
            },
            {
                "full_picture": "https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/68436816_2225711374221233_1420993005078183936_n.jpg?_nc_cat=101&_nc_oc=AQkuS8-A_XAkCED16XPNDg75Y_JdXx8AF49s2ekaSpJhlKiTrga9j8GvaKuETAJE6_k&_nc_ht=scontent.xx&oh=16d4d62f4db5fc17d1cc369fd9c3669c&oe=5E0A2CF5",
                "message": "【 #COSCUP2019 Thank you ❤️】\n\n多虧這次活動，MOPCON 認識了 \n香港的朋友、韓國的朋友、日本的朋友、中國的朋友！\n還有每個 COSCUP 好捧油🥰\n感謝大家的支持，禮物都快被搶光～\n攤位都這麼好玩了！\n那你們絕對不能錯過 MOPCON2019！\n\n讓我們再複習一次 #小智慧大PK 的重點\nMOPCON2019 何時舉辦？ #10月19日 ~ #10月20日 \n\n後續將陸續分享這次的活動照片喔！\n大家晚安😴\n\n#HongKong\n#Korea\n#Japan\n#China\n#Taiwan\n#COSCUP2019",
                "id": "219967208129003_2225740130885024",
                "created_time": "2019-08-18T14:47:05+0000",
                "likes": 47,
                "shares": 0,
                "url": "https://www.facebook.com/219967208129003_2225740130885024"
            }
        ]
    }
    ```
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** 
    ```json
    {
        "success": false,
        "message": "Not found",
        "data": []
    }
    ```

  OR

  * **Code:** 400 BAD REQUEST <br />
    **Content:** 
    ```json
    {
        "success": false,
        "message": "can not access over than 100 posts", 
        "data": []
    }
    ```
    ```json
    {
        "success": false,
        "message": "Token invalid",
        "data": []
    }
    ```

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/api/facebook/posts", // 預設回傳20篇粉專貼文
      dataType: "json",
      type: "GET",
      success: function(r) {
        console.log(r);
      }
    });
  ```
  ```javascript
    $.ajax({
      url: "/api/facebook/posts?limit=50", // 回傳50篇粉專貼文 上限為100
      dataType: "json",
      type: "GET",
      success: function(r) {
        console.log(r);
      }
    });
  ```
