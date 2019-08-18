**Sponsor Api**
----

Returns json data about sponsor information.


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
    ```
    {
        "success": true,
        "message": "success",
        "data": {
            "tony_stark": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g0",
                    "sponsor_en": "Stark-industry0",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "tony_stark",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a0",
                    "sponsor_en": "S.H.I.E.L.D0",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "tony_stark",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ],
            "bruce_wayne": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g1",
                    "sponsor_en": "Stark-industry1",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "bruce_wayne",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a1",
                    "sponsor_en": "S.H.I.E.L.D1",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "bruce_wayne",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ],
            "hacker": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g2",
                    "sponsor_en": "Stark-industry2",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "hacker",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a2",
                    "sponsor_en": "S.H.I.E.L.D2",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "hacker",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ],
            "geek": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g3",
                    "sponsor_en": "Stark-industry3",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "geek",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a3",
                    "sponsor_en": "S.H.I.E.L.D3",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "geek",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ],
            "developer": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g4",
                    "sponsor_en": "Stark-industry4",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "developer",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a4",
                    "sponsor_en": "S.H.I.E.L.D4",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "developer",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ],
            "special_cooperation": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g5",
                    "sponsor_en": "Stark-industry5",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "special_cooperation",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a5",
                    "sponsor_en": "S.H.I.E.L.D5",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "special_cooperation",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ],
            "special_thanks": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g6",
                    "sponsor_en": "Stark-industry6",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "special_thanks",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a6",
                    "sponsor_en": "S.H.I.E.L.D6",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "special_thanks",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ],
            "education": [
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                    "sponsor": "史塔克",
                    "sponsor_id": "g7",
                    "sponsor_en": "Stark-industry7",
                    "understand_more": "https://www.Stark-industry.com",
                    "about_us": "我們是台灣史塔克,史塔克很棒棒",
                    "about_us_en": "We are Stark-industry Taiwan. We are great",
                    "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                    "official_website": "https://www.Stark-industry.com",
                    "career_information": "https://careers.Stark-industry.com/jobs/",
                    "sponsor_type": "education",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小明",
                            "speaker_name_en": "little min",
                            "speaker_title": "Stark-industry Taiwan CEO",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小華",
                            "speaker_name_en": "little wa",
                            "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                },
                {
                    "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                    "sponsor": "神盾局",
                    "sponsor_id": "a7",
                    "sponsor_en": "S.H.I.E.L.D7",
                    "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                    "about_us": "我是台灣神盾局...",
                    "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                    "facebook_url": "",
                    "official_website": "https://S.H.I.E.L.D.shield.com",
                    "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                    "sponsor_type": "education",
                    "speaker_information": [
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "大衛",
                            "speaker_name_en": "David",
                            "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                            "speaker_date": "10/05",
                            "speaker_time": "15:00",
                            "speaker_room": "room"
                        },
                        {
                            "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                            "speaker_name": "小衛",
                            "speaker_name_en": "Little David",
                            "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                            "speaker_date": "10/05",
                            "speaker_time": "16:00",
                            "speaker_room": "room"
                        }
                    ]
                }
            ]
        }
    }
    ```
    `/api/2019/sponsor?sponsor_id=g0,a1`
    ```
    {
        "success": true,
        "message": "success",
        "data": [
            {
                "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/LogoMakr.png",
                "sponsor": "史塔克",
                "sponsor_id": "g0",
                "sponsor_en": "Stark-industry0",
                "understand_more": "https://www.Stark-industry.com",
                "about_us": "我們是台灣史塔克,史塔克很棒棒",
                "about_us_en": "We are Stark-industry Taiwan. We are great",
                "facebook_url": "https://www.facebook.com/Stark-industryTaiwan/?brand_redir=104958162837",
                "official_website": "https://www.Stark-industry.com",
                "career_information": "https://careers.Stark-industry.com/jobs/",
                "sponsor_type": "tony_stark",
                "speaker_information": [
                    {
                        "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                        "speaker_name": "小明",
                        "speaker_name_en": "little min",
                        "speaker_title": "Stark-industry Taiwan CEO",
                        "speaker_date": "10/05",
                        "speaker_time": "15:00",
                        "speaker_room": "room"
                    },
                    {
                        "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                        "speaker_name": "小華",
                        "speaker_name_en": "little wa",
                        "speaker_title": "Stark-industry Taiwan toilet brusher =_=//",
                        "speaker_date": "10/05",
                        "speaker_time": "16:00",
                        "speaker_room": "room"
                    }
                ]
            },
            {
                "logo_path": "https://www.logaster.com/blog/wp-content/uploads/2018/05/Canva.png",
                "sponsor": "神盾局",
                "sponsor_id": "a1",
                "sponsor_en": "S.H.I.E.L.D1",
                "understand_more": "https://S.H.I.E.L.D.shield.com/tw/",
                "about_us": "我是台灣神盾局...",
                "about_us_en": "I am S.H.I.E.L.D Taiwan...",
                "facebook_url": null,
                "official_website": "https://S.H.I.E.L.D.shield.com",
                "career_information": "https://S.H.I.E.L.D.shield.com/tw/careers/",
                "sponsor_type": "bruce_wayne",
                "speaker_information": [
                    {
                        "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                        "speaker_name": "大衛",
                        "speaker_name_en": "David",
                        "speaker_title": "S.H.I.E.L.D Taiwan CEO ^_^/",
                        "speaker_date": "10/05",
                        "speaker_time": "15:00",
                        "speaker_room": "room"
                    },
                    {
                        "speaker_img": "https://png.pngtree.com/svg/20170518/274aed119e.svg",
                        "speaker_name": "小衛",
                        "speaker_name_en": "Little David",
                        "speaker_title": "S.H.I.E.L.D Taiwan toilet brusher =_=//",
                        "speaker_date": "10/05",
                        "speaker_time": "16:00",
                        "speaker_room": "room"
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
