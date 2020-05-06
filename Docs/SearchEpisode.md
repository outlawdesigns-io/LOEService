**Search Episode**
----
  Returns json array of episodes matching given search parameters.

* **URL**

  /episode/search/:key/:value

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
            "UID": "46",
            "title": "Batman: Mask of the Phantasm",
            "relyear": "1993",
            "genre": "Animation",
            "genre2": "Action",
            "genre3": "Comic Book",
            "director": "Eric Radomski",
            "description": "Batman is wrongly implicated in a series of murders of mob bosses actually done by a new vigilante assassin.",
            "run_time": "76",
            "file_path": "/LOE/Video/Movies/Batman - Mask of the Phantasm/movie.mp4",
            "cover_path": "/LOE/Video/Movies/Batman - Mask of the Phantasm/cover.jpg",
            "rating": "PG",
            "user_rating": "",
            "play_count": ""
        },
        {
            "UID": "47",
            "title": "Batman: Mystery of the Batwoman",
            "relyear": "2003",
            "genre": "Animation",
            "genre2": "Action",
            "genre3": "Comic Book",
            "director": "Curt Geda",
            "description": "The Dark Knight must contend with a mysterious female vigilante who emulates him, but to a more ruthless degree.",
            "run_time": "75",
            "file_path": "/LOE/Video/Movies/Batman - Mystery of the Batwoman/movie.mp4",
            "cover_path": "/LOE/Video/Movies/Batman - Mystery of the Batwoman/cover.jpg",
            "rating": "PG",
            "user_rating": "",
            "play_count": ""
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
      url: "/episode/search/show_title/batman",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
