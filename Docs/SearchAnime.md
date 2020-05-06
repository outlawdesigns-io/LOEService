**Search Anime**
----
  Returns json array of animes matching given search parameters.

* **URL**

  /anime/search/:key/:value

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
            "UID": "966",
            "show_title": "Samurai 7",
            "japanese_title": "Samurai 7",
            "type": "TV",
            "season": "0",
            "ep_number": "Ep01",
            "ep_title": "The Master",
            "run_time": "0",
            "rating": "N/A",
            "genre": "N/A",
            "genre2": "N/A",
            "genre3": "N/A",
            "description": "In the far distant future, on a planet that might have been called \"earth\", there was a war between samurai who mechanized their bodies. After the long war, people enjoyed a modest peace.\n\nFacing starvation and abductions at the hands of fearsom",
            "release_date": "2004-06-12",
            "cover_path": "/LOE/Video/Anime/Samurai 7/cover.jpg",
            "file_path": "/LOE/Video/Anime/Samurai 7/Ep01 - The Master.mkv"
        },
        {
            "UID": "967",
            "show_title": "Samurai 7",
            "japanese_title": "Samurai 7",
            "type": "TV",
            "season": "0",
            "ep_number": "Ep02",
            "ep_title": "The Pupil",
            "run_time": "0",
            "rating": "N/A",
            "genre": "N/A",
            "genre2": "N/A",
            "genre3": "N/A",
            "description": "In the far distant future, on a planet that might have been called \"earth\", there was a war between samurai who mechanized their bodies. After the long war, people enjoyed a modest peace.\n\nFacing starvation and abductions at the hands of fearsom",
            "release_date": "2004-06-12",
            "cover_path": "/LOE/Video/Anime/Samurai 7/cover.jpg",
            "file_path": "/LOE/Video/Anime/Samurai 7/Ep02 - The Pupil.mkv"
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
      url: "/anime/search/show_title/samurai",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
