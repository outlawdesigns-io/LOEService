**Browse Song**
----
  Returns json array of strings representing distinct values for a given song property.

* **URL**

  /song/browse/:key/

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
        "Sweden",
        null,
        "Italy",
        "Canada",
        "United States",
        "Germany",
        "Argentina",
        "Belgium",
        "International",
    ....]    
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
      url: "/song/browse/artist_country/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
