<div class="homepage-content">

  <div class="topbar">
    <p>Check Movie Base <i class="fas fa-arrow-circle-up small"></i></p>
    <p></p>
  </div>

  <div class="homepage-container maybe-con">
    <p>Maybe let's watch...</p>
  </div>
  
  <div class="screen">
    <p>"Beautiful Movie Title Randomly Chosen From"</p><p>?</p>
  </div>

  <div class="homepage-container choose-con">
    <form action="/action_page.php">
      <p>1. Choose genere:</p><i class="fas fa-level-up-alt"></i>
      <select id="generes" name="generes">
        <option value="action">Action</option>
        <option value="adventure">Adventure</option>
        <option value="animation">Animation</option>
        <option value="biography">Biography</option>
        <option value="comedy">Comedy</option>
        <option value="crime">Crime</option>
        <option value="documentary">Documentary</option>
        <option value="drama">Drama</option>
        <option value="family">Family</option>
        <option value="fantasy">Fantasy</option>
        <option value="film-noir">Film-Noir</option>
        <option value="game-show">Game-Show</option>
        <option value="history">History</option>
        <option value="horror">Horror</option>
        <option value="music">Music</option>
        <option value="musical">Musical</option>
        <option value="mystery">Mystery</option>
        <option value="news">News</option>
        <option value="reality-tv">Reality-TV</option>
        <option value="romance">Romance</option>
        <option value="sci-fi">Sci-Fi</option>
        <option value="sport">Sport</option>
        <option value="talk-show">Talk-Show</option>
        <option value="thriller">Thriller</option>
        <option value="war">War</option>
        <option value="western">Western</option>
      </select>
      <p>2. Draw a random movie title:</p><i class="fas fa-redo-alt"></i>
      <input type="submit" value="Draw" class="btn btn-draw">
    </form>
  </div>

  <div class="homepage-container">
    <p>3. Show info about this movie on: </p><i class="fas fa-search-plus"></i>
    <button class="btn btn1-site" onclick="location.href='http://www.filmweb.pl/movie_link'" type="button">Filmweb.pl</button>
    <button class="btn btn2-site" onclick="location.href='http://www.IMDb.com/movie_link'" type="button">IMDb.com</button>
  </div>
</div>
