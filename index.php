<!DOCTYPE html>
<?php 
$imgurl_1 = "http://image.tmdb.org/t/p/w500";
$imgurl_2 = "http://image.tmdb.org/t/p/w300";
include_once "api_key.php";
?>

<html lang="en">

  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

<style>

 .owl-carousel .item {
    width:250px;
    height:480px
  }.most-popular .owl-nav .owl-prev {
  margin-right: 2.5px;
}

.most-popular .owl-nav .owl-next {
  margin-left: 2.5px;
}

.most-popular .owl-nav .owl-prev span,
.most-popular .owl-nav .owl-next span  {
  font-size: 36px;
  display: inline-block;
  color: #666;
  opacity: 1;
  transition: all .3s;
}

.most-popular .owl-nav .owl-prev span:hover,
.most-popular .owl-nav .owl-next span:hover {
  opacity: 1;
  color: #9f028d;
}
.owl-nav {
  display: block !important;
  transform: translate(95%,-1030%);
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
                        <li><a href="index.php" class="active">Home</a></li>
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
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To CineSphere</h6>
                  <h4><em>Enjoy</em> The best,exclusive series and movies</h4>
                  <div class="main-button">
                    <a href="login.html">Login/Register Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->


   <!-- ***** Most Popular Start ***** -->
   <div class="most-popular">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Trending</em> Now</h4>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="item">
              <img src="https://akns-images.eonline.com/eol_images/Entire_Site/2019221/rs_634x940-190321113004-634-game-of-thrones-poster-ch-032119.jpg?fit=around%7C634:941&output-quality=90&crop=634:941;center,top" alt="">
              <h4><a href="aaa.html">Game of thrones</a><br><span>HBO</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.7</li>
                <li><i class="fa-solid fa-eye"></i> +10M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="item">
              <img src="https://upload.wikimedia.org/wikipedia/ar/d/dc/%D9%85%D9%84%D8%B5%D9%82_%D8%B3%D9%84%D8%B3%D9%84%D8%A9_%D8%A7%D8%AE%D8%AA%D9%84%D8%A7%D9%84_%D8%B6%D8%A7%D9%84_%28%D9%85%D8%B3%D9%84%D8%B3%D9%84%29.jpeg" alt="">
              <h4><a href="aaa.html">Breaking Bad</a><br><span>AMC</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.7</li>
                <li><i class="fa-solid fa-eye"></i> +10M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="item">
              <img src="https://i.etsystatic.com/18242346/r/il/c9908e/2412674268/il_fullxfull.2412674268_1sgm.jpg" alt="">
              <h4><a href="aaa.html">Fight club</a><br><span>Fox 2000 Pictures</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.5</li>
                <li><i class="fa-solid fa-eye"></i> 5.5M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="item">
              <img src="https://upload.wikimedia.org/wikipedia/ro/thumb/a/a6/The_Pianist_movie.jpg/260px-The_Pianist_movie.jpg" alt="">
              <h4><a href="aaa.html">The Pianist</a><br><span>Canal+</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.4</li>
                <li><i class="fa-solid fa-eye"></i> 5M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="item ">
              <img src="https://m.media-amazon.com/images/M/MV5BZjkzMmU5MjMtODllZS00OTA5LTk2ZTEtNjdhYjZhMDA5ZTRhXkEyXkFqcGdeQXVyOTA3MTMyOTk@._V1_.jpg" alt="">
              <h4><a href="aaa.html">Dexter</a><br><span>Showtime</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.3</li>
                <li><i class="fa-solid fa-eye"></i> 3.6M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="item">
              <img src="https://www.zerodeconduite.net/sites/default/files/medias/taxi.jpg" alt="">
              <h4><a href="aaa.html">Taxi Driver<a href="aaa.html"></a><br><span>Columbia Pic...</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.3</li>
                <li><i class="fa-solid fa-eye"></i> +5M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="item">
              <img src="https://i.ebayimg.com/images/g/0csAAOSwMvxghuP~/s-l500.jpg" alt="">
              <h4><a href="aaa.html">interstellar</a><br><span>Warner Bros</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.5</li>
                <li><i class="fa-solid fa-eye"></i> +5M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="item">
              <img src="https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/001/028/suits-avocats-sur-mesure-photo-1028301.jpg" alt="">
              <h4><a href="aaa.html">Suits</a><br><span>Usa Network</span></h4>
              <ul>
                <li><i class="fa fa-star"></i> 4.3</li>
                <li><i class="fa-solid fa-eye"></i> 3.6M</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="main-button">
              <a href="browse.html">See More</a>
            </div>
          </div></div></div> </div>  </div>




        <!-- ***** Most Popular Start ***** -->
   <div class="most-popular">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Animation</em> Movies</h4>
        </div>
        <div class="owl-features owl-carousel" id="animation-carousel"></div>
        </div>
  </div> <div class="col-lg-12">
            <div class="main-button">
              <a href="list.php?genre=16">See More</a>
            </div>
          </div></div>
  

  <div class="most-popular">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Crime</em> Movies</h4>
        </div>
        <div class="owl-features owl-carousel" id="crime-carousel"></div>
        </div>
  </div> <div class="col-lg-12">
            <div class="main-button">
              <a href="list.php?genre=80">See More</a>
            </div>
          </div></div>
  

  <div class="most-popular">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Action</em> Movies</h4>
        </div>
        <div class="owl-features owl-carousel" id="action-carousel"></div>
        </div>
  </div> <div class="col-lg-12">
            <div class="main-button">
              <a href="list.php?genre=28">See More</a>
            </div>
          </div></div>
  



  <div class="most-popular">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Romance</em> Movies</h4>
        </div>
        <div class="owl-features owl-carousel" id="romance-carousel"></div>
        </div>
  </div> <div class="col-lg-12">
            <div class="main-button">
              <a href="list.php?genre=10749">See More</a>
            </div>
          </div></div>
  
  <div class="most-popular">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading-section">
          <h4><em>Drama</em> Movies</h4>
        </div>
        <div class="owl-features owl-carousel" id="drama-carousel"></div>
        </div>
  </div> <div class="col-lg-12">
            <div class="main-button">
              <a href="list.php?genre=18">See More</a>
            </div>
          </div></div></div> </div>
  </div>
 
  




  


 
      

</div>
</div>
</div>
  </div>
</div>
  <footer style="transform:translateY(100%)">
      
   
    <div class="social">
    <ul>
      <li > <a href="https://fr-fr.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
      <li ><a href="https://www.instagram.com/"><i class="fab fa-twitter"></i></a></li>
      <li ><a href="https://twitter.com/"><i class="fab fa-instagram"></i></a></li>
    </ul>
        </div>
  </footer>
<!-- baaqi ghanzed watch list f home +darkmode button(done)
rating/review system for the users + sharing buttons   .
     top rated + history f profile

-->            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="assets/js/isotope.min.js"></script>
          <script src="assets/js/owl-carousel.js"></script>


          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
          <script>
(function ($) {
	
	"use strict";

	// Page loading animation
	$(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });



	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('.header-text').height();
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	});
	
	

	var width = $(window).width();
		$(window).resize(function() {
			if (width > 992 && $(window).width() < 992) {
				location.reload();
			}
			else if (width < 992 && $(window).width() > 992) {
				location.reload();
			}
	})




	

	
	
	

	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation


	
	

	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});

	

	const dropdownOpener = $('.main-nav ul.nav .has-sub > a');

    // Open/Close Submenus
    if (dropdownOpener.length) {
        dropdownOpener.each(function () {
            var _this = $(this);

            _this.on('tap click', function (e) {
                var thisItemParent = _this.parent('li'),
                    thisItemParentSiblingsWithDrop = thisItemParent.siblings('.has-sub');

                if (thisItemParent.hasClass('has-sub')) {
                    var submenu = thisItemParent.find('> ul.sub-menu');

                    if (submenu.is(':visible')) {
                        submenu.slideUp(450, 'easeInOutQuad');
                        thisItemParent.removeClass('is-open-sub');
                    } else {
                        thisItemParent.addClass('is-open-sub');

                        if (thisItemParentSiblingsWithDrop.length === 0) {
                            thisItemParent.find('.sub-menu').slideUp(400, 'easeInOutQuad', function () {
                                submenu.slideDown(250, 'easeInOutQuad');
                            });
                        } else {
                            thisItemParent.siblings().removeClass('is-open-sub').find('.sub-menu').slideUp(250, 'easeInOutQuad', function () {
                                submenu.slideDown(250, 'easeInOutQuad');
                            });
                        }
                    }
                }

                e.preventDefault();
            });
        });
    }


	


})(window.jQuery);
              </script>
