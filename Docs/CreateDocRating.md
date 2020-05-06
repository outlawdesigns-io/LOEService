**Create Doc Rating**
----
creates a rating for a doc and returns json data about newly created rating.

* **URL**

  /doc/rate/:UID

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
        "docId": "287",
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
      url: "/doc/rate/287",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
