**Create Song Playlist**
----
creates a playlist of songs and returns json data about newly created list.

* **URL**

  /song/list/

* **Method:**

  `POST`

*  **URL Params**

  None

* **Data Params**

`{"SongIds":[99730,99630,100549]}`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    {
        "UID": "1",
        "UserId": "2",
        "Label": "krome_antihydropic",
        "SongIds": [
            "99730",
            "99630",
            "100549"
        ],
        "created_date": "2020-05-06 10:29:36"
    }
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
      url: "/song/rate/96650",
      dataType: "json",
      type : "POST",
      success : function(r) {
        console.log(r);
      }
    });
  ```
