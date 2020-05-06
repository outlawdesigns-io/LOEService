**Search Doc**
----
  Returns json array of docs matching given search parameters.

* **URL**

  /doc/search/:key/:value

* **Method:**

  `GET`

*  **URL Params**

   **Required:**

   `key=[string] -- The field to search on`
   `value=[integer,boolean,string,date] -- The value to search by`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**
    ```
    [
        {
            "UID": "18",
            "title": "CompTIA Aplus Certification All",
            "subtitle": "In",
            "author": "",
            "pub_date": "0000-00-00",
            "pub_type": "",
            "created_date": "2017-08-12",
            "category": "computing",
            "access_level": "0",
            "file_path": "/LOE/Documents/computing/certifications/CompTIA_Aplus_Certification_All-in-One_Exam_Guide_8th_Ed_Exams_220-801_and_220-802.pdf",
            "tags": ""
        },
        {
            "UID": "19",
            "title": "Securityplus Study Guide",
            "subtitle": "",
            "author": "",
            "pub_date": "0000-00-00",
            "pub_type": "",
            "created_date": "2017-08-12",
            "category": "computing",
            "access_level": "0",
            "file_path": "/LOE/Documents/computing/certifications/Securityplus_study_guide.pdf",
            "tags": ""
        },
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
      url: "/doc/search/category/computing",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