<script>
  const apiKey = '<?php  echo $api ;
?>'; 
  const genres = [
    {
    "id": 16,
    "name": "Animation"
  },
    {
      "id": 28,
      "name": "Action"
    },
    {
      "id": 80,
      "name": "Crime"
    },
    {
      "id": 10749,
      "name": "Romance"
    },
    {
      "id": 18,
      "name": "Drama"
    }
  ];

  const fetchMoviesByGenre = async (genreId) => {
    const url = `https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&with_genres=${genreId}&api_key=${apiKey}`;

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

  const initializeGenreCarousels = async () => {
    for (const genre of genres) {
      const movies = await fetchMoviesByGenre(genre.id);
      const carouselId = `${genre.name.toLowerCase()}-carousel`;

      if (movies.length > 0) {
        const genreCarousel = document.getElementById(carouselId);
        const IMG_URL = 'https://image.tmdb.org/t/p/w500';

        function getYearFromDate(dateString) {
          const date = new Date(dateString);
          return date.getFullYear();
        }

        movies.forEach((movie) => {
          const movieDiv = document.createElement('div');
          movieDiv.classList.add('item');
          movieDiv.innerHTML = `
            <img src="${movie.poster_path ? IMG_URL + movie.poster_path : 'http://via.placeholder.com/1080x1580'}" alt="">
            <div class="row">
              <div class="col-8">
                <h4><a href="movie.php?id=${movie.id}">${movie.title}</a><br><span>${getYearFromDate(movie.release_date)}</span></h4>
              </div>
              <div class="col-4">
                <ul>
                  <li><i class="fa fa-star"></i> ${movie.vote_average}</li>
                </ul>
              </div>
            </div>
          `;
          genreCarousel.appendChild(movieDiv);
        });

        // Initialize Owl Carousel for this genre
        $(`#${carouselId}`).owlCarousel({
          items: 4,
          loop: true,
          dots: false,
          nav: true,
          autoplay: true,
          margin: 0,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1200: {
              items: 4
            },
            1800: {
              items: 4
            }
          },
        });
      }
    }
  };

  // Initial load of movies for genres
  initializeGenreCarousels();
</script>