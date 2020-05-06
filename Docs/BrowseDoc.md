**Browse Doc**
----
  Returns json array of strings representing distinct values for a given document property.

* **URL**

  /doc/browse/:key/

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
        "LOE_MX",
        "computing",
        "conspiracy",
        "fiction",
        "gameGuides",
        "history",
        "music",
        "philosophy",
        "psychology",
        "reference",
        "skills",
        "sociology",
        "textScraps",
        "theology",
        "toshiba_manuals"
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
      url: "/doc/browse/category/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
