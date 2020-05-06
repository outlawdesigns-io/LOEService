**Group Anime**
----
  Returns json array of distinct values for ``key`` and the number of records associated with that key.

* **URL**

  /anime/group/:key

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
            "type": "Movie",
            "count": "19"
        },
        {
            "type": "OVA",
            "count": "40"
        },
        {
            "type": "Special",
            "count": "27"
        },
        {
            "type": "TV",
            "count": "1391"
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
      url: "/anime/group/type",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
