<div id="sortmovies" class="dropdownContent">
  <form action="/action_page.php">
    <div style="margin: 0 0.5em;">
    <span class="f-header">Order by</span>
    <div class="f-box" >
      <span style="white-space:nowrap">
        <span class="option"><input type="radio" id="syear" name="column" value="year">
        <label for="syear">Year</label></span>
        <span class="option"><input type="radio" id="stitle" name="column" value="movie_title">
        <label for="stitle">Title</label></span>
        <span class="option"><input type="radio" id="soriginal-title" name="column" value="original_movie_title">
        <label for="soriginal-title">Original Title</label></span>
      </span>
      <span style="white-space:nowrap">
        <span class="option"><input type="radio" id="srating-imdb" name="column" value="rating_imdb">
        <label for="srating-imdb">Rating IMDb</label></span>
        <span class="option"><input type="radio" id="srating-filmweb" name="column" value="rating_filmweb">
        <label for="srating-filmweb">Rating Filmweb</label></span>
      </span>
    </div>
    <span style="white-space:nowrap">
      <span class="f-header">Sort in</span>
      <div class="f-box">
        <span class="option"><input type="radio" id="asc-order" name="order" value="asc">
        <label for="asc-order">Ascending</label></span>
        <span class="option"><input type="radio" id="desc-order" name="order" value="desc">
        <label for="desc-order">Descending</label></span>
      </div>
      <span class="f-header">order.</span>
    </span>
    </div>
    <input type="submit" id="sortmvbtn" class="btn submitbtn" value="Sort &raquo"> 
  </form>
  <button onclick="this.parentElement.style.display='none'" class="btn closebtn" type="button">Close <i class="fas fa-times"></i></button>
</div>