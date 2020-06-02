<?php
require_once '../db_connection.php';
echo <<<EOD
<div class="dropdown">
  <div class="dropdown-btns">
    <button id="myFilterBtn" class="btn dropbtn" onclick="window.location.href='index.php?id=mymovies_filter'">Filter</button>

    <button id="addMovieBtn" class="btn dropbtn" onclick="window.location.href='index.php?id=mymovies_addmovie'">Add movie to my movie list <i class="fas fa-plus"></i></button>

    <button id="sortBtn" class="btn dropbtn" onclick="openDropdown('sortmovies')">Sort <i class="fas fa-caret-down"></i></button>
  </div>
EOD;
   include 'templates/mymovies/mymovies_forms/mymovies_sortmovies.php';
echo <<<EOD
</div>
<div class="wrapper">
  <div class="my-side-box left-sb"></div>
  <div class="mymovies-content">
EOD;
try
{
  $c=new PDO($db_pg,$user,$password);
  $s="select * from my_movies";
  $r=$c->prepare("$s");
  $r->execute();

  $numrows = $r->rowCount();
  $rowsperpage = 12;
  $totalpages = ceil($numrows / $rowsperpage);


  if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   $currentpage = (int) $_GET['currentpage'];
  } else {
   $currentpage = 1;
  }

  if ($currentpage > $totalpages) {
   $currentpage = $totalpages;
  }

  if ($currentpage < 1) {
   $currentpage = 1;
  }

  $offset = ($currentpage - 1) * $rowsperpage;


  $s = "SELECT * from my_movies LIMIT $rowsperpage OFFSET $offset";
  $r=$c->prepare("$s");
  $r->execute();
  $r_row_num=$r->rowCount();

  if ($r_row_num){
    foreach ($r->fetchAll(PDO::FETCH_ASSOC) as $my_movie)
    {  echo <<<EOD
     <div class="mymovies-container">
      <div class="my-rating-box">
EOD;
    echo '<button class="btn moreinfo-btn myrating-btn" onclick="openDropdown(&#39;myrating'.$my_movie['movie_id'].'&#39;)" type="button">';
    echo '<p>My Rating</p><div class="rating my-rating">'.$my_movie['my_rating'].'</div>';
    echo '<p class="small">Change <i class="fas fa-angle-double-right"></i></p></button>';
    echo '<button class="btn my-review-btn" onclick="openDropdown(&#39;myreview'.$my_movie['movie_id'].'&#39;)" type="button">';
    echo '<p>My Review <i class="fas fa-angle-down small"></i></p></button>';
echo <<<EOD
      </div>
      <div class="my-title-box">
        <div class="my-movie-title-box">
EOD;
           $sty = "select movie_title,year from movies inner join my_movies using (movie_id) where movie_id=".$my_movie['movie_id'];
           $ty_result = $c->prepare("$sty");
           $ty_result->execute();

           foreach ($ty_result->fetchAll(PDO::FETCH_ASSOC) as $title_year)
           {
             echo '<div class="movie-title">'.$title_year['movie_title'].'</div>';
             echo '<div class="movie-date-release">('.$title_year['year'].')</div>';
           }
echo <<<EOD
        </div>
        <div class="fav-towatch-box">
          <span class="favourite"><i class="fas fa-heart"></i></span>
          <span class="to-watch"><i class="far fa-eye"></i></span>
        </div>
      </div>
    </div>
EOD;
echo '<div id="myrating'.$my_movie['movie_id'].'" class="dropdownContent">';
echo '<div class="f-con"><p>Rated <span>'.$my_movie['my_rating'].'</span> on <span>'.$my_movie['my_rating_datetime'].'</span></p>';
echo <<<EOD
      </div>
      <form action_page="/action_page.php">
        <div>
          <span>
EOD;
      echo '<label class="f-header" style="white-space:nowrap" for="setmyrating'.$my_movie['movie_id'].'">Change My Rating: </label>';
      echo '<span class="f-box"><input type="number" name="setmyrating'.$my_movie['movie_id'].'" min="1" max="10" step="0.5" value="0"></span>';
echo <<<EOD
          </span>
          <span>
            <span class="f-header" style="white-space:nowrap">Mark as: </span>
            <span class="f-box option">
EOD;
        echo '<input type="checkbox" name="setfavourite'.$my_movie['movie_id'].'" value="favourite"><label for="setfavourite'.$my_movie['movie_id'].'">Favourite</label>';
      echo '</span><span class="f-box option">';
        echo '<input type="checkbox" name="settowatch'.$my_movie['movie_id'].'" value="towatch"><label for="settowatch'.$my_movie['movie_id'].'">To Watch</label>';
echo <<<EOD
            </span>
          </span>
        </div>
        <input type="submit" id="changemyratbtn" class="btn submitbtn" value="Change &raquo">
      </form>
      <button onclick="this.parentElement.style.display='none'" class="btn closebtn" type="button">Close <i class="fas fa-times"></i></button>
    </div>
EOD;
echo '<div id="myreview'.$my_movie['movie_id'].'" class="dropdownContent drop-rev">';
echo '<div class="f-con">';
  echo '<p>Last review change made on <span>'.$my_movie['my_review_datetime'].'</span></p>';
echo <<<EOD
      </div>
      <div class="textdiv">
        <div class="rev-text-box">
EOD;
  echo '<span>'.$my_movie['my_review'].'</span></div>';
echo <<<EOD
      </div>
      <form action_page="#">
        <div class="f-box textdiv">
EOD;
    echo '<textarea name="my-review'.$my_movie['movie_id'].'-content" placeholder="What do I think about this movie?"></textarea>';
echo <<<EOD
        </div>
        <input type="submit" id="changemyrevbtn" class="btn submitbtn" value="Change &raquo">
      </form>
      <button onclick="this.parentElement.style.display='none'" class="btn closebtn" type="button">Close <i class="fas fa-times"></i></button>
    </div>
EOD;
}
   } else { echo "No results"; }
echo <<<EOD
  </div>
  <div class="my-side-box right-sb"></div>
</div>
<div class="pagination-box">
  <div class="pagination">
EOD;
 $range = 4;
  if ($currentpage > 1) {
   echo "<a href='{$_SERVER['REQUEST_URI']}&currentpage=1'><div class='pag-bg'><i class='fas fa-angle-double-left'></i></div></a>";
   $prevpage = $currentpage - 1;
   echo "<a href='{$_SERVER['REQUEST_URI']}&currentpage=$prevpage'><div class='pag-bg'><i class='fas fa-angle-left'></i></div></a>";
  }


  for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
     if (($x > 0) && ($x <= $totalpages)) {
        if ($x == $currentpage) {
           echo "<a class='active'><div class='pag-bg'>$x</div></a>";
        } else {
           echo "<a href='{$_SERVER['REQUEST_URI']}&currentpage=$x'><div class='pag-bg'>$x</div></a>";
        }
     }
  }

  if ($currentpage != $totalpages) {
     $nextpage = $currentpage + 1;
     echo "<a href='{$_SERVER['REQUEST_URI']}&currentpage=$nextpage'><div class='pag-bg'><i class='fas fa-angle-right'></i></div></a>";
     echo "<a href='{$_SERVER['REQUEST_URI']}&currentpage=$totalpages'><div class='pag-bg'><i class='fas fa-angle-double-right'></i></div></a>";
  }
echo <<<EOD
   </div>
</div>
EOD;
}
  catch (PDOException $e)
{
  print "Database connection failed.".$e->getMessage();
}

?>
