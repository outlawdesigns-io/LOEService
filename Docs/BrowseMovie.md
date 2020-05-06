**Browse Movie**
----
  Returns json array of strings representing distinct values for a given movie property.

* **URL**

  /movie/browse/:key/

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
        "Drama",
        "Mystery",
        "Horror",
        "Comedy",
        "Crime",
        "Sci-Fi",
        "Animation",
        "Documentary",
        "Martial Arts",
        "Fantasy",
        "Adventure",
        "War",
        "Western",
        "Thriller",
        "Music",
        "Family",
        "Biography",
        "Martial-Arts"
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
      url: "/movie/browse/genre/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
