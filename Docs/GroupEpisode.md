**Group Episode**
----
  Returns json array of distinct values for ``key`` and the number of records associated with that key.

* **URL**

  /episode/group/:key

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
            "genre": "Action",
            "count": "345"
        },
        {
            "genre": "Animation",
            "count": "748"
        },
        {
            "genre": "Cartoons",
            "count": "2381"
        },
        {
            "genre": "Comedy",
            "count": "2759"
        },
        {
            "genre": "Documentary",
            "count": "201"
        },
        {
            "genre": "Drama",
            "count": "713"
        },
        {
            "genre": "Reality",
            "count": "273"
        },
        {
            "genre": "Sci-Fi",
            "count": "189"
        }
    ]
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
      url: "/episode/group/genre",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
