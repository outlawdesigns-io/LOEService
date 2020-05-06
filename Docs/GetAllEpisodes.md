**Get All Episodes**
----
  Returns json array of all episodes.

* **URL**

  /episode/

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
            "UID": "12801",
            "show_title": "Watchmen",
            "genre": "Drama",
            "season_number": "1",
            "season_year": "2019",
            "ep_number": "S01E09",
            "runtime": "55",
            "cover_path": "/LOE/Video/Tv/Drama/Watchmen/covers/S01cover.jpg",
            "file_path": "/LOE/Video/Tv/Drama/Watchmen/Season 1/S01E09 - See How They Fly.mp4",
            "ep_title": "See How They Fly",
            "rating": "",
            "play_count": ""
        },
        {
            "UID": "12800",
            "show_title": "Watchmen",
            "genre": "Drama",
            "season_number": "1",
            "season_year": "2019",
            "ep_number": "S01E08",
            "runtime": "55",
            "cover_path": "/LOE/Video/Tv/Drama/Watchmen/covers/S01cover.jpg",
            "file_path": "/LOE/Video/Tv/Drama/Watchmen/Season 1/S01E08 - A God Walks into Abar.mp4",
            "ep_title": "A God Walks into Abar",
            "rating": "",
            "play_count": ""
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
      url: "/episode/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
