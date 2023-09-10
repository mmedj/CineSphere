<!DOCTYPE html>
<html lang="en">
<?php
$imgurl_1 = "http://image.tmdb.org/t/p/w500";
$imgurl_2 = "http://image.tmdb.org/t/p/w300";  
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_credits.php";
    include_once "api/api_movie_video_id.php";
    include_once "api/api_keyword.php";
    include_once "api_key.php";

    include_once "api/api_movie_similar.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
  
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .more:last-child {
        display:none !important
      }
      .main-profile .main-info h4 {
        color:#fff;
  margin-bottom: 20px;
}
      </style>
  </head>


<body>

   <!-- leayba d load-->
   <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <script>
        // Select the preloader element
var preloader = document.querySelector('.js-preloader');

// Wait for the page to fully load
window.addEventListener('load', function() {
// Add the 'loaded' class to the preloader element to fade it out
preloader.classList.add('loaded');
});

    </script>
  </div>
<header class="header-area header-sticky">
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a href="index.php" class="logo">

                    <p style="font-size: 2rem;
  color: #fff;
  font-weight: bold;">Cine<span style="color:#770a6b">Sphere.</span></p>
                                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Search End ***** -->
                <div class="search-input">
                <form id="search" action="list.php" method="get">
                        <input type="text" placeholder="Type Something" id='searchText' name="search" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                </div>
                <!-- ***** Search End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                    <li><div class="darkmode">
                        <input type="checkbox" class="checkbox" id="checkbox"  >
                       <label for="checkbox" class="label">
                       <i class="fas fa-moon"></i>
                       <i class='fas fa-sun'></i>
                       <div class='ball'>
                          </label>
                        </div></li>
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="browse2.html">Browse</a></li>
                    <li><a href="details.html">Details</a></li>
                    <li><a href="profile.html">Profile <img src="https://upload.wikimedia.org/wikipedia/en/0/03/Walter_White_S5B.png" alt=""></a></li>
                </ul>   
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
</div>
</header>
<script>
let body=document.querySelector("body")
let checkbox = document.querySelector("input[type='checkbox']");
checkbox.addEventListener("click",function() {
  if (checkbox.checked) {
  body.style.backgroundColor= "white";
    
} else {
  body.style.backgroundColor= "#1f2122";
}


});
 


</script>
<?php
$director = '';
$writer = '';

// Iterate through the cast and crew data to find the director and writer
foreach ($movie_credits->crew as $member) {
  if ($member->department === 'Directing' && $member->job === 'Director') {
    $director = $member->name;
}
if ($member->department === 'Writing' && $member->job === 'Screenplay') {
    $writer = $member->name;
}

}

?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                  <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>"style="border-radius: 23px;">

                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span><?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?></span>
                      <h4><?php echo $movie_id->original_title ?></h4>
                      <p> <?php echo $movie_id->overview ?></p>
                      
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Genres <span><?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name ."&nbsp;". '</span> ';
                }
              ?></span></li>
                      <li>Language <span>English</span></li>
                      <li>Duration <span><?php echo $movie_id->runtime ?> min</span></li>
                      <li>Production <span><?php
$firstProductionCompany = isset($movie_id->production_companies[0]) ? $movie_id->production_companies[0]->name : "No production company available";

echo $firstProductionCompany;

              ?></span></li>
                      <li>IMDb RATING <span><?php $voteAverage = $movie_id->vote_average;
$formattedVoteAverage = number_format($voteAverage, 1); // Format to two decimal places

echo $formattedVoteAverage;
 ?> <i class="fa fa-star"></i></span></li>
                      <li>Director <span><?php echo $director; ?></span></li>
                      <li>Writer <span><?php echo $writer; ?></span></li>

                    </ul>
                  </div>
                </div>
               
                  <div class="row" style="padding-top: 15px;">
                  <?php
          if (isset($data->keywords)) {
            $keywords = $data->keywords;
        
            // Limit to the first 20 keywords
            $limitedKeywords = array_slice($keywords, 0, 10);
        
            // Loop through and display the limited keywords
            foreach ($limitedKeywords as $keyword) {
                echo ' <div class="col-auto" style="padding-bottom: 10px;">';
                echo '   <div style="border: 1px solid #846e6e !important; color:#666; border-radius: 100px; padding: 5px 5px; padding-right: 5px; padding-left: 5px; padding-left: 20px !important; padding-right: 20px !important;">';
                echo $keyword->name . "\n";
                echo '   </div>';
                echo ' </div>';
            }
        } else {
            echo "Failed to retrieve keywords.";
        }
        ?>
        
        
                  </div>
                   
                  
                  
                    <div class="clips">
                
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="heading-section d-flex">
                        <h4 style="padding-right: 70%;"><em>Top</em> Cast :</h4>
                        <button onclick="Show()" id="show" style=" font-size: 16px;
  color: #fff;
  background-color: #9f028d;
  padding: 12px 30px;
  display: inline-block;
  border-radius: 25px;
  font-weight: 400;
  text-transform: capitalize;
  letter-spacing: 0.5px;
  transition: all .3s;
  position: relative;
  overflow: hidden;
  border-left-width: 0px;
  border-left-style: solid;
  border-top-width: 0px;
  border-top-style: solid;
  border-right-width: 0px;
  border-right-style: solid;
  border-bottom-width: 0px;
  border-bottom-style: solid;
  height: 45px;">Show More</button>
                      </div>
                      <div class="row" id="cast-container">
                      
                   
    <?php
    $displayedCount = 0;
    foreach ($movie_credits->cast as $cast_member) {
        if ($displayedCount < 4) {
            echo '<div class="col-lg-3 col-sm-6">';
            echo '<div class="item">';
            
            // Check if a profile path exists
            if (!empty($cast_member->profile_path)) {
                $profileImageUrl = "https://image.tmdb.org/t/p/w185" . $cast_member->profile_path;
                echo '<img style="height:270px" src="' . $profileImageUrl . '" alt="' . $cast_member->name . ' ">';
            } else {
                // If no profile photo is available, you can display a default image or a message
                echo "No profile photo available.";
            }

            echo '<h4>' . $cast_member->name . '<br><span>' . $cast_member->character . '</span></h4>';
            echo '</div>';
            echo '</div>';
            $displayedCount++;
        } else {
            // If more than 4 records, stop displaying and add a "See More" button
            break;
        }
    }
    $displayedCount = 0;
