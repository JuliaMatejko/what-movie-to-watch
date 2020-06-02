<div id="sortmovies" class="dropdownContent">
  <form action="/action_page.php">
    <div style="margin: 0 0.5em;">
        Order by
      <div class="f-box" >
        <span style="white-space:nowrap">
          <span class="option"><input type="radio" id="year" name="column" value="year">
          <label for="year">Year</label></span>
          <span class="option"><input type="radio" id="title" name="column" value="movie_title">
          <label for="title">Title</label></span>
          <span class="option"><input type="radio" id="my-rating" name="column" value="my_rating">
          <label for="my-rating">My Rating</label></span>
        </span>
        <span style="white-space:nowrap">
          <span class="option"><input type="radio" id="my-rating-date" name="column" value="my_rating_datetime">
          <label for="my-rating-date">My Rating Date</label></span>
          <span class="option"><input type="radio" id="my-review-date" name="column" value="my_review_datetime">
          <label for="my-review-date">My Review Date</label></span>
        </span>
      </div>
      <span style="white-space:nowrap">
        Sort in
        <div class="f-box">
          <span class="option"><input type="radio" id="asc" name="order" value="asc">
          <label for="asc">Ascending</label></span>
          <span class="option"><input type="radio" id="desc" name="order" value="desc">
          <label for="desc">Descending</label></span>
        </div>
        order.
      </span>
    </div>
    <input type="submit" id="sortmvbtn" class="btn submitbtn" value="Sort &raquo"> 
  </form>
  <button onclick="this.parentElement.style.display='none'" class="btn closebtn" type="button">Close <i class="fas fa-times"></i></button>
</div>
