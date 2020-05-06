**Get Total number of anime**
----
  Returns json object representing total number of anime.

* **URL**

  /anime/count/

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
    {
        "count": "1477"
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
      url: "/anime/count",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
