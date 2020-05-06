**Browse Anime**
----
  Returns json array of strings representing distinct values for a given anime property.

* **URL**

  /anime/browse/:key/

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
        "AKIRA",
        "",
        "Basilisk",
        "Berserk",
        "Big Wars",
        "Blade of the Immortal",
        "Burst Angel",
        "Chrome Shelled Regios",
        "Chrono Crusade",
        "Cowboy Bebop",
        "Cyber City",
        "Cybernetics Guardian",
        "Desert Punk",
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
      url: "/anime/browse/show_title/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
