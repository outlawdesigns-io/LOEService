**Get Holding Bay Episodes**
----
  Returns json object of episodes in the Holding Bay awaiting processing.

* **URL**

  /holdingbay/tv

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
    {
        "Agent Carter": {
            "Season 1": [
                {
                    "UID": null,
                    "show_title": "Agent Carter",
                    "genre": "Action",
                    "season_number": 1,
                    "season_year": "",
                    "ep_number": "S01E01",
                    "runtime": "",
                    "cover_path": "",
                    "file_path": "/LOE/holding_bay/tv/Action/Agent Carter/Season 1/Marvels.Agent.Carter.S01E01.HDTV.x264-KILLERS.mp4",
                    "ep_title": "Marvels.Agent.Carter.S01E01.HDTV.x264-KILLERS.mp4",
                    "rating": "",
                    "play_count": ""
                },
                {
                    "UID": 1,
                    "show_title": "Agent Carter",
                    "genre": "Action",
                    "season_number": 1,
                    "season_year": "",
                    "ep_number": "S01E02",
                    "runtime": "",
                    "cover_path": "",
                    "file_path": "/LOE/holding_bay/tv/Action/Agent Carter/Season 1/Marvels.Agent.Carter.S01E02.HDTV.x264-KILLERS.mp4",
                    "ep_title": "Marvels.Agent.Carter.S01E02.HDTV.x264-KILLERS.mp4",
                    "rating": "",
                    "play_count": ""
                }
            ]
        },
        "Alias S01-S05 (2001-)": {
            "Season ": [
                {
                    "UID": 2,
                    "show_title": "Alias S01-S05 (2001-)",
                    "genre": "Action",
                    "season_number": "",
                    "season_year": "",
                    "ep_number": "S01E01",
                    "runtime": "",
                    "cover_path": "",
                    "file_path": "/LOE/holding_bay/tv/Action/Alias S01-S05 (2001-)/Alias S01 (360p re-webrip)/Alias S01E01 Truth Be Told.mp4",
                    "ep_title": "Alias S01E01 Truth Be Told.mp4",
                    "rating": "",
                    "play_count": ""
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
      url: "/holdingbay/tv",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
