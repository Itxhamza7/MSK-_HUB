<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Albums & Playlists</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .search-section {
            padding: 20px 0;
            background-color: #007bff;
            color: white;
        }
        .search-section input {
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 5px;
            border: none;
        }
        .explore-section {
            padding: 50px 0;
        }
        .explore-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
        }
        .album-card, .playlist-card, .song-card {
            transition: transform 0.3s;
            height: 400px;
            width: 100%;
        }
        .album-card:hover, .playlist-card:hover, .song-card:hover {
            transform: translateY(-10px);
        }
        .playlist-section, .song-section {
            padding: 50px 0;
        }
    </style>
    <script>
        function searchSongs() {
            // Get the input value
            let input = document.getElementById('songSearch').value.toLowerCase();
            let songCards = document.getElementsByClassName('song-card');

            // Loop through the song cards and hide those that don't match the search query
            for (let i = 0; i < songCards.length; i++) {
                let title = songCards[i].getElementsByClassName('card-title')[0].innerText.toLowerCase();
                if (title.includes(input)) {
                    songCards[i].style.display = "block";
                } else {
                    songCards[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
    <!-- Search Section -->
    <div class="search-section text-center">
        <div class="container">
            <h2>Search for Songs</h2>
            <input type="text" id="songSearch" onkeyup="searchSongs()" placeholder="Enter song title or keyword">
        </div>
    </div>

    <!-- Explore Albums Section  -->
    <div class="explore-section">
        <div class="container">
            <h2>Explore Albums</h2>
            <div class="row">
                <?php
                $albums = [
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/6xoB4ZiKKn0?si=ZRqNHuwUyWQkIdOO" allowfullscreen></iframe>', 'title' => 'Last Ride', 'artist' => 'Sidhu Mose Wala'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/IYK34I7y5O8?si=vcsuzH_0zjEefGtN" allowfullscreen></iframe>', 'title' => 'Ve Kamlya', 'artist' => 'Arijit Singh'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/ijE2MMtzkHg?si=8pTgTVF4unbsjsys" allowfullscreen></iframe>', 'title' => 'Afasne', 'artist' => 'Young stuners'],
                    // Additional albums...
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/4tywp83zkmk?si=rt-cjZKnkY2wyKW5" allowfullscreen></iframe>', 'title' => 'Cheques', 'artist' => 'Shubh'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/vsWxs1tuwDk?si=9ek47D93qN0hN9l3" allowfullscreen></iframe>', 'title' => 'Winning  Speach', 'artist' => 'Karan Aujla'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/Sc0J_JOER_Y?si=eQPeNcQbAcGbX9vY" allowfullscreen></iframe>', 'title' => 'Tera Yaar Hoon Meain', 'artist' => 'Arigit singh'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/Y5HIqjf3rek?si=Dic8fagtL24zJTpW" allowfullscreen></iframe>', 'title' => 'Safty Of', 'artist' => 'Shubh'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/F9gq_0HXoRI?si=mXWJTUa_f5he3V0R" allowfullscreen></iframe>', 'title' => '410', 'artist' => 'Sidhu Mose Wala'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/sVPKUMyOmg0?si=MDWh_lVHjy5LiMW6" allowfullscreen></iframe>', 'title' => 'O Mahi', 'artist' => 'Arjit sigh'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/aFWDOFg7X2A?si=gxulbTWlMNnXvfUQ" allowfullscreen></iframe>', 'title' => 'On Top', 'artist' => 'karan aujla'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/31SGauVu1JU?si=ygaW7Mbhvp3wweCX" allowfullscreen></iframe>', 'title' => 'Out Law', 'artist' => 'Sidhu Mose wala'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/jIQ0Dx-4peE?si=Ps1V1oxxBjs2tPuL" allowfullscreen></iframe>', 'title' => 'Guman', 'artist' => 'Talha anjum'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/YPPEZiDF4Xw?si=XsvtImWwBwABcPaw" allowfullscreen></iframe>', 'title' => 'G63', 'artist' => 'Sidhu Mose Wala'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/jjiC7PfoIaY?si=Z-wa7WLZS5iQTaQy" allowfullscreen></iframe>', 'title' => 'Hood Antham', 'artist' => 'Shubh'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/djBQ-ertWsM?si=Yr7z3BYwrs2K5xzi" allowfullscreen></iframe>', 'title' => 'Desi klakar', 'artist' => 'Honey singh'],
                ];

                foreach ($albums as $album) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card album-card">';
                    
                    // Display YouTube iframe directly if it's a YouTube video
                    if (strpos($album['video'], 'iframe') !== false) {
                        echo $album['video'];
                    } else {
                        echo '<img src="' . $album['video'] . '" class="card-img-top" alt="' . $album['title'] . '">';
                    }

                    echo '
                            <div class="card-body">
                                <h5 class="card-title">' . $album['title'] . '</h5>
                                <p class="card-text">By ' . $album['artist'] . '</p>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Playlist Section -->
    <div class="playlist-section">
        <div class="container">
            <h2>Explore Playlists</h2>
            <div class="row">
                <?php
                $playlists = [
                    ['video' => 'Explore_playList/img/chill.jpg', 'title' => 'Chill Vibes', 'description' => 'Relax and unwind with these chill tracks.'],
                    // Add other playlists here...
                    ['video' => 'Explore_playList/img/2.jpg', 'title' => 'Gangster Vibes', 'description' => 'This playList exude street power.'],
                    ['video' => 'Explore_playList/img/wedding.jpg', 'title' => 'Wedding Vibes', 'description' => 'Romantic tunes for a perfect wedding.'],
                    ['video' => 'Explore_playList/img/party.jpg', 'title' => 'Party Time', 'description' => 'High-energy beats for a wild night!'],
                    ['video' => 'Explore_playList/img/love.jpg', 'title' => 'Love Vibes', 'description' => 'Romantic tunes for heartfelt moments.'],
                    ['video' => 'Explore_playList/img/sad.jpg', 'title' => 'Sad Vibes', 'description' => 'Melancholic tunes for quiet reflection.'],
                   
                    
                ];

                foreach ($playlists as $playlist) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card playlist-card">
                            <img src="' . $playlist['video'] . '" class="card-img-top" alt="' . $playlist['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $playlist['title'] . '</h5>
                                <p class="card-text">' . $playlist['description'] . '</p>
                                <a href="#" class="btn btn-primary">View Playlist</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Song Section -->
    <div class="song-section">
        <div class="container">
            <h2>Explore Songs</h2>
            <div class="row">
                <?php
                $songs = [
                    ['title' => 'Song 1', 'artist' => 'Artist 1'],
                    ['title' => 'Song 2', 'artist' => 'Artist 2'],
                    ['title' => 'Song 3', 'artist' => 'Artist 3'],
                    ['title' => 'Song 4', 'artist' => 'Artist 4'],
                    ['title' => 'Song 5', 'artist' => 'Artist 5'],
                    // Add more songs here...
                ];

                foreach ($songs as $song) {
                    echo '
                    <div class="col-md-4 mb-4 song-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">' . $song['title'] . '</h5>
                                <p class="card-text">By ' . $song['artist'] . '</p>
                                <a href="#" class="btn btn-primary">Play Song</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include "footer.php";
    ?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
