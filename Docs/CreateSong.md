**Create Song**
----
Processes a song from the holding bay and returns json data about a newly created song.

* **URL**

  /song/

* **Method:**

  `POST`

*  **URL Params**

  None

* **Data Params**

  ```
  {
      "UID": 1,
      "title": "Sulphur Souls",
      "artist": "Marduk",
      "album": "Opus Nocturne",
      "year": "1994",
      "track_number": "2",
      "genre": "Black Metal",
      "band": "",
      "length": "",
      "publisher": "",
      "bpm": "",
      "feat": "",
      "cover_path": "",
      "file_path": "/LOE/holding_bay/music/1994 - Opus Nocturne/02. Sulphur Souls.mp3",
      "play_count": "",
      "last_play": "",
      "created_date": "",
      "artist_country": "",
      "rating": "",
      "artist_city": "",
      "artist_state": ""
   }
  ```

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    {
      "UID":"100934",
      "title":"Sulphur Souls",
      "artist":"Marduk",
      "album":"Opus Nocturne",
      "year":"1994",
      "track_number":"2",
      "genre":"Black Metal",
      "band":null,
      "length":null,
      "publisher":null,
      "bpm":null,
      "feat":null,
      "cover_path":"\/var\/www\/html\/LOE\/Music\/Marduk\/Opus Nocturne (1994)\/cover.jpg",
      "file_path":"\/var\/www\/html\/LOE\/Music\/Marduk\/Opus Nocturne (1994)\/02. Sulphur Souls.mp3",
      "play_count":"0",
      "last_play":null,
      "created_date":"2020-05-05 15:34:41",
      "artist_country":null,
      "rating":null,
      "artist_city":null,
      "artist_state":null
    }
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
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
