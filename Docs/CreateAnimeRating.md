**Create Anime Rating**
----
creates a rating for an anime and returns json data about newly created rating.

* **URL**

  /anime/rate/:UID

* **Method:**

  `POST`

*  **URL Params**

  **Required:**

  `UID=[integer]`

* **Data Params**

  ```
  {
    "rating":5
  }
  ```

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
    **Content:** `{ error : "Access Denied. No Token Present." }`

    OR

    * **Code:** 200 <br />
      **Content:** `{ error : "Access Denied. Invalid Token." }`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/anime/rate/1",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
