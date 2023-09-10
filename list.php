<!DOCTYPE html>
<?php
$imgurl_1 = "http://image.tmdb.org/t/p/w500";
$imgurl_2 = "http://image.tmdb.org/t/p/w300";
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

--><style>
        ul.pagination {
            display: flex;
            list-style-type: none;
            padding: 0;
        }
        ul.pagination li {
            margin: 5px;
        }

        .hotel-card img {
  height: 250px;
  width: 250px;
}.border-ligh {
  border: 1px solid #222 !important;
  border-radius: 100px;
  padding: 5px 5px;
    padding-right: 5px;
    padding-left: 5px;
  padding-left: 20px !important;
  padding-right: 20px !important;
}
.bg-blue-1 {
  background-color: #3554d1 !important;
}
.rounded-4 {
  border-radius: 5px !important;
}
.fw-600 {
  font-weight: 700;
}.rating {
  padding: 5px;
}.button {
  display: flex;
  align-items: center;
  justify-content: center;
  vertical-align: middle;
  text-align: center;
  line-height: 1;
  font-weight: 500;
  font-size: 15px;
  line-height: 1.2;
  border-radius: 4px;
  border: 1px solid transparent;
  transition: all .3s cubic-bezier(.165,.84,.44,1);
  width: 190px;
  height: 48px;
  padding: 14px 30px;
  box-sizing: border-box;
  transform: translateY(250%);
}
.availability {
  background-color: #3554d1;
  text-decoration: none;
}
élément {
}
.button.-md {
  padding: 14px 30px;

}
.availability:hover {
  background-color: #123456;

}
.topbar-filter {
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 30px;
  border-top: 1px solid #405266;
  border-bottom: 1px solid #405266;
}.topbar-filter.fw p {
  padding-right: 600px;
}.topbar-filter p span {
  color: #4280bf;
}
élément {
}
.topbar-filter label, .topbar-filter select {
  font-family: 'Nunito', sans-serif;

  font-size: 14px;

  color: #abb7c4;

  font-weight: 300;

  text-transform: none;

}.topbar-filter select {
  width: 215px;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: url('drop-icon.png') no-repeat right 20px center;
  border-left: 1px solid #405266;
  border-right: 1px solid #405266;
  border-top: none;
  border-bottom: none;
  color: #ffffff;
  font-weight: 400;
}.topbar-filter option {
  background-color: #020d18;
}.topbar-filter label, .topbar-filter select {
  font-family: 'Nunito', sans-serif;
  font-size: 14px;
  color: #abb7c4;
  font-weight: 300;
  text-transform: none;
}
select {
  border-radius: 0 !important;
  -webkit-border-radius: 0 !important;
}
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

:root {
  /* Colors */
  --brand-color: hsl(46, 100%, 50%);
  --black: hsl(0, 0%, 0%);
  --white: hsl(0, 0%, 100%);
  /* Fonts */
  --font-title: "Montserrat", sans-serif;
  --font-text: "Lato", sans-serif;
}

/* RESET */

.fix {

  display: inline-block;
  place-items: center;
  overflow: hidden;
  border-radius: 0.625rem;
  box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
  margin-right: 15px;
  margin-bottom: 10px;

}


/* GLOBAL STYLES */


h2 {
  font-size: 2.25rem;
  font-family: var(--font-title);
  color: var(--white);
  line-height: 1.1;
}

p {
  font-family: var(--font-text);
  font-size: 1rem;
  line-height: 1.5;
  color: var(--white);
}

.flow > * + * {
  margin-top: var(--flow-space, 1em);
}

/* CARD COMPONENT */

.card {
  display: grid;
  place-items: center;
  width: 270px;
  max-width: 21.875rem;
  height: 400px;
  overflow: hidden;
  border-radius: 0.625rem;
  box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
}

