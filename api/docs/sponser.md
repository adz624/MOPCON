**Sponsor Api**
----

Returns json data about sponsor information.


* **URL**
  * **贊助商資訊**

    `/api/sponsor`

* **Method:**

  `GET`
  
* **URL Params**

  **Optional:**

    sponser_id = {sponser_id}

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** 

    `/api/sponsor`
    ```
    {
      'success' : true,
      'message' : 'Success',
      'data' : 
        'tony_stark' : [
          {
            'logo_path' : 'https://path/to/google/logo', 
            'sponser' : '谷歌',
            'sponser_id' : '12345', 
            'sponser_en' : 'google',
            'understand_more' : 'https://path/to/google/understand_more',
            'about_us' : '我是台灣谷歌...',
            'about_us_en' : 'I am google Taiwan...',
            'facebook_url' : 'https://path/to/google/facebook_url',
            'official_website' : 'https://www.google.com',
            'career_information' : 'https://path/to/google/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲',
                'speaker_name_en' : 'Zames',
                'speaker_title' : 'Google Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲2',
                'speaker_name_en' : 'Zames2',
                'speaker_title' : 'Google Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          {
            'logo_path' : 'https://path/to/aws/logo', 
            'sponser' : '亞馬遜',
            'sponser_id' : '45678',
            'sponser_en' : 'aws',
            'understand_more' : 'https://path/to/aws/understand_more',
            'about_us' : '我是台灣亞馬遜...',
            'about_us_en' : 'I am AWS Taiwan...',
            'facebook_url' : null,
            'official_website' : 'https://aws.amazon.com',
            'career_information' : 'https://path/to/aws/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '大衛',
                'speaker_name_en' : 'David',
                'speaker_title' : 'AWS Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '小衛',
                'speaker_name_en' : 'Little David',
                'speaker_title' : 'AWS Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          ...
        ],
        'bruce_wayne' : [
          {
            'logo_path' : 'https://path/to/google/logo', 
            'sponser' : '谷歌',
            'sponser_id' : '12345', 
            'sponser_en' : 'google',
            'understand_more' : 'https://path/to/google/understand_more',
            'about_us' : '我是台灣谷歌...',
            'about_us_en' : 'I am google Taiwan...',
            'facebook_url' : 'https://path/to/google/facebook_url',
            'official_website' : 'https://www.google.com',
            'career_information' : 'https://path/to/google/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲',
                'speaker_name_en' : 'Zames',
                'speaker_title' : 'Google Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲2',
                'speaker_name_en' : 'Zames2',
                'speaker_title' : 'Google Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          {
            'logo_path' : 'https://path/to/aws/logo', 
            'sponser' : '亞馬遜',
            'sponser_id' : '45678',
            'sponser_en' : 'aws',
            'understand_more' : 'https://path/to/aws/understand_more',
            'about_us' : '我是台灣亞馬遜...',
            'about_us_en' : 'I am AWS Taiwan...',
            'facebook_url' : null,
            'official_website' : 'https://aws.amazon.com',
            'career_information' : 'https://path/to/aws/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '大衛',
                'speaker_name_en' : 'David',
                'speaker_title' : 'AWS Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '小衛',
                'speaker_name_en' : 'Little David',
                'speaker_title' : 'AWS Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          ...
        ],
        'hacker' : [
          {
            'logo_path' : 'https://path/to/google/logo', 
            'sponser' : '谷歌',
            'sponser_id' : '12345', 
            'sponser_en' : 'google',
            'understand_more' : 'https://path/to/google/understand_more',
            'about_us' : '我是台灣谷歌...',
            'about_us_en' : 'I am google Taiwan...',
            'facebook_url' : 'https://path/to/google/facebook_url',
            'official_website' : 'https://www.google.com',
            'career_information' : 'https://path/to/google/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲',
                'speaker_name_en' : 'Zames',
                'speaker_title' : 'Google Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲2',
                'speaker_name_en' : 'Zames2',
                'speaker_title' : 'Google Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          {
            'logo_path' : 'https://path/to/aws/logo', 
            'sponser' : '亞馬遜',
            'sponser_id' : '45678',
            'sponser_en' : 'aws',
            'understand_more' : 'https://path/to/aws/understand_more',
            'about_us' : '我是台灣亞馬遜...',
            'about_us_en' : 'I am AWS Taiwan...',
            'facebook_url' : null,
            'official_website' : 'https://aws.amazon.com',
            'career_information' : 'https://path/to/aws/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '大衛',
                'speaker_name_en' : 'David',
                'speaker_title' : 'AWS Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '小衛',
                'speaker_name_en' : 'Little David',
                'speaker_title' : 'AWS Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          ...
        ],
        'geek' : [
          {
            'logo_path' : 'https://path/to/google/logo', 
            'sponser' : '谷歌',
            'sponser_id' : '12345', 
            'sponser_en' : 'google',
            'understand_more' : 'https://path/to/google/understand_more',
            'about_us' : '我是台灣谷歌...',
            'about_us_en' : 'I am google Taiwan...',
            'facebook_url' : 'https://path/to/google/facebook_url',
            'official_website' : 'https://www.google.com',
            'career_information' : 'https://path/to/google/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲',
                'speaker_name_en' : 'Zames',
                'speaker_title' : 'Google Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲2',
                'speaker_name_en' : 'Zames2',
                'speaker_title' : 'Google Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          {
            'logo_path' : 'https://path/to/aws/logo', 
            'sponser' : '亞馬遜',
            'sponser_id' : '45678',
            'sponser_en' : 'aws',
            'understand_more' : 'https://path/to/aws/understand_more',
            'about_us' : '我是台灣亞馬遜...',
            'about_us_en' : 'I am AWS Taiwan...',
            'facebook_url' : null,
            'official_website' : 'https://aws.amazon.com',
            'career_information' : 'https://path/to/aws/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '大衛',
                'speaker_name_en' : 'David',
                'speaker_title' : 'AWS Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '小衛',
                'speaker_name_en' : 'Little David',
                'speaker_title' : 'AWS Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          ...
        ],
        'developer' : [
          {
            'logo_path' : 'https://path/to/google/logo', 
            'sponser' : '谷歌',
            'sponser_id' : '12345', 
            'sponser_en' : 'google',
            'understand_more' : 'https://path/to/google/understand_more',
            'about_us' : '我是台灣谷歌...',
            'about_us_en' : 'I am google Taiwan...',
            'facebook_url' : 'https://path/to/google/facebook_url',
            'official_website' : 'https://www.google.com',
            'career_information' : 'https://path/to/google/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲',
                'speaker_name_en' : 'Zames',
                'speaker_title' : 'Google Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲2',
                'speaker_name_en' : 'Zames2',
                'speaker_title' : 'Google Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          {
            'logo_path' : 'https://path/to/aws/logo', 
            'sponser' : '亞馬遜',
            'sponser_id' : '45678',
            'sponser_en' : 'aws',
            'understand_more' : 'https://path/to/aws/understand_more',
            'about_us' : '我是台灣亞馬遜...',
            'about_us_en' : 'I am AWS Taiwan...',
            'facebook_url' : null,
            'official_website' : 'https://aws.amazon.com',
            'career_information' : 'https://path/to/aws/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '大衛',
                'speaker_name_en' : 'David',
                'speaker_title' : 'AWS Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '小衛',
                'speaker_name_en' : 'Little David',
                'speaker_title' : 'AWS Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          ...
        ],
        'special_cooperation' : [
          {
            'logo_path' : 'https://path/to/google/logo', 
            'sponser' : '谷歌',
            'sponser_id' : '12345', 
            'sponser_en' : 'google',
            'understand_more' : 'https://path/to/google/understand_more',
            'about_us' : '我是台灣谷歌...',
            'about_us_en' : 'I am google Taiwan...',
            'facebook_url' : 'https://path/to/google/facebook_url',
            'official_website' : 'https://www.google.com',
            'career_information' : 'https://path/to/google/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲',
                'speaker_name_en' : 'Zames',
                'speaker_title' : 'Google Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲2',
                'speaker_name_en' : 'Zames2',
                'speaker_title' : 'Google Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          {
            'logo_path' : 'https://path/to/aws/logo', 
            'sponser' : '亞馬遜',
            'sponser_id' : '45678',
            'sponser_en' : 'aws',
            'understand_more' : 'https://path/to/aws/understand_more',
            'about_us' : '我是台灣亞馬遜...',
            'about_us_en' : 'I am AWS Taiwan...',
            'facebook_url' : null,
            'official_website' : 'https://aws.amazon.com',
            'career_information' : 'https://path/to/aws/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '大衛',
                'speaker_name_en' : 'David',
                'speaker_title' : 'AWS Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '小衛',
                'speaker_name_en' : 'Little David',
                'speaker_title' : 'AWS Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          ...
        ],
        'special_thanks' : [
          {
            'logo_path' : 'https://path/to/google/logo', 
            'sponser' : '谷歌',
            'sponser_id' : '12345', 
            'sponser_en' : 'google',
            'understand_more' : 'https://path/to/google/understand_more',
            'about_us' : '我是台灣谷歌...',
            'about_us_en' : 'I am google Taiwan...',
            'facebook_url' : 'https://path/to/google/facebook_url',
            'official_website' : 'https://www.google.com',
            'career_information' : 'https://path/to/google/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲',
                'speaker_name_en' : 'Zames',
                'speaker_title' : 'Google Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '張景雲2',
                'speaker_name_en' : 'Zames2',
                'speaker_title' : 'Google Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          {
            'logo_path' : 'https://path/to/aws/logo', 
            'sponser' : '亞馬遜',
            'sponser_id' : '45678',
            'sponser_en' : 'aws',
            'understand_more' : 'https://path/to/aws/understand_more',
            'about_us' : '我是台灣亞馬遜...',
            'about_us_en' : 'I am AWS Taiwan...',
            'facebook_url' : null,
            'official_website' : 'https://aws.amazon.com',
            'career_information' : 'https://path/to/aws/career_information',
            'speaker_information' : [
              // speaker 1
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '大衛',
                'speaker_name_en' : 'David',
                'speaker_title' : 'AWS Taiwan CEO ^_^/',
                'speaker_date' : '10/05',
                'speaker_time' : '15:00', 
                'speaker_room' : 'room'
              },
              // speaker 2
              {
                'speaker_img' : 'https://path/to/speaker_img',
                'speaker_name' : '小衛',
                'speaker_name_en' : 'Little David',
                'speaker_title' : 'AWS Taiwan toilet brusher =_=//',
                'speaker_date' : '10/05',
                'speaker_time' : '16:00', 
                'speaker_room' : 'room'
              },
              ...
            ],
          },
          ...
        ],
        'sponsers_type' : {
          'tony_stark',
          'bruce_wayne',
          'hacker',
          'geek',
          'developer',
          'special_cooperation',
          'special_thanks'
        }
    }
    ```
    `/api/sponsor?sponser_id=78910,12345`
    ```
    {
      'success' : true,
      'message' : 'Success',
      'data' : {
        '78910' : {
          'logo_path' : 'https://path/to/kkbox/logo', 
          'sponser' : 'kkbox', 
          'sponser_id' : '78910',
          'sponser_en' : 'kkbox',
          'understand_more' : 'https://path/to/kkbox/understand_more',
          'about_us' : '我是kkbox...',
          'about_us_en' : 'I am kkbox Taiwan...',
          'facebook_url' : 'https://path/to/kkbox/facebook_url',
          'official_website' : 'https://www.kkbox.com',
          'career_information' : 'https://path/to/kkbox/career_information',
          'sponser_type' : 'bruce_wayne'
          'speaker_information' : [
            // speaker 1
            {
              'speaker_img' : 'https://path/to/speaker_img',
              'speaker_name' : '張景雲',
              'speaker_name_en' : 'Zames',
              'speaker_title' : 'KKBOX Taiwan CEO ^_^/',
              'speaker_date' : '10/05',
              'speaker_time' : '15:00', 
              'speaker_room' : 'room'
            },
            // speaker 2
            {
              'speaker_img' : 'https://path/to/speaker_img',
              'speaker_name' : '張景雲2',
              'speaker_name_en' : 'Zames2',
              'speaker_title' : 'KKBOX Taiwan toilet brusher =_=//',
              'speaker_date' : '10/05',
              'speaker_time' : '16:00', 
              'speaker_room' : 'room'
            },
            ...
          ],
        },
        '12345' : {
          'logo_path' : 'https://path/to/google/logo', 
          'sponser' : '谷歌',
          'sponser_id' : '12345', 
          'sponser_en' : 'google',
          'understand_more' : 'https://path/to/google/understand_more',
          'about_us' : '我是台灣谷歌...',
          'about_us_en' : 'I am Google Taiwan...',
          'facebook_url' : 'https://path/to/google/facebook_url',
          'official_website' : 'https://www.google.com',
          'career_information' : 'https://path/to/google/career_information',
          'sponser_type' : 'tony_stark'
          'speaker_information' : [
            // speaker 1
            {
              'speaker_img' : 'https://path/to/speaker_img',
              'speaker_name' : '張景雲',
              'speaker_name_en' : 'Zames',
              'speaker_title' : 'GOOGLE Taiwan CEO ^_^/',
              'speaker_date' : '10/05',
              'speaker_time' : '15:00', 
              'speaker_room' : 'room'
            },
            // speaker 2
            {
              'speaker_img' : 'https://path/to/speaker_img',
              'speaker_name' : '張景雲2',
              'speaker_name_en' : 'Zames2',
              'speaker_title' : 'GOOGLE Taiwan toilet brusher =_=//',
              'speaker_date' : '10/05',
              'speaker_time' : '16:00', 
              'speaker_room' : 'room'
            },
            ...
          ],
        }
      }
    }
    ```
* **URL**
  * **贊助商id對應表**

    `/api/sponsor/map`

* **Method:**

  `GET`
  
* **URL Params**

  **Optional:**

    sponser = {sponser_en}

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** 

    `/api/sponsor/map`
    ```
    {
      'success' : true,
      'message' : 'Success',
      'data' : {
        'google' : '12345',
        'kkbox' : '78910',
        'aws' : '45678',
        ...
      }
    }
    ```
    `/api/sponsor/map?sponser=kkbox,google`
    ```
    {
      'success' : true,
      'message' : 'Success',
      'data' : {
        'google' : '12345',
        'kkbox' : '78910'
      }
    }
    ```
* **Error Response:**

  * **Code:** 400 BAD REQUEST <br />
    **Content:** 
    ```
    {
        'success' : false,
        'message' : 'Wrong protocol'
        'data'    : []
    }
    ```

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/api/sponsor",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
