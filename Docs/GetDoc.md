**Get Doc**
----
  Returns json data about a single document.

* **URL**

  /doc/:UID

* **Method:**

  `GET`

*  **URL Params**

   **Required:**

   `UID=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    {
        "UID": "443",
        "title": "The Real World",
        "subtitle": "An Introduction To Sociology",
        "author": "",
        "pub_date": "0000-00-00",
        "pub_type": "",
        "created_date": "2017-08-12",
        "category": "sociology",
        "access_level": "0",
        "file_path": "/LOE/Documents/sociology/the_real_world-an_introduction_to_sociology.pdf",
        "tags": ""
    }
    ```

* **Error Response:**

  * **Code:** 200 <br />
    **Content:** `{ error : "Invalid UID" }`

  OR

  * **Code:** 200 <br />
    **Content:** `{ error : "Access Denied. No Token Present." }`

    OR

    * **Code:** 200 <br />
      **Content:** `{ error : "Access Denied. Invalid Token." }`

* **Sample Call:**

  ```javascript
    $.ajax({
      url: "/doc/443",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
