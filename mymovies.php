<div class="dropdown">
  <div class="dropdown-btns">
    <button id="myFilterBtn" class="btn dropbtn" onclick="openDropdown('filters')">Filter</button>
    
    <button id="addMovieBtn" class="btn dropbtn" onclick="openDropdown('addmovie')">Add movie to my movie list <i class="fas fa-plus"></i></button>

    <button id="sortBtn" class="btn dropbtn" onclick="#">Sort <i class="fas fa-caret-down"></i></button>
  </div>

  <div id="filters" class="dropdownContent">
    <form action="/action_page.php">
      <label for="mtitle">Words in movie title:</label>
      <input type="text" id="mtitle" name="mtitle">

      <label for="otitle">Words in original movie title:</label>
      <input type="text" id="otitle" name="otitle"><br>

      <label for="myear">Date release:</label>
      from<input type="number" id="myear" name="myear" min="1874" max="2020" value="2020">to<input type="number" id="myear" name="myear" min="1874" max="2020" value="2020"><!--How to add max="ActualYear" value="ActualYear"?AND second date cannot be grater than first-->

      <label for="mdirector">Movie Director:</label>
      <input type="text" id="mdirector" name="mdirector"><br>
    
      <input type="checkbox" id="genere1" value="action"><label for="genere1">Action</label>
      <input type="checkbox" id="genere2" value="adventure"><label for="genere2">Adventure</label>
      <input type="checkbox" id="genere3" value="animation"><label for="genere3">Animation</label>
      <input type="checkbox" id="genere4" value="biography"><label for="genere4">Biography</label>
      <input type="checkbox" id="genere5" value="comedy"><label for="genere5">Comedy</label>
      <input type="checkbox" id="genere6" value="crime"><label for="genere6">Crime</label>
      <input type="checkbox" id="genere7" value="documentary"><label for="genere7">Documentary</label>
      <input type="checkbox" id="genere8" value="drama"><label for="genere8">Drama</label>
      <input type="checkbox" id="genere9" value="family"><label for="genere9">Family</label>
      <input type="checkbox" id="genere10" value="fantasy"><label for="genere10">Fantasy</label>
      <input type="checkbox" id="genere11" value="film-noir"><label for="genere11">Film-Noir</label>
      <input type="checkbox" id="genere12" value="game-show"><label for="genere12">Game-Show</label>
      <input type="checkbox" id="genere13" value="history"><label for="genere13">History</label>
      <input type="checkbox" id="genere14" value="horror"><label for="genere14">Horror</label>
      <input type="checkbox" id="genere15" value="music"><label for="genere15">Music</label>
      <input type="checkbox" id="genere16" value="musical"><label for="genere16">Musical</label>
      <input type="checkbox" id="genere17" value="mystery"><label for="genere17">Mystery</label>
      <input type="checkbox" id="genere18" value="news"><label for="genere18">News</label>
      <input type="checkbox" id="genere19" value="reality-tv"><label for="genere19">Reality-TV</label>
      <input type="checkbox" id="genere20" value="romance"><label for="genere20">Romance</label>
      <input type="checkbox" id="genere21" value="sci-fi"><label for="genere21">Sci-Fi</label>
      <input type="checkbox" id="genere22" value="sport"><label for="genere22">Sport</label>
      <input type="checkbox" id="genere23" value="talk-show"><label for="genere23">Talk-Show</label>
      <input type="checkbox" id="genere24" value="thriller"><label for="genere24">Thriller</label>
      <input type="checkbox" id="genere25" value="war"><label for="genere25">War</label>
      <input type="checkbox" id="genere26" value="western"><label for="genere26">Western</label><br>

      <label for="rating">Rating:</label>
      from
      <input type="number" id="rating" name="rating" min="1.0" max="10" step="0.1" value="0.0">
      to
      <input type="number" id="irating" name="irating" min="1.0" max="10" step="0.1" value="0.0">
      <br>

      <input type="submit" value="Show Movies &raquo">
    </form>
    <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
  </div>

  <div id="addmovie" class="dropdownContent">
    <form action="/action_page.php">
      <label for="mvsearch">Enter the movie title:</label>
      <input type="text" id="mvsearch" name="mvsearch">
      <input type="submit" value="Add Movie &raquo">
    </form>
    <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
  </div>
</div>


