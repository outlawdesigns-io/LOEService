# LOE Service

The LOE Service is a RESTful API to facilitate communication with the [LOE Server](https://github.com/outlawdesigns-io/LOEServer)

## End Points

* movie
* song
* episode
* doc
* anime
* comic
* holdingbay

## Methods

* GET {end_point}/ -- Get all
* GET {end_point}/{ID} -- Get
* POST {end_point}/ -- Create new
* PUT {end_point}/{ID} -- Update
* GET {end_point}/search/{KEY}/{VALUE} -- Search
* GET {end_point}/browse/{KEY} -- Browse / Get Distinct
* GET {end_point}/recent/{NUMBER} -- Get recently created objects, with limit specified by {NUMBER}
* GET {end_point}/scan/{fs || db}/{MSGTO} -- Initiate either a file system or database health check, optionally have report emailed to {MSGTO}
* GET {end_point}/count -- Get the total count of an object
* GET {end_point}/group/{KEY} -- Get the count of a property of an object specified by {KEY}
* GET {end_point}/list/ -- Get all Saved playlist
* POST {end_point}/list/ -- Save a playlist
* GET {end_point}/list/{ID} -- Get a specific saved playlist
* PUT {end_point}/list/{ID} -- Update a playlist
* GET {end_point}/rate/ -- Get all Ratings
* POST {end_point}/rate/{ID} -- Create a rating
* GET {end_point}/rate/{ID} -- Get a specific rating
* GET {end_point}/random/{GENRE}/{NUMBER} -- create a random playlist
