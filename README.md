
# Library of Everything REST API

## Preamble

The LOE API provides programmatic access to [LOE Server](https://github.com/outlawdesigns-io/LOEServer) models and services by remote clients. This service can be used to build reports or client applications in any language that supports making http calls.

## Meta

### Security

This API is accessible only by registered users of [outlawdesigns.io](https://outlawdesigns.io) who present a valid authorization token.
Authorization tokens should be presented as a value of the `auth_token` header.

#### Sample Call
```
curl --location --request GET 'https://api.outlawdesigns.io:9669/song/recent/10' \
--header 'auth_token: YOUR_TOKEN' \
```

### Reporting performance or availability problems

Report performance/availability at our [support site](mailto:j.watson@outlawdesigns.io).

### Reporting bugs, requesting features

Please report bugs with the API or the documentation on our [issue tracker](https://github.com/outlawdesigns-io/LOEService/issues).

## Endpoints

### song/

Returns either a single JSON encoded object or an array of JSON encoded objects existing within the `LOE\Music` namespace.
* [BrowseSong](./Docs/BrowseSong.md)
* [CountSong](./Docs/CountSong.md)
* [CreateSongRating](./Docs/CreateSongRating.md)
* [CreateSong](./Docs/CreateSong.md)
* [CreateSongPlayList](./Docs/CreateSongPlayList.md)
* [CreateSongRating](./Docs/CreateSongRating.md)
* [GetAllSongs](./Docs/GetAllSongs.md)
* [GetSong](./Docs/GetSong.md)
* [GetSongPlayList](./Docs/GetSongPlayList.md)
* [GetSongRating](./Docs/GetSongRating.md)
* [GroupSong](./Docs/GroupSong.md)
* [RecentSongs](./Docs/RecentSongs.md)
* [SearchSong](./Docs/SearchSong.md)



### movie/

Returns either a single JSON encoded object or an array of JSON encoded objects existing within the `LOE\Movie` namespace.

* [BrowseMovie](./Docs/BrowseMovie.md)
* [CountMovie](./Docs/CountMovie.md)
* [CreateMovieRating](./Docs/CreateMovieRating.md)
* [CreateMovie](./Docs/CreateMovie.md)
* [CreateMoviePlayList](./Docs/CreateMoviePlayList.md)
* [CreateMovieRating](./Docs/CreateMovieRating.md)
* [GetAllMovies](./Docs/GetAllMovies.md)
* [GetMovie](./Docs/GetMovie.md)
* [GetMoviePlayList](./Docs/GetMoviePlayList.md)
* [GetMovieRating](./Docs/GetMovieRating.md)
* [GroupMovie](./Docs/GroupMovie.md)
* [RecentMovies](./Docs/RecentMovies.md)
* [SearchMovie](./Docs/SearchMovie.md)

### episode/

Returns either a single JSON encoded object or an array of JSON encoded objects existing within the `LOE\Tv` namespace.

* [BrowseEpisode](./Docs/BrowseEpisode.md)
* [CountEpisode](./Docs/CountEpisode.md)
* [CreateEpisodeRating](./Docs/CreateEpisodeRating.md)
* [CreateEpisode](./Docs/CreateEpisode.md)
* [CreateEpisodePlayList](./Docs/CreateEpisodePlayList.md)
* [CreateEpisodeRating](./Docs/CreateEpisodeRating.md)
* [GetAllEpisodes](./Docs/GetAllEpisodes.md)
* [GetEpisode](./Docs/GetEpisode.md)
* [GetEpisodePlayList](./Docs/GetEpisodePlayList.md)
* [GetEpisodeeRating](./Docs/GetEpisodeRating.md)
* [GroupEpisode](./Docs/GroupEpisode.md)
* [RecentEpisode](./Docs/RecentEpisodes.md)
* [SearchEpisode](./Docs/SearchEpisode.md)

### anime/

Returns either a single JSON encoded object or an array of JSON encoded objects existing within the `LOE\Anime` namespace.

* [BrowseAnime](./Docs/BrowseAnime.md)
* [CountAnime](./Docs/CountAnime.md)
* [CreateAnimeRating](./Docs/CreateAnimeRating.md)
* [CreateAnime](./Docs/CreateAnime.md)
* [CreateAnimePlayList](./Docs/CreateAnimePlayList.md)
* [CreateAnimeRating](./Docs/CreateAnimeRating.md)
* [GetAllAnime](./Docs/GetAllAnime.md)
* [GetAnime](./Docs/GetAnime.md)
* [GetAnimePlayList](./Docs/GetAnimePlayList.md)
* [GetAnimeRating](./Docs/GetAnimeRating.md)
* [GroupAnime](./Docs/GroupAnime.md)
* [RecentAnime](./Docs/RecentAnime.md)
* [SearchAnime](./Docs/SearchAnime.md)

### doc/

Returns either a single JSON encoded object or an array of JSON encoded objects existing within the `LOE\Doc` namespace.

* [BrowseDoc](./Docs/BrowseDoc.md)
* [CountDoc](./Docs/CountDoc.md)
* [CreateDocRating](./Docs/CreateDocRating.md)
* [CreateDoc](./Docs/CreateDoc.md)
* [CreateDocPlayList](./Docs/CreateDocPlayList.md)
* [CreateDocRating](./Docs/CreateDocRating.md)
* [GetAllDocs](./Docs/GetAllDocs.md)
* [GetDoc](./Docs/GetDoc.md)
* [GetDocPlayList](./Docs/GetDocPlayList.md)
* [GetDocRating](./Docs/GetDocRating.md)
* [GroupDoc](./Docs/GroupDoc.md)
* [RecentDoc](./Docs/RecentDoc.md)
* [SearchDoc](./Docs/SearchDoc.md)

### share/

Some information about class. Maybe A Linke To LOE Server documentation on Class.
list of links to methods
