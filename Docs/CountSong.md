**Get Total number of songs**
----
  Returns json object representing total number of songs.

* **URL**

  /song/count/

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
        "count": "31503"
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
      url: "/song/count",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
