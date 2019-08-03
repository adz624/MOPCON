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
    ```
    {
      'success' : true,
      'message' : 'Get {number} of posts', 
      'data' : [
          {
              'full_picture' : {imageUrl},
              'message' : {貼文內容},
              'id': {貼文ID}, // 可透過 facebook.com/{id} 找到該貼文
              "shares" : {int}, // 多少人分享
              "url" : "https://www.facebook.com/{id}", //該貼文
              "likes" : {int}, // 多少人按讚
              'created_time' : '2018-12-18T07:22:06+0000' // 貼文時間點
          },
          {
              'full_picture' : {imageUrl},
              ...
          }
      ]
    }
    ```
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** 
    ```
    {
        'success' : false,
        'message' : 'Not found'
        'data'    : []
    }
    ```

  OR

  * **Code:** 400 BAD REQUEST <br />
    **Content:** 
    ```
    {
        'success' : false,
        'message' : 'can not access over than 100 posts' // 不能一次要求超過100篇貼文
        'data'    : []
    }
    ```
    ```
    {
        'success' : false,
        'message' : 'Token invalid' // facebook token 不合法
        'data'    : []
    }
    ```

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/api/facebook/posts", // 預設回傳20篇粉專貼文
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
  ```javascript
    $.ajax({
      url: "/api/facebook/posts?limit=50", // 回傳50篇粉專貼文 上限為100
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
