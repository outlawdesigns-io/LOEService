**Create Episode Rating**
----
creates a rating for an episode and returns json data about newly created rating.

* **URL**

  /episode/rate/:UID

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
        "episodeId": "9214",
        "rating": "5",
        "userId": "2",
        "created_date": "2020-05-06 10:11:26"
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
      url: "/episode/rate/9214",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
