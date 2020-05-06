**Search Song**
----
  Returns json array of songs matching given search parameters.

* **URL**

  /song/search/:key/:value

* **Method:**

  `GET`

*  **URL Params**

   **Required:**

   `key=[string] -- The field to search on`
   `value=[integer,boolean,string,date] -- The value to search by`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    [
        {
            "UID": "67665",
            "title": "Flesh Storm",
            "artist": "Slayer",
            "album": "Christ Illusion",
            "year": "2006",
            "track_number": "1",
            "genre": "Thrash Metal",
            "band": "Slayer",
            "length": "254866",
            "publisher": "Sony Music Distribution",
            "bpm": "139.178",
            "feat": "N/A",
            "cover_path": "/LOE/Music/Slayer/Christ Illusion (2006)/cover.jpg",
            "file_path": "/LOE/Music/Slayer/Christ Illusion (2006)/01 Flesh Storm.mp3",
            "play_count": "2",
            "last_play": "",
            "created_date": "2016-11-28 03:50:53",
            "artist_country": "",
            "rating": "",
            "artist_city": "",
            "artist_state": ""
        },
        {
            "UID": "67666",
            "title": "Catalyst",
            "artist": "Slayer",
            "album": "Christ Illusion",
            "year": "2006",
            "track_number": "2",
            "genre": "Thrash Metal",
            "band": "Slayer",
            "length": "187560",
            "publisher": "Sony Music Distribution",
            "bpm": "136.001",
            "feat": "N/A",
            "cover_path": "/LOE/Music/Slayer/Christ Illusion (2006)/cover.jpg",
            "file_path": "/LOE/Music/Slayer/Christ Illusion (2006)/02 Catalyst.mp3",
            "play_count": "0",
            "last_play": "",
            "created_date": "2016-11-28 03:50:53",
            "artist_country": "",
            "rating": "",
            "artist_city": "",
            "artist_state": ""
        },
    ....]    
    ```

* **Error Response:**

  * **Code:** 200 <br />
    **Content:** `{ error : "Unknown column 'garbage' in 'where clause'" }`

  OR

  * **Code:** 200 <br />
    **Content:** `{ error : "Access Denied. No Token Present." }`

    OR

    * **Code:** 200 <br />
      **Content:** `{ error : "Access Denied. Invalid Token." }`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/song/search/artist/slayer",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