.card > * {
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

.card__background {
  object-fit: cover;
  max-width: 100%;
  height: 100%;
}

.card__content {
  --flow-space: 0.9375rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-self: flex-end;
  height: auto;  padding: 12% 1.25rem 1.875rem;
  background: linear-gradient(
    180deg,
    hsla(0, 0%, 0%, 0) 0%,
    hsla(0, 0%, 0%, 0.3) 10%,
    hsl(0, 0%, 0%) 100%
  );
}

.card__content--container {
  --flow-space: 1.25rem;
}

.card__title {
  position: relative;
  width: fit-content;
  width: -moz-fit-content; /* Prefijo necesario para Firefox  */
}

.card__title::after {
  content: "";
  position: absolute;
  height: 0.3125rem;
  width: calc(100% + 1.25rem);
  bottom: calc((1.25rem - 0.5rem) * -1);
  left: -1.25rem;
  background-color: var(--brand-color);
}

.card__button {
  padding: 0.75em 1.6em;
  width: fit-content;
  width: -moz-fit-content; /* Prefijo necesario para Firefox  */
  font-variant: small-caps;
  font-weight: bold;
  border-radius: 0.45em;
  border: none;
  background-color: var(--brand-color);
  font-family: var(--font-title);
  font-size: 1.125rem;
  color: var(--black);
}

.card__button:focus {
  outline: 2px solid black;
  outline-offset: -5px;
}

@media (any-hover: hover) and (any-pointer: fine) {
  .card__content {
    transform: translateY(62%);
    transition: transform 500ms ease-out;
    transition-delay: 500ms;
  }

  .card__title::after {
    opacity: 0;
    transform: scaleX(0);
    transition: opacity 1000ms ease-in, transform 500ms ease-out;
    transition-delay: 500ms;
    transform-origin: right;
  }

  .card__background {
    transition: transform 500ms ease-in;
  }

  .card__content--container > :not(.card__title),
  .card__button {
    opacity: 0;
    transition: transform 500ms ease-out, opacity 500ms ease-out;
  }

  .card:hover,
  .card:focus-within {
    transform: scale(1.05);
    transition: transform 500ms ease-in;
  }

  .card:hover .card__content,
  .card:focus-within .card__content {
    transform: translateY(0);
    transition: transform 500ms ease-in;
  }

  .card:focus-within .card__content {
    transition-duration: 0ms;
  }

  .card:hover .card__background,
  .card:focus-within .card__background {
    transform: scale(1.3);
  }

  .card:hover .card__content--container > :not(.card__title),
  .card:hover .card__button,
  .card:focus-within .card__content--container > :not(.card__title),
  .card:focus-within .card__button {
    opacity: 1;
    transition: opacity 500ms ease-in;
    transition-delay: 1000ms;
  }

  .card:hover .card__title::after,
  .card:focus-within .card__title::after {
    opacity: 1;
    transform: scaleX(1);
    transform-origin: left;
    transition: opacity 500ms ease-in, transform 500ms ease-in;
    transition-delay: 500ms;
  }
}


    </style>
  </head>

<body>


  <?php
if(isset($_GET['genre'])){
  $genre=$_GET['genre'];
  echo $genre;
  $gen="block";
}else {
  $gen="none";
}
if(isset($_GET['search'])){
  $sea=$_GET['search'];
  $sea="block";
}else {
  $sea="none";
}
?>
  <!-- ***** Header Area Start ***** -->
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="browse.html">Browse</a></li>
                        <li><a href="details.html" class="active">Details</a></li>
                        <li><a href="streams.html">Streams</a></li>
                        <li><a href="profile.html">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
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
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
</div>
<?php
include_once "api_key.php";

if(isset($_GET['search'])){
  $input=$_GET['search'];
$search=$input;
$title = 'Result Search | '.$input;
include_once "api/api_search.php";
foreach ($search->results as $results) {
    $title = $results->title;
    $overview=$results->overview;
    $id = $results->id;
    $release = $results->release_date;
    if (!empty($release) && !is_null($release)) {
        $tempyear = explode("-", $release);
        $year = $tempyear[0];
        if (!is_null($year)) {
            $title = $title . ' (' . $year . ')';
        }
    }
    $maxOverviewLength=150;
    $truncatedOverview = (strlen($overview) > $maxOverviewLength)
      ? substr($overview, 0, $maxOverviewLength - 3) . '...'
      : $overview;
    $backdrop = $results->poster_path;
    if (empty($backdrop) && is_null($backdrop)) {
        $backdrop = 'http://via.placeholder.com/1080x1580'; // Placeholder image
    } else {
        $backdrop = 'http://image.tmdb.org/t/p/w500' . $backdrop; // Adjust image size if needed
    }

    // Generate the movie card HTML
    echo '<div class="fix">';
    echo '<a href="movie.php?id=' . $id . '">';
    echo '<article class="card">';
    echo '<img class="card__background" src="' . $backdrop . '" alt="Photo of Cartagena\'s cathedral at the background and some colonial style houses" width="1920" height="2193" />';
    echo '<div class="card__content | flow">';
    echo '<div class="card__content--container | flow">';
    echo '<h2 class="card__title">' . $title . '</h2>';
    echo '<p class="card__description">' . $truncatedOverview . '</p>' ;    echo '</div>';
    echo '<button class="card__button">Read more</button>';
    echo '</div>';
    echo '</article>';
    echo '</a>';
    echo '</div>';
}
}
?>

                <div class="row" style="display:<?=$gen?>">
              
                <div class="topbar-filter" style="padding-bottom: 5px;padding-top: 5px;">
					<p>Found <span>1,608 movies</span> in total</p>
          <label for="sort-by"style="margin-left: 59%;">Sort by:</label>
<select id="sort-by">
  <option value="popularity.desc">Popularity Descending <i class="fa-solid fa-chevron-down"></i></option>
  <option value="popularity.asc">Popularity Ascending</option>
  <option value="vote_average.desc">Rating Descending</option>
  <option value="vote_average.asc">Rating Ascending</option>
  <option value="vote_count.desc">Votes Count Descending</option>
  <option value="vote_count.asc">Votes Count Ascending</option>
</select>


				</div>
                <div  id="movies"  style="margin-left: 20px;"></div>

                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

        

        
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->


  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script>
    $(window).on('load', function() {

$('#js-preloader').addClass('loaded');

});

const sortSelect = document.getElementById('sort-by');
let currentSort = 'popularity.desc'; // Default sorting option

sortSelect.addEventListener('change', () => {
  currentSort = sortSelect.value;
  console.log(sortSelect.value);
  currentPage = 1; // Reset the current page when changing sorting
  // Clear the existing movies and then fetch and append movies with the updated sorting
  const moviesContainer = document.getElementById('movies');
  moviesContainer.innerHTML = '';
  appendMovies();
});

let currentPage = 1;
let isLoading = false;
const apiKey = '<?= $api ?>'; // Replace with your TMDb API key
const genreId = <?=$genre;?> // Genre ID for Animation
console.log(genreId);

const fetchMovies = async (page) => {
  const url = `https://api.themoviedb.org/3/discover/movie?page=${page}&sort_by=${currentSort}&with_genres=${genreId}&api_key=${apiKey}&vote_average.gte=4.5&vote_average.lte=8.9`;
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    const data = await response.json();
    return data.results;
  } catch (error) {
    console.error('Error fetching data:', error);
    return [];
  }
};

