**Get Movie Rating**
----
  Returns json data about a single movie rating.

* **URL**

  /movie/rate/:UID

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
        "UID": "454",
        "movieId": "544",
        "rating": "5",
        "userId": "2",
        "created_date": "2020-05-06 09:57:42"
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
      url: "/movie/rate/454",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
