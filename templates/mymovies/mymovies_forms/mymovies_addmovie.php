<div class="forms-bar"><p>Add new movie to my movies</p></div>
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
                <span style="white-space:nowrap">This movie is not on My Movies list.</span>
                <span style="white-space:nowrap">You may <u>add it to your list.</u></span>
              </span><!--set display none default-->
              <span class="f-box" style="background:rgba(255, 193, 0, 0.25);border:1px solid rgba(255, 193, 0);">
                <span style="white-space:nowrap">This movie <u>is already on your list.</u></span>
              </span>
              <span class="f-box" style="background:rgba(255, 193, 0, 0.25);border:1px solid rgba(255, 193, 0);">
                <span style="white-space:nowrap;">This movie <u>does not exist</u> in database.</span>
                <span>You can <u>add this movie</u><span style="white-space:nowrap"> to the Movie Base or <u>cancel changes.</u></span></span>
                <button style="color:white;font-weight:bold;" type="button" class="btn submitbtn" onclick="window.location.href='index.php?id=moviebase_addmovie'">Add to Movie Base +</button>
              </span>
            </div>
          </div>
        </form>
        <input type="submit" id="addmvbtn" class="btn submitbtn" value="Add Movie &raquo">
      </form>
      <button onclick="" class="btn closebtn" type="button">Cancel <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="side-box right-sb"></div>
</div>
<div class="forms-bar"></div>