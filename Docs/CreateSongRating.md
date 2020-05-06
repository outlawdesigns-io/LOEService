**Create Song Rating**
----
creates a rating for a song and returns json data about newly created rating.

* **URL**

  /song/rate/:UID

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
        "songId": "96650",
        "rating": "5",
        "userId": "2",
        "created_date": "2020-05-06 10:05:04"
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
      url: "/song/rate/96650",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
