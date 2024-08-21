<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chill Vibes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
<body>
<!-- Explore Albums Section  -->
<div class="explore-section">
        <div class="container">
            <h2>Explore PlayList</h2>
            <div class="row">
                <?php
                $albums = [
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/OLphjhpcMpM?si=d6Od4dtwiy-ax2Rr" allowfullscreen></iframe>', 'title' => 'Mash UP', 'artist' => 'Meldify'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/NeXbmEnpSz0?si=VxpRYwkEqk0xIGuf" allowfullscreen></iframe>', 'title' => 'Zara Zara', 'artist' => 'Unkown'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/e3DOI2YiaNk?si=FKBcbweUjZM0jQ0S" allowfullscreen></iframe>', 'title' => 'Mash UP', 'artist' => 'Argit singh'],
                    // Additional albums...
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/ZXEC0IrOWGk?si=MsTSlCAbLwQ2oPyF" allowfullscreen></iframe>', 'title' => 'Lofi Mix', 'artist' => 'Arigit singh & Atif Aslam'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/1IUm5j7kPN8?si=jbRlrxFFYx81-Mvy" allowfullscreen></iframe>', 'title' => 'Punjabi Mashup', 'artist' => 'Unkown'],
                    ['video' => '<iframe width="350px" height="300px" src="https://www.youtube.com/embed/Sc0J_JOER_Y?si=eQPeNcQbAcGbX9vY" allowfullscreen></iframe>', 'title' => 'Alone night Mashup', 'artist' => 'Animal'],
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
    <?php
    include "footer.php";
    ?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
