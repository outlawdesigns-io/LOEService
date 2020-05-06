**Get Anime Rating**
----
  Returns json data about a single anime rating.

* **URL**

  /anime/rate/:UID

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
        "UID": "1",
        "animeId": "1",
        "rating": "5",
        "userId": "2",
        "created_date": "2020-05-06 10:19:06"
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
      url: "/anime/rate/1",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
