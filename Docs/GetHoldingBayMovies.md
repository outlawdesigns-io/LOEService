**Get Holding Bay Movies**
----
  Returns json array of movies in the Holding Bay awaiting processing.

* **URL**

  /holdingbay/music

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
            "UID": null,
            "title": "3 from Hell",
            "relyear": "2019",
            "genre": "Horror",
            "genre2": null,
            "genre3": null,
            "director": "Rob Zombie",
            "description": "After barely surviving prison, the demented Firefly clan go on the run, unleashing a whole new wave of murder, madness and mayhem.",
            "run_time": "115 min",
            "file_path": "/LOE/holding_bay/movies/3 From Hell (2019) [BluRay] [1080p] [YTS.LT]/3.From.Hell.2019.1080p.BluRay.x264-[YTS.LT].mp4",
            "cover_path": "https://m.media-amazon.com/images/M/MV5BOWY5NzU5YTEtNTQ5My00Yzk0LTg2M2UtYWU4MjQwY2Y5ZTBmXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg",
            "rating": "R",
            "user_rating": "",
            "play_count": ""
        },
        {
            "UID": null,
            "title": "Bad Boys for Life",
            "relyear": "2020",
            "genre": "Action",
            "genre2": " Comedy",
            "genre3": " Crime",
            "director": "Adil El Arbi, Bilall Fallah",
            "description": "Miami detectives Mike Lowrey and Marcus Burnett must face off against a mother-and-son pair of drug lords who wreak vengeful havoc on their city.",
            "run_time": "124 min",
            "file_path": "/LOE/holding_bay/movies/Bad Boys For Life (2020) [1080p] [WEBRip] [5.1] [YTS.MX]/Bad.Boys.For.Life.2020.1080p.WEBRip.x264.AAC5.1-[YTS.MX].mp4",
            "cover_path": "https://m.media-amazon.com/images/M/MV5BMWU0MGYwZWQtMzcwYS00NWVhLTlkZTAtYWVjOTYwZTBhZTBiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg",
            "rating": "R",
            "user_rating": "",
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
      url: "/holdingbay/movies",
      dataType: "json",
      type : "GET",
      success : function(r) {
        console.log(r);
      }
    });
  ```
