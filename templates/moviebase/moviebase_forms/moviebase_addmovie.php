<div class="forms-bar"><p>Add new movie to the base</p></div>
<div class="wrapper">
  <div class="side-box left-sb"></div>
  <div class="formpage-content">
    <div id="addmovie" class="dropdownContent formContent">
      <form action="/action_page.php">
        <form action="/action_page.php">
          <div class="f-con">
            <span class="f-box" style="white-space:nowrap">
              <label for="add-mtitle">Movie title:</label>
              <input type="text" id="add-mtitle" name="add-mtitle">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="add-otitle">Original title:</label>
              <input type="text" id="add-otitle" name="add-otitle">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="add-myear" style="white-space:nowrap">Release year:</label>
              <input type="number" id="add-myear" name="add-myear" min="1874" max="2020" value="2020">
            </span>
            <p>Check if movie already exists in database. <input type="submit" id="checkmvbtn" name="checkmvbtn" class="btn submitbtn" value="Check &raquo"></p>
            <div>
              <span class="f-box" style="background:rgba(0, 255, 83, 0.25);border:1px solid rgba(0, 255, 83);">
                <span style="white-space:nowrap">This movie does not exist in database.</span>
                <span style="white-space:nowrap">You may <u>continue adding more information.</u></span>
              </span><!--set display none default-->
              <!--<span class="f-box" style="background:rgba(255, 193, 0, 0.25);border:1px solid rgba(255, 193, 0);">
                <span style="white-space:nowrap;">This movie <u>does already exist</u> in database.</span>
                <span>You may <u>update information</u><span style="white-space:nowrap"> about this movie or <u>cancel changes.</u></span></span>
                <input type="submit" id="updatemvbtn" class="btn submitbtn" value="Update &raquo"><input type="submit" id="cancelmvbtn" class="btn submitbtn" value="Cancel &raquo">
              </span>-->
            </div>
          </div>
        </form>
        <div class="f-con">
          <span id="add-director-1">
            <span class="f-header">Director: </span>
            <span>
              <span class="f-box" style="white-space:nowrap">
                <label for="d-firstname-1">First name: </label>
                <input type="text" id="d-firstname-1" name="d-firstname-1">
              </span>
              <span class="f-box" style="white-space:nowrap">
                <label for="d-lastname-1">Last name: </label>
                <input type="text" id="d-lastname-1" name="d-lastname-1">
              </span>
            </span>
          </span>
          <input type="submit" id="adddirbtn" class="btn submitbtn" value="Add More +">
        </div>
        <div class="f-con">
          <span class="f-header">Genres</span>
          <span>
            <span style="white-space:nowrap;">( select 1-3 genres )</span>
          </span>
          <div class="f-box">
            <span class="option"><input type="checkbox" id="add-genre1" value="action"><label for="add-genre1">Action</label></span>
            <span class="option"><input type="checkbox" id="add-genre2" value="adventure"><label for="add-genre2">Adventure</label></span>
            <span class="option"><input type="checkbox" id="add-genre3" value="animation"><label for="add-genre3">Animation</label></span>
            <span class="option"><input type="checkbox" id="add-genre4" value="biography"><label for="add-genre4">Biography</label></span>
            <span class="option"><input type="checkbox" id="add-genre5" value="comedy"><label for="add-genre5">Comedy</label></span>
            <span class="option"><input type="checkbox" id="add-genre6" value="crime"><label for="add-genre6">Crime</label></span>
            <span class="option"><input type="checkbox" id="add-genre7" value="documentary"><label for="add-genre7">Documentary</label></span>
            <span class="option"><input type="checkbox" id="add-genre8" value="drama"><label for="add-genre8">Drama</label></span>
            <span class="option"><input type="checkbox" id="add-genre9" value="family"><label for="add-genre9">Family</label></span>
            <span class="option"><input type="checkbox" id="add-genre10" value="fantasy"><label for="add-genre10">Fantasy</label></span>
            <span class="option"><input type="checkbox" id="add-genre11" value="film-noir"><label for="add-genre11">Film-Noir</label></span>
            <span class="option"><input type="checkbox" id="add-genre12" value="game-show"><label for="add-genre12">Game-Show</label></span>
            <span class="option"><input type="checkbox" id="add-genre13" value="history"><label for="add-genre13">History</label></span>
            <span class="option"><input type="checkbox" id="add-genre14" value="horror"><label for="add-genre14">Horror</label></span>
            <span class="option"><input type="checkbox" id="add-genre15" value="music"><label for="add-genre15">Music</label></span>
            <span class="option"><input type="checkbox" id="add-genre16" value="musical"><label for="add-genre16">Musical</label></span>
            <span class="option"><input type="checkbox" id="add-genre17" value="mystery"><label for="add-genre17">Mystery</label></span>
            <span class="option"><input type="checkbox" id="add-genre18" value="news"><label for="add-genre18">News</label></span>
            <span class="option"><input type="checkbox" id="add-genre19" value="reality-tv"><label for="add-genre19">Reality-TV</label></span>
            <span class="option"><input type="checkbox" id="add-genre20" value="romance"><label for="add-genre20">Romance</label></span>
            <span class="option"><input type="checkbox" id="add-genre21" value="sci-fi"><label for="add-genre21">Sci-Fi</label></span>
            <span class="option"><input type="checkbox" id="add-genre22" value="sport"><label for="add-genre22">Sport</label></span>
            <span class="option"><input type="checkbox" id="add-genre23" value="talk-show"><label for="add-genre23">Talk-Show</label></span>
            <span class="option"><input type="checkbox" id="add-genre24" value="thriller"><label for="add-genre24">Thriller</label></span>
            <span class="option"><input type="checkbox" id="add-genre25" value="war"><label for="add-genre25">War</label></span>
            <span class="option"><input type="checkbox" id="add-genre26" value="western"><label for="add-genre26">Western</label></span>
          </div>
        </div>
        <div class="f-con">
          <div>
            <span class="f-box">
              <label for="irating">IMDb rating:</label>
              <input type="number" id="irating" name="irating" min="1.0" max="10" step="0.1" value="0.0">
            </span>
            <span class="f-box">
              <label for="imdb-link">Movie URL address on IMDb:</label>
              <input type="url" id="imdb-link" name="imdb-link">
            </span>
          </div>
          <div>
            <span class="f-box">
              <label for="frating">Filmweb rating:</label>
              <input type="number" id="frating" name="frating" min="1.0" max="10" step="0.1" value="0.0">
            </span>
            <span class="f-box">
              <label for="filmweb-link">Movie URL address on Filmweb:</label>
              <input type="url" id="filmweb-link" name="filmweb-link">
            </span>
          </div>
        </div>
        <div class="f-con">
          <span id="add-actor-1">
            <span class="f-header">Actor: </span>
            <span>
              <span class="f-box" style="white-space:nowrap">
                <label for="a-firstname-1">First name: </label>
                <input type="text" id="a-firstname-1" name="a-firstname-1">
              </span>
              <span class="f-box" style="white-space:nowrap">
                <label for="a-lastname-1">Last name: </label>
                <input type="text" id="a-lastname-1" name="a-lastname-1">
              </span>
            </span>
          </span>
          <input type="submit" id="addactbtn" class="btn submitbtn" value="Add More +">
        </div>
        <div class="f-con">
          <span class="f-header">Keywords </span>
          <div class="small" style="margin-top:0.25em;">
            <span>( beside the words from the movie title and the original title, which will be automatically transformed into keywords, you may add 1-3 more keywords related to the movie )</span>
          </div>
          <div>
            <span class="f-box" style="white-space:nowrap">
              <label for="add-keyword1">Keyword 1: </label>
              <input type="text" id="add-keyword1" name="add-keyword1">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="add-keyword2">Keyword 2: </label>
              <input type="text" id="add-keyword2" name="add-keyword2">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="add-keyword3">Keyword 3: </label>
              <input type="text" id="add-keyword3" name="add-keyword3">
            </span>
          </div>
        </div>
        <input type="submit" id="addmvbtn" class="btn submitbtn" value="Add Movie &raquo">
      </form>
      <button onclick="" class="btn closebtn" type="button">Cancel <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="side-box right-sb"></div>
</div>
<div class="forms-bar"></div>