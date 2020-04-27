<div class="homepage-content">

  <div class="topbar">
    <p>Check Movie Base <i class="fas fa-arrow-up"></i></p>
    <p></p>
  </div>

  <div class="homepage-container maybe">
    <p>Maybe let's watch...</p>
  </div>
  
  <div class="screen">
    <p>"Beautiful Movie Title Randomly Chosen From"</p><p class="maybe">?</p>
  </div>

  <div class="homepage-container">
    <form action="/action_page.php">
      <p>Choose genere: <i class="fas fa-level-down-alt"></i></p>
      <select id="generes" name="generes">
        <option value="all">All</option>
        <option value="action">Action</option>
        <option value="animation">Animation</option>
        <option value="documentary">Documentary</option>
      </select>
      <p><i class="fas fa-redo-alt"></i> Draw a random movie title:</p>
      <input type="submit" value="Draw" class="btn btn-draw">
    </form>
  </div>

  <div class="homepage-container">
    <p><i class="fas fa-search-plus"></i> Show movie info about this movie on: </p>
    <button class="btn btn1-site" onclick="location.href='http://www.filmweb.pl/movie_link'" type="button">Filmweb.pl</button>
    <button class="btn btn2-site" onclick="location.href='http://www.IMDb.com/movie_link'" type="button">IMDb.com</button>
  </div>
</div>