<div class="dropdown">
  <div class="dropdown-btns">
    <button id="myFilterBtn" class="btn dropbtn" onclick="openDropdown('filters')">Filter</button>
    
    <button id="addMovieBtn" class="btn dropbtn" onclick="openDropdown('addmovie')">Add new movie to the base <i class="fas fa-plus"></i></button>

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
      <label for="mtitle">Movie title:</label>
      <input type="text" id="mtitle" name="mtitle">

      <label for="otitle">Original movie title:</label>
      <input type="text" id="otitle" name="otitle">

      <label for="myear">Date release:</label>
      <input type="number" id="myear" name="myear" min="1874" max="2020" value="2020"><br><!--How to add max="ActualYear" value="ActualYear"?-->

      <label for="mdirector">Movie Director:</label>
      <input type="text" id="mdirector" name="mdirector">

      <label for="mdirector2">Second Movie Director:</label>
      <input type="text" id="mdirector2" name="mdirector2"><br>
    
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

      <label for="filmweb-link">Movie URL address on Filmweb:</label>
      <input type="url" id="filmweb-link" name="filmweb-link">
      <label for="frating">Filmweb rating:</label>
      <input type="number" id="frating" name="frating" min="1.0" max="10" step="0.1" value="0.0">
      <br>

      <label for="imdb-link">Movie URL address on IMDb:</label>
      <input type="url" id="imdb-link" name="imdb-link">
      <label for="irating">IMDb rating:</label>
      <input type="number" id="irating" name="irating" min="1.0" max="10" step="0.1" value="0.0">
      <br>

      <input type="submit" value="Add Movie &raquo">
    </form>
    <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
  </div>
</div>


