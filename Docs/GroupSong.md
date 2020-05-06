**Group Song**
----
  Returns json array of distinct values for ``key`` and the number of records associated with that key.

* **URL**

  /song/group/:key

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
            "genre": "Ambient Black Metal",
            "count": "35"
        },
        {
            "genre": "Atmospheric Black Metal",
            "count": "26"
        },
        {
            "genre": "Atmospheric Death.Doom Metal",
            "count": "8"
        },
        {
            "genre": "Atmospheric Doom.Progressive Death Metal",
            "count": "12"
        },
        {
            "genre": "Atmospheric Post-Black Metal",
            "count": "7"
        },
        {
            "genre": "Atmospheric.Depressive Black Metal",
            "count": "12"
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
      url: "/song/group/genre",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
