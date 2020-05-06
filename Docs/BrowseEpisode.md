**Browse Episode**
----
  Returns json array of strings representing distinct values for a given episode property.

* **URL**

  /episode/browse/:key/

* **Method:**

  `GET`

*  **URL Params**

   **Required:**

   `key=[string] -- The field to browse on`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    [
        "Action",
        "Animation",
        "Cartoons",
        "Comedy",
        "Documentary",
        "Drama",
        "Reality",
        "Sci-Fi"
    ]
    ```

* **Error Response:**

  * **Code:** 200 <br />
    **Content:** `{ error : "Unknown column 'garbage' in 'where clause'" }`

  OR

  * **Code:** 200 <br />
    **Content:** `{ error : "Access Denied. No Token Present." }`

    OR

    * **Code:** 200 <br />
      **Content:** `{ error : "Access Denied. Invalid Token." }`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/episode/browse/genre/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
