**Get Song**
----
  Returns json data about a single song.

* **URL**

  /song/list/:UID

* **Method:**

  `GET`

*  **URL Params**

   **Required:**

   `UID=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    {
        "UID": "99933",
        "title": "The Rite",
        "artist": "Rusted Brain",
        "album": "Deceiver",
        "year": "2019",
        "track_number": "3",
        "genre": "Thrash Metal",
        "band": "Rusted Brain",
        "length": "",
        "publisher": "Independent",
        "bpm": "130.734",
        "feat": "",
        "cover_path": "/LOE/Music/Rusted Brain/Deceiver (2019)/cover.jpg",
        "file_path": "/LOE/Music/Rusted Brain/Deceiver (2019)/03. The Rite.mp3",
        "play_count": "1",
        "last_play": "",
        "created_date": "2020-03-25 12:22:29",
        "artist_country": "Poland",
        "rating": "",
        "artist_city": "",
        "artist_state": ""
    }
    ```

* **Error Response:**

  * **Code:** 200 <br />
    **Content:** `{ error : "Invalid UID" }`

  OR

  * **Code:** 200 <br />
    **Content:** `{ error : "Access Denied. No Token Present." }`

    OR

    * **Code:** 200 <br />
      **Content:** `{ error : "Access Denied. Invalid Token." }`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/song/list/1",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