<div class="wrapper">
  <div class="side-box left-sb"></div>
  
  <div class="moviebase-content">

    <div class="container-bg">
      <div class="movie-info-container">
        <div class="title-box">
          <div class="movie-title-box">
            <div class="movie-title">Hobbit: NiezwwykłaNiezwwykła Niezwwykłarrrrrrrrrrrrrpodróż</div>
            <div class="movie-date-release">(2012)</div>
            <div class="movie-original-title">The Hobbit: An Unexpected Journey</div>
          </div>
          <div class="movie-director">Director<span class="director">Peter Jackson</span></div>
          <div class="movie-genere-box">Genere
            <span>adventure</span>
            <span>family</span>
            <span>fantasy</span><!-- set max visible generes and/or lenght of the 'movie-genre' div -->
          </div>
        </div>

        <div class="rating-box">
          <p>Rating:</p>
          <button class="btn moreinfo-btn" onclick=window.open("https://www.filmweb.pl/film/Hobbit%3A+Niezwykła+podróż-2012-343217","_blank") type="button">
            <p>Filmweb</p>
            <div class="rating filmweb">7.6</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>

          <button class="btn moreinfo-btn" onclick=window.open("https://www.imdb.com/title/tt0903624/","_blank") type="button">
            <p>IMDb</p>
            <div class="rating imdb">7.8</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>
        </div>
      </div>
    </div>


    <div class="container-bg">
      <div class="movie-info-container">
        <div class="title-box">
          <div class="movie-title-box">
            <div class="movie-title">Hobbit: Pustkowie Smauga</div>
            <div class="movie-date-release">(2013)</div>
            <div class="movie-original-title">The Hobbit: The Desolation of Smaug</div>
          </div>
          <div class="movie-director">Director<span class="director">Peter Jackson</span></div>
          <div class="movie-genere-box">Genere
            <span>adventure</span>
            <span>fantasy</span><!-- set max visible generes and/or lenght of the 'movie-genre' div -->
          </div>
        </div>

        <div class="rating-box">
          <p>Rating:</p>
          <button class="btn moreinfo-btn" onclick=window.open("https://www.filmweb.pl/film/Hobbit%3A+Pustkowie+Smauga-2013-469867","_blank") type="button">
            <p>Filmweb</p>
            <div class="rating filmweb">7.6</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>

          <button class="btn moreinfo-btn" onclick=window.open("https://www.imdb.com/title/tt1170358/","_blank") type="button">
            <p>IMDb</p>
            <div class="rating imdb">7.8</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>
        </div>
      </div>
    </div>


    <div class="container-bg">
      <div class="movie-info-container">
        <div class="title-box">
          <div class="movie-title-box">
            <div class="movie-title">Hobbit: Bitwa Pięciu Armii</div>
            <div class="movie-date-release">(2014)</div>
            <div class="movie-original-title">The Hobbit: The Battle of the Five Armies</div>
          </div>
          <div class="movie-director">Director<span class="director">Peter Jackson</span></div>
          <div class="movie-genere-box">Genere
            <span>adventure</span>
            <span>fantasy</span><!-- set max visible generes and/or lenght of the 'movie-genre' div -->
          </div>
        </div>

        <div class="rating-box">
          <p>Rating:</p>
          <button class="btn moreinfo-btn" onclick=window.open("https://www.filmweb.pl/film/Hobbit%3A+Bitwa+Pięciu+Armii-2014-662242","_blank") type="button">
            <p>Filmweb</p>
            <div class="rating filmweb">7.2</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>

          <button class="btn moreinfo-btn" onclick=window.open("https://www.imdb.com/title/tt2310332/","_blank") type="button">
            <p>IMDb</p>
            <div class="rating imdb">7.4</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>
        </div>
      </div>
    </div>
      

    <div class="container-bg">    
      <div class="movie-info-container">
        <div class="title-box">
          <div class="movie-title-box">
            <div class="movie-title">Władca pierścieni: Drużyna Pierścienia</div>
            <div class="movie-date-release">(2001)</div>
            <div class="movie-original-title">The Lord of the Rings: The Fellowship of the Ring</div>
          </div>
          <div class="movie-director">Director<span class="director">Peter Jackson</span></div>
          <div class="movie-genere-box">Genere
            <span>adventure</span>
            <span>fantasy</span><!-- set max visible generes and/or lenght of the 'movie-genre' div -->
          </div>
        </div>

        <div class="rating-box">
          <p>Rating:</p>
          <button class="btn moreinfo-btn" onclick=window.open("https://www.filmweb.pl/film/Władca+Pierścieni%3A+Drużyna+Pierścienia-2001-1065","_blank") type="button">
            <p>Filmweb</p>
            <div class="rating filmweb">8.0</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>

          <button class="btn moreinfo-btn" onclick=window.open("https://www.imdb.com/title/tt0120737/","_blank") type="button">
            <p>IMDb</p>
            <div class="rating imdb">8.8</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>
        </div>
      </div>
    </div>


    <div class="container-bg">
      <div class="movie-info-container">
        <div class="title-box">
          <div class="movie-title-box">
            <div class="movie-title">Władca pierścieni: Dwie wieże</div>
            <div class="movie-date-release">(2002)</div>
            <div class="movie-original-title">The Lord of the Rings: The Two Towers</div>
          </div>
          <div class="movie-director">Director<span class="director">Peter Jackson</span></div>
          <div class="movie-genere-box">Genere
            <span>adventure</span>
            <span>drama</span>
            <span>fantasy</span><!-- set max visible generes and/or lenght of the 'movie-genre' div -->
          </div>
        </div>

        <div class="rating-box">
          <p>Rating:</p>
          <button class="btn moreinfo-btn" onclick=window.open("https://www.filmweb.pl/film/Władca+Pierścieni%3A+Dwie+wieże-2002-31451","_blank") type="button">
            <p>Filmweb</p>
            <div class="rating filmweb">8.3</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>

          <button class="btn moreinfo-btn" onclick=window.open("https://www.imdb.com/title/tt0167261/","_blank") type="button">
            <p>IMDb</p>
            <div class="rating imdb">8.7</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>
        </div>
      </div>
    </div>


    <div class="container-bg">
      <div class="movie-info-container">
        <div class="title-box">
          <div class="movie-title-box">
            <div class="movie-title">Władca pierścieni: Powrót króla</div>
            <div class="movie-date-release">(2003)</div>
            <div class="movie-original-title">The Lord of the Rings: The Return of the King</div>
          </div>
          <div class="movie-director">Director<span class="director">Peter Jackson</span></div>
          <div class="movie-genere-box">Genere
            <span>adventure</span>
            <span>drama</span>
            <span>fantasy</span><!-- set max visible generes and/or lenght of the 'movie-genre' div -->
          </div>
        </div>

        <div class="rating-box">
          <p>Rating:</p>
          <button class="btn moreinfo-btn" onclick=window.open("https://www.filmweb.pl/film/Władca+Pierścieni%3A+Powrót+króla-2003-11841","_blank") type="button">
            <p>Filmweb</p>
            <div class="rating filmweb">8.4</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>

          <button class="btn moreinfo-btn" onclick=window.open("https://www.imdb.com/title/tt0167260/","_blank") type="button">
            <p>IMDb</p>
            <div class="rating imdb">8.9</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>
        </div>
      </div>
    </div>
      

    <div class="container-bg">    
      <div class="movie-info-container">
        <div class="title-box">
          <div class="movie-title-box">
            <div class="movie-title">Gdzie jest Nemo?</div>
            <div class="movie-date-release">(2003)</div>
            <div class="movie-original-title">Finding Nemo</div>
          </div>
          <div class="movie-director">Director<span class="director">Andrew Stanton</span><span class="director">Lee Unkrich</span></div>
          <div class="movie-genere-box">Genere
            <span>adventure</span>
            <span>animation</span>
            <span>comedy</span><!-- set max visible generes and/or lenght of the 'movie-genre' div -->
          </div>
        </div>

        <div class="rating-box">
          <p>Rating:</p>
          <button class="btn moreinfo-btn" onclick=window.open("https://www.filmweb.pl/film/Gdzie+jest+Nemo-2003-36042","_blank") type="button">
            <p>Filmweb</p>
            <div class="rating filmweb">7.2</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>

          <button class="btn moreinfo-btn" onclick=window.open("https://www.imdb.com/title/tt0266543/","_blank") type="button">
            <p>IMDb</p>
            <div class="rating imdb">8.1</div>
            <p class="small">More info <i class="fas fa-angle-double-right"></i></p>
          </button>
        </div>
      </div>
    </div>

  </div>
  
  <div class="side-box right-sb"></div>
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
    <a href="#last"><div class="pag-bg"><i class="fas fa-angle-double-right"></i></div></a>
  </div>
</div>
