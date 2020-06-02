<div class="forms-bar"><p>Filter movie base</p></div>
<div class="wrapper">
  <div class="side-box left-sb"></div>
  <div class="formpage-content">
    <div id="filter" class="dropdownContent formContent">
      <form method="post" action="test.php">
        <div class="f-con">
          <span>
            <span class="f-header">Genres</span>
            <span style="white-space:nowrap;margin-left:0.5em;">
              Wide selection
              <span>
                <label class="switch">
                <input type="checkbox" id="gen-s-type" name="gen-s-type" value="">
                <span class="slider round"></span></label>
              </span>
              Strict selection
            </span>
          </span>
          <div class="small" style="margin-top:0.5em;color:rgb(76, 77, 130);">
            <span>wide selection: movies from any of the genres selected,</span>
            <span style="white-space:nowrap;">strict selection: intersection of the genres selected</span>
          </div>
          <div class="f-box">
            <span class="option"><input type="checkbox" id="genre1" name="genre1" value="action"><label for="genre1">Action</label></span>
            <span class="option"><input type="checkbox" id="genre2" name="genre2" value="adventure"><label for="genre2">Adventure</label></span>
            <span class="option"><input type="checkbox" id="genre3" name="genre3" value="animation"><label for="genre3">Animation</label></span>
            <span class="option"><input type="checkbox" id="genre4" name="genre4" value="biography"><label for="genre4">Biography</label></span>
            <span class="option"><input type="checkbox" id="genre5" name="genre5" value="comedy"><label for="genre5">Comedy</label></span>
            <span class="option"><input type="checkbox" id="genre6" name="genre6" value="crime"><label for="genre6">Crime</label></span>
            <span class="option"><input type="checkbox" id="genre7" name="genre7" value="documentary"><label for="genre7">Documentary</label></span>
            <span class="option"><input type="checkbox" id="genre8" name="genre8" value="drama"><label for="genre8">Drama</label></span>
            <span class="option"><input type="checkbox" id="genre9" name="genre9" value="family"><label for="genre9">Family</label></span>
            <span class="option"><input type="checkbox" id="genre10" name="genre10" value="fantasy"><label for="genre10">Fantasy</label></span>
            <span class="option"><input type="checkbox" id="genre11" name="genre11" value="film-noir"><label for="genre11">Film-Noir</label></span>
            <span class="option"><input type="checkbox" id="genre12" name="genre12" value="game-show"><label for="genre12">Game-Show</label></span>
            <span class="option"><input type="checkbox" id="genre13" name="genre13" value="history"><label for="genre13">History</label></span>
            <span class="option"><input type="checkbox" id="genre14" name="genre14" value="horror"><label for="genre14">Horror</label></span>
            <span class="option"><input type="checkbox" id="genre15" name="genre15" value="music"><label for="genre15">Music</label></span>
            <span class="option"><input type="checkbox" id="genre16" name="genre16" value="musical"><label for="genre16">Musical</label></span>
            <span class="option"><input type="checkbox" id="genre17" name="genre17" value="mystery"><label for="genre17">Mystery</label></span>
            <span class="option"><input type="checkbox" id="genre18" name="genre18" value="news"><label for="genre18">News</label></span>
            <span class="option"><input type="checkbox" id="genre19" name="genre19" value="reality-tv"><label for="genre19">Reality-TV</label></span>
            <span class="option"><input type="checkbox" id="genre20" name="genre20" value="romance"><label for="genre20">Romance</label></span>
            <span class="option"><input type="checkbox" id="genre21" name="genre21" value="sci-fi"><label for="genre21">Sci-Fi</label></span>
            <span class="option"><input type="checkbox" id="genre22" name="genre22" value="sport"><label for="genre22">Sport</label></span>
            <span class="option"><input type="checkbox" id="genre23" name="genre23" value="talk-show"><label for="genre23">Talk-Show</label></span>
            <span class="option"><input type="checkbox" id="genre24" name="genre24" value="thriller"><label for="genre24">Thriller</label></span>
            <span class="option"><input type="checkbox" id="genre25" name="genre25" value="war"><label for="genre25">War</label></span>
            <span class="option"><input type="checkbox" id="genre26" name="genre26" value="western"><label for="genre26">Western</label></span>
          </div>
        </div>
        <div class="f-con">
          <span style="white-space:nowrap">
            <span class="f-header">Rating:</span>
            <span class="f-box">
              <label for="rating-from">from</label>
              <input type="number" id="rating-from" name="rating-from" min="1.0" max="10" step="0.1" value="1.0">
              <label for="rating-to"> to</label>
              <input type="number" id="rating-to" name="rating-to" min="1.0" max="10" step="0.1" value="10">
            </span>
          </span>
          <span style="white-space:nowrap">
            <span class="f-header">Release year:</span>
            <span class="f-box">
              <label for="year-from">from</label>
              <input type="number" id="year-from" name="year-from" min="1874" max="2020" value="1874">
              <label for="year-to">to</label>
              <input type="number" id="year-to" name="year-to" min="1874" max="2020" value="2020">
            </span>
          </span>
        </div>
        <div class="f-con">
          <span>
            <span class="f-header">Keywords </span>
            <span style="white-space:nowrap;margin-left:0.5em;">
              Wide selection
              <span>
                <label class="switch">
                <input type="checkbox" id="kwords-s-type" name="kwords-s-type" value="">
                <span class="slider round"></span></label>
              </span>
              Strict selection
            </span>
          </span>
          <div class="small" style="margin-top:0.5em;color:rgb(76, 77, 130);">
            <span>wide selection: movies from any of the keywords selected,</span>
            <span style="white-space:nowrap;">strict selection: intersection of the keywords selected</span>
          </div>
          <div>
            <span class="f-box" style="white-space:nowrap">
              <label for="keyword1">Keyword 1: </label>
              <input type="text" id="keyword1" name="keyword1" value="lord">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="keyword2">Keyword 2: </label>
              <input type="text" id="keyword2" name="keyword2" value="ring">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="keyword3">Keyword 3: </label>
              <input type="text" id="keyword3" name="keyword3" value="hobbit">
            </span>
          </div>
        </div>
        <div class="f-con">
          <span class="f-header">Director: </span>
          <span>
            <span class="f-box" style="white-space:nowrap">
              <label for="d-firstname">First name: </label>
              <input type="text" id="d-firstname" name="d-firstname" value="peter">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="d-lastname">Last name: </label>
              <input type="text" id="d-lastname" name="d-lastname" value="jackson">
            </span>
          </span>
        </div>
        <div class="f-con">
          <span class="f-header">Actor: </span>
          <span>
            <span class="f-box" style="white-space:nowrap">
              <label for="a-firstname">First name: </label>
              <input type="text" id="a-firstname" name="a-firstname" value="">
            </span>
            <span class="f-box" style="white-space:nowrap">
              <label for="a-lastname">Last name: </label>
              <input type="text" id="a-lastname" name="a-lastname" value="">
            </span>
          </span>
        </div>
        <input type="reset" id="closebtn" class="btn closebtn" value="Reset">
        <input type="submit" id="showmvbtn" class="btn submitbtn" value="Show Movies &raquo">
      </form>
    </div>
  </div>
  <div class="side-box right-sb"></div>
</div>
<div class="forms-bar"></div>
