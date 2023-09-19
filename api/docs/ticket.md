# 電子票券 API

## 電子票券資訊

取得電子票用的 API

### 欄位說明

電子票券 API 的 resopnse 只會是一層 object，會回傳 PKPass 檔案位址以及 Google Pay Passes 網址

#### 電子票券欄位

- apple(string): Apple iOS Wallet 的檔案位置
- google(string): Google Pay Passes 網址

### Request
- **URL**

    /api/2022/ticket

- **Method**

    `POST`
*  **Body Params**

   **Optional:**
 
   `{ ticketNo: 'ticketNo'}`

- **Success Response**

  - Code: 200
  - Content:
  ```json
    {
        "success": true,
        "message": "success",
        "data": {
        "apple": "URL",
        "google": "URL"
    }
    }
  ```
### 欄位說明

回傳對應 ticketNo 的 PKPass 檔案

### Request

**URL**

    /api/2022/ticket/:ticketNo

- **Method**

    `GET`
    
*  **URL Params**

   **Required:**
 
   `ticketNo=[string]`

- **Success Response**

  - Code: 200
  - Content: PKpass file Data
