**Get Song Rating**
----
  Returns json data about a single song rating.

* **URL**

  /song/rate/:UID

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
        "UID": "453",
        "songId": "91991",
        "rating": "5",
        "userId": "2",
        "created_date": "2020-04-25 10:18:08"
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
      url: "/song/rate/453",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
