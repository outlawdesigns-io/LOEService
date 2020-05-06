**Get Movie**
----
  Returns json data about a single movie.

* **URL**

  /movie/:UID

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
        "UID": "1296",
        "title": "Close Encounters of the Third Kind",
        "relyear": "1977",
        "genre": "Sci-Fi",
        "genre2": "Drama",
        "genre3": "N/A",
        "director": "Steven Spielberg",
        "description": "After an accidental encounter with otherworldly vessels, an ordinary man follows a series of psychic clues to the first scheduled meeting between representatives of Earth and visitors from the cosmos.",
        "run_time": "138",
        "file_path": "/LOE/Video/Movies/Close Encounters of the Third Kind/movie.mp4",
        "cover_path": "/LOE/Video/Movies/Close Encounters of the Third Kind/cover.jpg",
        "rating": "PG",
        "user_rating": "",
        "play_count": ""
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
      url: "/movie/99933",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
