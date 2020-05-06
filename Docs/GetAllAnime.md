**Get All Anime**
----
  Returns json array of all anime.

* **URL**

  /anime/

* **Method:**

  `GET`

*  **URL Params**

  None

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    [
        {
            "UID": "1477",
            "show_title": "When They Cry",
            "japanese_title": "Higurashi no Naku Koro ni",
            "type": "TV",
            "season": "0",
            "ep_number": "Ep26",
            "ep_title": "Retake (Chapter Atonement Part 5)",
            "run_time": "0",
            "rating": "N/A",
            "genre": "N/A",
            "genre2": "N/A",
            "genre3": "N/A",
            "description": "Keiichi Maebara has just moved to the quiet little village of Hinamizawa in the summer of 1983, and quickly becomes inseparable friends with schoolmates Rena Ryuuguu, Mion Sonozaki, Satoko Houjou, and Rika Furude. However, darkness lurks underneath the se",
            "release_date": "2006-04-05",
            "cover_path": "/LOE/Video/Anime/When They Cry Higurashi/cover.jpg",
            "file_path": "/LOE/Video/Anime/When They Cry Higurashi/Ep26 - Retake (Chapter Atonement Part 5).mkv"
        },
        {
            "UID": "1476",
            "show_title": "When They Cry",
            "japanese_title": "Higurashi no Naku Koro ni",
            "type": "TV",
            "season": "0",
            "ep_number": "Ep25",
            "ep_title": "Earth Invasion (Chapter Atonement Part 4)",
            "run_time": "0",
            "rating": "N/A",
            "genre": "N/A",
            "genre2": "N/A",
            "genre3": "N/A",
            "description": "Keiichi Maebara has just moved to the quiet little village of Hinamizawa in the summer of 1983, and quickly becomes inseparable friends with schoolmates Rena Ryuuguu, Mion Sonozaki, Satoko Houjou, and Rika Furude. However, darkness lurks underneath the se",
            "release_date": "2006-04-05",
            "cover_path": "/LOE/Video/Anime/When They Cry Higurashi/cover.jpg",
            "file_path": "/LOE/Video/Anime/When They Cry Higurashi/Ep25 - Earth Invasion (Chapter Atonement Part 4).mkv"
        },
    ....]
    ```

* **Error Response:**

  * **Code:** 200 <br />
    **Content:** `{ error : "Access Denied. No Token Present." }`

    OR

    * **Code:** 200 <br />
      **Content:** `{ error : "Access Denied. Invalid Token." }`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/anime/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
