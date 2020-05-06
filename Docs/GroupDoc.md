**Group Doc**
----
  Returns json array of distinct values for ``key`` and the number of records associated with that key.

* **URL**

  /doc/group/:key

* **Method:**

  `GET`

*  **URL Params**

   **Required:**

   ``key=[string]``

   **Optional:**

   None

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    [
        {
            "category": "computing",
            "count": "288"
        },
        {
            "category": "conspiracy",
            "count": "1"
        },
        {
            "category": "fiction",
            "count": "1"
        },
        {
            "category": "gameGuides",
            "count": "1"
        },
        {
            "category": "history",
            "count": "27"
        },
    ....]
    ```

* **Error Response:**

* **Code:** 200 <br />
  **Content:** `{ error : "Unknown column 'trash' in 'field list'" }`

  OR

  * **Code:** 200 <br />
    **Content:** `{ error : "Access Denied. No Token Present." }`

    OR

    * **Code:** 200 <br />
      **Content:** `{ error : "Access Denied. Invalid Token." }`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/doc/group/category",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