const appendMovies = async () => {
  if (isLoading) {
    return;
  }

  isLoading = true;

  const moviesContainer = document.getElementById('movies');
  const movies = await fetchMovies(currentPage);
  console.log(movies);

  if (movies.length === 0) {
    moviesContainer.innerHTML = '<p>No more movies found.</p>';
    return;
  }

  const IMG_URL = 'https://image.tmdb.org/t/p/w500';
  const genreMap = {
    28: "Action",
    12: "Adventure",
    16: "Animation",
    35: "Comedy",
    80: "Crime",
    99: "Documentary",
    18: "Drama",
    10751: "Family",
    14: "Fantasy",
    36: "History",
    27: "Horror",
    10402: "Music",
    9648: "Mystery",
    10749: "Romance",
    878: "Science Fiction",
    10770: "TV Movie",
    53: "Thriller",
    10752: "War",
    37: "Western",
  };

  function getYearFromDate(dateString) {
    const date = new Date(dateString);
    return date.getFullYear();
  }

  console.log(movies.length);

  movies.forEach(movie => {
    if (movie.poster_path == null) {
      return;
    }

    
    const movieDiv = document.createElement('div');
    movieDiv.classList.add('fix');
    const genreNames = movie.genre_ids.map(genreId => genreMap[genreId]).join(', ');
    const maxOverviewLength = 150; // Adjust the limit as needed
    const truncatedOverview = movie.overview.length > maxOverviewLength
      ? movie.overview.substring(0, maxOverviewLength - 3) + '...' // Add ellipsis
      : movie.overview;
    movieDiv.innerHTML =
      `   
        <a href="movie.php?id=${movie.id}">
         <article class="card">
  <img
    class="card__background"
    src="${movie.poster_path ? IMG_URL + movie.poster_path : "http://via.placeholder.com/1080x1580"}"    alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
    width="1920"
    height="2193"
  />
  <div class="card__content | flow">
    <div class="card__content--container | flow">
      <h2 class="card__title">${movie.title}</h2>
      <p class="card__description">
        ${truncatedOverview}
      </p>
    </div>
    <button class="card__button">Read more</button>
  </div>
</article>
</a>
`;
    moviesContainer.appendChild(movieDiv);
  });

  currentPage++;
  isLoading = false;
};

// Add scroll event listener to trigger loading more movies
window.addEventListener('scroll', () => {
  const { scrollTop, clientHeight, scrollHeight } = document.documentElement;

  if (scrollTop + clientHeight >= scrollHeight - 200) {
    appendMovies();
  }
});

// Initial load of movies
appendMovies();

// Initial load of movies
</script>

  </body>

</html>