<div class="wrapper">
  <div class="my-side-box left-sb"></div>
  <div class="mymovies-content">

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating1')" type="button">
          <p>My Rating</p>
          <div class="rating my-rating">10</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview1')" type="button">
          <p>My Review <i class="fas fa-angle-down small"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Hobbit: Niezwykła podróżaaa aaaa
          aaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa</div>
          <div class="movie-date-release">(2012)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating1" class="dropdownContent">
      <p>Rated <span>10</span> on <span>06.05.2020 19:04</span></p><br><!--How to set it properly-->
      <form action_page="/action_page.php">
        <label for="myrating">Change My Rating:</label>
        <input type="number" id="myrating" name="myrating" min="1" max="10" step="1" value="0">

        <label for="myratingdate">Rating Date:</label>
        <input type="datetime-local" id="myratingdate" name="myratingdate"><br><!--How to set autocomplite to default actual date and time?-->

        <input type="checkbox" id="favourite" value="favourite"><label for="favourite">Mark as Favourite</label>

        <input type="checkbox" id="towatch" value="towatch"><label for="towatch">Mark as To Watch</label><br>

        <input type="submit" value="Submit Changes &raquo">
      </form>  
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>
    <div id="myreview1" class="dropdownContent">
      <form action_page="#">
        <textarea name="myreview" width:>Not reviewed yet... Review me!</textarea>
        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating2')" type="button">
          <p>My Rating</p>
          <div class="rating my-rating">9.5</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview2')" type="button">
          <p>My Review <i class="fas fa-angle-down small"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Hobbit: Pustkowie Smauga</div>
          <div class="movie-date-release">(2013)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating2" class="dropdownContent">
      <p>Rated <span>9.5</span> on <span>06.05.2020 19:04</span></p><br><!--How to set it properly-->
      <form action_page="/action_page.php">
        <label for="myrating">Change My Rating:</label>
        <input type="number" id="myrating" name="myrating" min="1" max="10" step="1" value="0">

        <label for="myratingdate">Rating Date:</label>
        <input type="datetime-local" id="myratingdate" name="myratingdate"><br><!--How to set autocomplite to default actual date and time?-->

        <input type="checkbox" id="favourite" value="favourite"><label for="favourite">Mark as Favourite</label>

        <input type="checkbox" id="towatch" value="towatch"><label for="towatch">Mark as To Watch</label><br>

        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>
    <div id="myreview2" class="dropdownContent">
      <form action_page="#">
        AAAAAAAAAAAAAAAAAAAAAAAAA
        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating3')" type="button">
          <p>My Rating</p>
          <div class="rating my-rating">7.5</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview3')" type="button">
          <p>My Review <i class="fas fa-angle-down small"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Hobbit: Bitwa Pięciu Armii</div>
          <div class="movie-date-release">(2014)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating3" class="dropdownContent">
      <p>Rated <span>7.5</span> on <span>06.05.2020 19:04</span></p><br><!--How to set it properly-->
      <form action_page="/action_page.php">
        <label for="myrating">Change My Rating:</label>
        <input type="number" id="myrating" name="myrating" min="1" max="10" step="1" value="0">

        <label for="myratingdate">Rating Date:</label>
        <input type="datetime-local" id="myratingdate" name="myratingdate"><br><!--How to set autocomplite to default actual date and time?-->

        <input type="checkbox" id="favourite" value="favourite"><label for="favourite">Mark as Favourite</label>

        <input type="checkbox" id="towatch" value="towatch"><label for="towatch">Mark as To Watch</label><br>

        <input type="submit" value="Submit Changes &raquo">
      </form>  
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>
    <div id="myreview3" class="dropdownContent">
      <form action_page="#">
        AAAAAAAAAAAAAAAAAAAAAAAAA
        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>

     <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating4')" type="button">
          <p>My Rating</p>
          <div class="rating my-rating">7.5</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview4')" type="button">
          <p>My Review <i class="fas fa-angle-down small"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Władca pierścieni: Drużyna Pierścienia</div>
          <div class="movie-date-release">(2001)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating4" class="dropdownContent">
      <p>Rated <span>10</span> on <span>06.05.2020 19:04</span></p><br><!--How to set it properly-->
      <form action_page="/action_page.php">
        <label for="myrating">Change My Rating:</label>
        <input type="number" id="myrating" name="myrating" min="1" max="10" step="1" value="0">

        <label for="myratingdate">Rating Date:</label>
        <input type="datetime-local" id="myratingdate" name="myratingdate"><br><!--How to set autocomplite to default actual date and time?-->

        <input type="checkbox" id="favourite" value="favourite"><label for="favourite">Mark as Favourite</label>

        <input type="checkbox" id="towatch" value="towatch"><label for="towatch">Mark as To Watch</label><br>

        <input type="submit" value="Submit Changes &raquo">
      </form>  
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>
    <div id="myreview4" class="dropdownContent">
      <form action_page="#">
        AAAAAAAAAAAAAAAAAAAAAAAAA
        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating5')" type="button">
          <p>My Rating</p>
          <div class="rating my-rating">7</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview5')" type="button">
          <p>My Review <i class="fas fa-angle-down small"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Władca pierścieni: Dwie wieże</div>
          <div class="movie-date-release">(2002)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating5" class="dropdownContent">
      <p>Rated <span>10</span> on <span>06.05.2020 19:04</span></p><br><!--How to set it properly-->
      <form action_page="/action_page.php">
        <label for="myrating">Change My Rating:</label>
        <input type="number" id="myrating" name="myrating" min="1" max="10" step="1" value="0">

        <label for="myratingdate">Rating Date:</label>
        <input type="datetime-local" id="myratingdate" name="myratingdate"><br><!--How to set autocomplite to default actual date and time?-->

        <input type="checkbox" id="favourite" value="favourite"><label for="favourite">Mark as Favourite</label>

        <input type="checkbox" id="towatch" value="towatch"><label for="towatch">Mark as To Watch</label><br>

        <input type="submit" value="Submit Changes &raquo">
      </form>  
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>
    <div id="myreview5" class="dropdownContent">
      <form action_page="#">
        AAAAAAAAAAAAAAAAAAAAAAAAA
        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating6')" type="button">
          <p>My Rating</p>
          <div class="rating my-rating">7.5</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview6')" type="button">
          <p>My Review <i class="fas fa-angle-down small"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Władca pierścieni: Powrót króla</div>
          <div class="movie-date-release">(2003)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating6" class="dropdownContent">
      <p>Rated <span>10</span> on <span>06.05.2020 19:04</span></p><br><!--How to set it properly-->
      <form action_page="/action_page.php">
        <label for="myrating">Change My Rating:</label>
        <input type="number" id="myrating" name="myrating" min="1" max="10" step="1" value="0">

        <label for="myratingdate">Rating Date:</label>
        <input type="datetime-local" id="myratingdate" name="myratingdate"><br><!--How to set autocomplite to default actual date and time?-->

        <input type="checkbox" id="favourite" value="favourite"><label for="favourite">Mark as Favourite</label>

        <input type="checkbox" id="towatch" value="towatch"><label for="towatch">Mark as To Watch</label><br>

        <input type="submit" value="Submit Changes &raquo">
      </form>  
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>
    <div id="myreview6" class="dropdownContent">
      <form action_page="#">
        AAAAAAAAAAAAAAAAAAAAAAAAA
        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>

    <div class="mymovies-container">
      <div class="my-rating-box">
        <button class="btn moreinfo-btn myrating-btn" onclick="openDropdown('myrating7')" type="button">
          <p>My Rating</p>
          <div class="rating my-rating">7</div>
          <p class="small">Change <i class="fas fa-angle-double-right"></i></p>
        </button>
        <button class="btn my-review-btn" onclick="openDropdown('myreview7')" type="button">
          <p>My Review <i class="fas fa-angle-down small"></i></p>
        </button>
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
          <div class="movie-title">Gdzie jest Nemo?</div>
          <div class="movie-date-release">(2003)</div>
        </div>
        <div class="fav-towatch-box">
          <button class="btn favourite" onclick="#addtofav" type="button"><i class="fas fa-heart"></i></button>
          <button class="btn to-watch" onclick="#addtotowatch" type="button"><i class="far fa-eye"></i></button>
        </div>
      </div>
    </div>
    <div id="myrating7" class="dropdownContent">
      <p>Rated <span>10</span> on <span>06.05.2020 19:04</span></p><br><!--How to set it properly-->
      <form action_page="/action_page.php">
        <label for="myrating">Change My Rating:</label>
        <input type="number" id="myrating" name="myrating" min="1" max="10" step="1" value="0">

        <label for="myratingdate">Rating Date:</label>
        <input type="datetime-local" id="myratingdate" name="myratingdate"><br><!--How to set autocomplite to default actual date and time?-->

        <input type="checkbox" id="favourite" value="favourite"><label for="favourite">Mark as Favourite</label>

        <input type="checkbox" id="towatch" value="towatch"><label for="towatch">Mark as To Watch</label><br>

        <input type="submit" value="Submit Changes &raquo">
      </form>  
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>
    <div id="myreview7" class="dropdownContent">
      <form action_page="#">
        AAAAAAAAAAAAAAAAAAAAAAAAA
        <input type="submit" value="Submit Changes &raquo">
      </form>
      <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
    </div>


  </div>
  <div class="my-side-box right-sb"></div>
</div>

<div class="pagination-box">
  <div class="pagination">
    <a href="#first"><div class="pag-bg">&laquo;</div></a>
    <a href="#1"><div class="pag-bg">1</div></a>
    <a class="active" href="#2"><div class="pag-bg">2</div></a>
    <a href="#3"><div class="pag-bg">3</div></a>
    <a href="#4"><div class="pag-bg">4</div></a>
    <a href="#5"><div class="pag-bg">5</div></a>
    <a href="#6"><div class="pag-bg">6</div></a>
    <a href="#last"><div class="pag-bg">&raquo;</div></a>
  </div>
</div>
