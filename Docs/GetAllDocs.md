**Get All Docs**
----
  Returns json array of all documents.

* **URL**

  /doc/

* **Method:**

  `GET`

*  **URL Params**

  None

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    [
        {
            "UID": "484",
            "title": "Es311c",
            "subtitle": "Sh",
            "author": "",
            "pub_date": "0000-00-00",
            "pub_type": "",
            "created_date": "2017-08-12",
            "category": "toshiba_manuals",
            "access_level": "0",
            "file_path": "/LOE/Documents/toshiba_manuals/es311c-sh-v03.pdf",
            "tags": ""
        },
        {
            "UID": "483",
            "title": "MR",
            "subtitle": "3006 SM",
            "author": "",
            "pub_date": "0000-00-00",
            "pub_type": "",
            "created_date": "2017-08-12",
            "category": "toshiba_manuals",
            "access_level": "0",
            "file_path": "/LOE/Documents/toshiba_manuals/MR-3006_SM.pdf",
            "tags": ""
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
      url: "/doc/",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
