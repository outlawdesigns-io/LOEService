**Group Movie**
----
  Returns json array of distinct values for ``key`` and the number of records associated with that key.

* **URL**

  /movie/group/:key

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
            "count": "398"
        },
        {
            "genre": "Adventure",
            "count": "77"
        },
        {
            "genre": "Animation",
            "count": "183"
        },
        {
            "genre": "Biography",
            "count": "24"
        },
        {
            "genre": "Comedy",
            "count": "386"
        },
        {
            "genre": "Crime",
            "count": "59"
        },
    ....]    
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
      url: "/movie/group/genre",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
