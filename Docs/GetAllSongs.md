**Get All Songs**
----
  Returns json array of all songs.

* **URL**

  /song/

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
            "UID": "100932",
            "title": "Expanding Oblivion",
            "artist": "Pestifer",
            "album": "Expanding Oblivion",
            "year": "2020",
            "track_number": "11",
            "genre": "Technical Death Metal",
            "band": "Pestifer",
            "length": "",
            "publisher": "XENOKORP",
            "bpm": "",
            "feat": "",
            "cover_path": "/LOE/Music/Pestifer/Expanding Oblivion (2020)/cover.jpg",
            "file_path": "/LOE/Music/Pestifer/Expanding Oblivion (2020)/11 - Expanding Oblivion.mp3",
            "play_count": "0",
            "last_play": "",
            "created_date": "2020-04-23 13:34:14",
            "artist_country": "",
            "rating": "",
            "artist_city": "",
            "artist_state": ""
        },
        {
            "UID": "100931",
            "title": "Ultimate Confusions",
            "artist": "Pestifer",
            "album": "Expanding Oblivion",
            "year": "2020",
            "track_number": "10",
            "genre": "Technical Death Metal",
            "band": "Pestifer",
            "length": "",
            "publisher": "XENOKORP",
            "bpm": "",
            "feat": "",
            "cover_path": "/LOE/Music/Pestifer/Expanding Oblivion (2020)/cover.jpg",
            "file_path": "/LOE/Music/Pestifer/Expanding Oblivion (2020)/10 - Ultimate Confusions.mp3",
            "play_count": "0",
            "last_play": "",
            "created_date": "2020-04-23 13:34:14",
            "artist_country": "",
            "rating": "",
            "artist_city": "",
            "artist_state": ""
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
      url: "/song/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
