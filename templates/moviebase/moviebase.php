<?php
require_once '../db_connection.php';
echo <<<EOD
<div class="dropdown">
  <div class="dropdown-btns">
    <button id="myFilterBtn" class="btn dropbtn" onclick="window.location.href='index.php?id=moviebase_filter'">Filter</button>

    <button id="addMovieBtn" class="btn dropbtn" onclick="window.location.href='index.php?id=moviebase_addmovie'">Add new movie to the base <i class="fas fa-plus"></i></button>

    <button id="sortBtn" class="btn dropbtn" onclick="openDropdown('sortmovies')">Sort <i class="fas fa-caret-down"></i></button>
  </div>
EOD;
  include 'templates/moviebase/moviebase_forms/moviebase_sortmovies.php';
echo <<<EOD
</div>
<div class="wrapper">
  <div class="side-box left-sb"></div>
  <div class="moviebase-content">
EOD;
try
{
  $c=new PDO($db_pg,$user,$password);
  $s="select * from movies";
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


  $s = "SELECT * from movies LIMIT $rowsperpage OFFSET $offset";
  $r=$c->prepare("$s");
  $r->execute();
  $r_row_num=$r->rowCount();

  if ($r_row_num){
    foreach($r->fetchAll(PDO::FETCH_ASSOC) as $movie)
    {  echo <<<EOD
      <div class="container-bg">
        <div class="movie-info-container">
          <div class="title-box">
            <div class="movie-title-box">
EOD;
         echo '<div class="movie-title">'.$movie['movie_title'].'</div>';
         echo '<div class="movie-date-release">('.$movie['year'].')</div>';
         echo '<div class="movie-original-title">'.$movie['original_title'].'</div>';
    echo <<<EOD
            </div>
            <div class="movie-director">Director
EOD;
         $sd = "select first_name, last_name from movies_directors inner join directors using (director_id) where movie_id=".$movie['movie_id'];
         $d_result = $c->prepare("$sd");
         $d_result->execute();

         foreach ($d_result->fetchAll(PDO::FETCH_ASSOC) as $director)
         {
           echo '<span class="director">'.$director['first_name'].' '.$director['last_name'].'</span>';
         }
echo <<<EOD
            </div>
            <div class="movie-genre-box">Genre
EOD;
         $sg = "select genre from movies_genres where movie_id=".$movie['movie_id'];
         $g_result = $c->prepare("$sg");
         $g_result->execute();

         foreach ($g_result->fetchAll(PDO::FETCH_ASSOC) as $genre)
         {
           echo '<span>'.$genre['genre'].'</span>';
         }
echo <<<EOD
            </div>
          </div>

          <div class="rating-box">
            <p>Rating:</p>
EOD;
      echo '<button class="btn moreinfo-btn" onclick=window.open("'.$movie['filmweb_url'].'","_blank") type="button">';
      echo   '<p>Filmweb</p><div class="rating filmweb">'.$movie['rating_filmweb'].'</div>';
      echo   '<p class="small">More info <i class="fas fa-angle-double-right"></i></p></button>';
      echo '<button class="btn moreinfo-btn" onclick=window.open("'.$movie['imdb_url'].'","_blank") type="button">';
      echo   '<p>IMDb</p><div class="rating imdb">'.$movie['rating_imdb'].'</div>';
      echo   '<p class="small">More info <i class="fas fa-angle-double-right"></i></p></button>';
 echo<<<EOD
          </div>
        </div>
      </div>
EOD;
    }
} else { print "No results"; }
echo <<<EOD
  </div>
  <div class="side-box right-sb"></div>
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
