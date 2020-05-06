**Get All Movies**
----
  Returns json array of all movies.

* **URL**

  /movie/

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
            "UID": "1626",
            "title": "Blue Crush",
            "relyear": "2002",
            "genre": "Drama",
            "genre2": "Romance",
            "genre3": "Sports",
            "director": "John Stockwell",
            "description": "As a hard-core surfer girl prepares for a big competition, she finds herself falling for a football player.",
            "run_time": "104",
            "file_path": "/LOE/Video/Movies/Blue Crush/movie.mp4",
            "cover_path": "/LOE/Video/Movies/Blue Crush/cover.jpg",
            "rating": "PG-13",
            "user_rating": "",
            "play_count": ""
        },
        {
            "UID": "1625",
            "title": "Theres Something About Mary",
            "relyear": "1998",
            "genre": "Comedy",
            "genre2": " Romance",
            "genre3": "N/A",
            "director": "Bobby Farrelly, Peter Farrelly",
            "description": "A man gets a chance to meet up with his dream girl from high school, even though his date with her back then was a complete disaster.",
            "run_time": "119",
            "file_path": "/LOE/Video/Movies/Theres Something About Mary/movie.mp4",
            "cover_path": "/LOE/Video/Movies/Theres Something About Mary/cover.jpg",
            "rating": "R",
            "user_rating": "",
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
      url: "/movie/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
