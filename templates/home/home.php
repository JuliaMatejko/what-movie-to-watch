<div class="homepage-content">
  <div class="topbar">
    <p>Check Movie Base <i class="fas fa-arrow-circle-up small"></i></p>
    <p></p>
  </div>
  <div class="homepage-container maybe-con">
    <p>Maybe let's watch...</p>
  </div>
  <div class="screen">
<?php
require_once "../db_connection.php";
$c = new PDO($db_pg, $user, $password);

if (isset($_POST['genres']))
{
$genre = "'".$_POST['genres']."'";
}
else
{
$genre = "SELECT * FROM genres";
}
$s = "SELECT movie_title, year, imdb_url, filmweb_url FROM movies WHERE movie_id IN (SELECT movie_id FROM movies_genres WHERE genre IN ($genre)) ORDER BY RANDOM() LIMIT 1";
$r = $c->prepare("$s");
$r->execute();

while ($movie = $r->fetch(PDO::FETCH_ASSOC)){
  echo '<p>"'.$movie['movie_title'].' ('.$movie['year'].')"</p><p>?</p>';
  echo <<<EOD
    </div>
    <div class="homepage-container choose-con">
      <form method="post">
        <p>1. Choose genre:</p><i class="fas fa-level-up-alt"></i>
        <select id="genres" name="genres">
          <option value="" disabled selected hidden>all</option>
EOD;
    $sg = "SELECT genre FROM genres";
    $g = $c->prepare("$sg");
    $g->execute();
    foreach ($g as $gen)
      echo '<option value="'.$gen[0].'">'.$gen[0].'</option>';
echo <<<EOD
         </select>
        <p>2. Draw a random movie title:</p><i class="fas fa-redo-alt"></i>
        <input type="submit" value="Draw" class="btn btn-draw">
      </form>
    </div>
    <div class="homepage-container">
      <p>3. Show info about this movie on: </p><i class="fas fa-search-plus"></i>
EOD;

     echo '<button class="btn btn1-site" onclick=window.open("'.$movie['filmweb_url'].'","_blank") type="button">Filmweb.pl</button>';
     echo '<button class="btn btn2-site" onclick=window.open("'.$movie['imdb_url'].'","_blank") type="button">IMDb.com</button>';
}
     echo <<<EOD
    </div>
  </div>
EOD;
?>