$count=0;
    foreach ($movie_credits->cast as $cast_member) {

      if ($displayedCount <= 4) {
        $displayedCount++;

        continue;
      }
      if($cast_member->profile_path=="")
      {continue;}
          echo '<div class="col-lg-3 col-sm-6 more" style="display:none" >';
          echo '<div class="item">';
          if ($count < 12) {

          // Check if a profile path exists
          if (!empty($cast_member->profile_path)) {
              $profileImageUrl = "https://image.tmdb.org/t/p/w185" . $cast_member->profile_path;
              echo '<img src="' . $profileImageUrl . '" alt="' . $cast_member->name . '" style="height:250px">';
          } else {
              // If no profile photo is available, you can display a default image or a message
              echo "No profile photo available.";
          }

          echo '<h4>' . $cast_member->name . '<br><span>' . $cast_member->character . '</span></h4>';
          echo '</div>';
          echo '</div>';
          $count++;
      } else {
          // If more than 4 records, stop displaying and add a "See More" button
          break;
      }
  }
    ?>
</div>
</div>


<script>
    var more = document.getElementsByClassName("more");
    var isExpanded = false; // To track the state

    function Show() {
        for (let i = 0; i < more.length; i++) {
            if (more[i].style.display === 'none' || more[i].style.display === '') {
                more[i].style.display = 'block';
            } else {
                more[i].style.display = 'none';
            }
        }

        // Toggle the button text
        var button = document.getElementById('show');
        isExpanded = !isExpanded;
        button.textContent = isExpanded ? 'Show Less' : 'Show More';
    }
</script>

                      <div class="clips">
                        
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="heading-section">
                        <h4><em>Movie</em> Trailer  :</h4>
                      </div>
                        
                          <div class="item">
                          <?php 

$firstVideo = $movie_video_id->results[0]; // Get the first video

    echo '<iframe width="560" height="315" src="' . "https://www.youtube.com/embed/" . $firstVideo->key . '" frameborder="0" allowfullscreen></iframe>';
?>"                          </div>
                          
                        </div>
                      </div></div></div></div>
          <!-- ***** Banner End ***** -->

          <div class="clips">
                
                <div class="row">
                  <div class="col-lg-12">
                    <div class="heading-section">
                      <h4><em>More Like</em> This :</h4>
                    </div>
                    <div class="row">
<div class="row" id="similar-movies-container">
    <?php
    $count = 4;
    foreach ($movie_similar_id->results as $sim) {
        if ($count <= 0) {
            break;
        }
        if($sim->poster_path=="")
        {continue;}
        ?>
        <div class="col-lg-3 col-sm-6">
            <div class="item" style="padding-bottom: 25px;">
                <a href="movie.php?id=<?php echo $sim->id; ?>">
                    <?php
                    $posterUrl = "http://image.tmdb.org/t/p/w300" . $sim->poster_path;
                    $formattedRating = number_format($sim->vote_average, 1); // Format rating with 1 decimal place
                    ?>
                    <img style="height: 260px; max-width: 100%;" src="<?php echo $posterUrl; ?>" alt="<?php echo $sim->title; ?>">
                    <h4><?php echo $sim->title; ?></h4>
                </a>
                <span>
                    <ul class="d-flex" style="padding-bottom: 0px; padding-top: 5px; padding-left: 0px;">
                        <li style="border-bottom-width: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                            <i class="fa fa-star"></i> <?php echo $formattedRating; ?>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li><i class="fa fa-clipboard"></i> <?php echo $sim->vote_count; ?></li>
                    </ul>
                </span>
            </div>
        </div>
        <?php
        $count--;
    }
    ?>
</div>

</div>

          <div class="col-lg-12">
            <div class="main-button">
          <div class="downl">
              <a href=#> Download </a>
            </div>
          </div></div></div></div></div></div></div></div></div>
  
          <footer>
            <div class="social2" >
              <ul>
                <li > <a href="https://fr-fr.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li ><a href="https://www.instagram.com/"><i class="fab fa-twitter"></i></a></li>
                <li ><a href="https://twitter.com/"><i class="fab fa-instagram"></i></a></li>
              </ul>
                  </div>
            </footer>



  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>



  </body>

</html>
