**Get Episode**
----
  Returns json data about a single Tv Episode.

* **URL**

  /episode/:UID

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
      {
          "UID": "10905",
          "show_title": "Parks and Recreation",
          "genre": "Comedy",
          "season_number": "4",
          "season_year": "2011",
          "ep_number": "S04E19",
          "runtime": "22",
          "cover_path": "/LOE/Video/Tv/Comedy/Parks and Recreation/covers/S04cover.jpg",
          "file_path": "/LOE/Video/Tv/Comedy/Parks and Recreation/Season 4/S04E19 - Live Ammo.mp4",
          "ep_title": "Live Ammo",
          "rating": "",
          "play_count": ""
      }
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
      url: "/episode/10905",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
