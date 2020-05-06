**Get Anime**
----
  Returns json data about a single anime.

* **URL**

  /anime/:UID

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
        "UID": "105",
        "show_title": "Chrome Shelled Regios",
        "japanese_title": "Chrome Shelled Regios",
        "type": "TV",
        "season": "0",
        "ep_number": "Ep15",
        "ep_title": "Feelings That Are Not Received",
        "run_time": "0",
        "rating": "N/A",
        "genre": "N/A",
        "genre2": "N/A",
        "genre3": "N/A",
        "description": "In a post-apocalyptic world overrun with mutated beasts called Limbeekoon or Filth Monsters, humanity is forced to live in large mobile cities called Regios and learn to use special weapons called Dite, by harnessing the power of Kei to defend themselves.",
        "release_date": "2009-01-11",
        "cover_path": "/LOE/Video/Anime/Chrome Shelled Regios/cover.jpg",
        "file_path": "/LOE/Video/Anime/Chrome Shelled Regios/Ep15 - Feelings That Are Not Received.mkv"
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
      url: "/anime/105",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
