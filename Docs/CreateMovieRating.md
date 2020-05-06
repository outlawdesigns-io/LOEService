**Create Movie Rating**
----
creates a rating for a movie and returns json data about newly created rating.

* **URL**

  /movie/rate/:UID

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
        "UID": "454",
        "movieId": "544",
        "rating": "5",
        "userId": "2",
        "created_date": "2020-05-06 09:57:42"
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
      url: "/movie/rate/544",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
