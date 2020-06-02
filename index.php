<!DOCTYPE html>
<?php $thisPage=$_GET['id']; ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Movie To Watch?</title>
    <meta name="description" content="The Best Site On The Web* When You Don't Know What To Watch.                                *voted by my cat">
    <link href="static/style.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/19f562be58.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
  </head>
  <body>
    <div class="row">
      <header><img src="static/images/logowmtw.png" alt="website logo" style="width:auto;height:100px;"></header>
      <div class="topnav" id="myTopnav">
        <a href='index.php?id=home' class="<?php if($thisPage=="home"){print 'active';}?>">Home</a>
        <a href='index.php?id=mymovies' class="<?php if($thisPage=="mymovies"){print 'active';}?> mvright">My Movies</a>
        <a href='index.php?id=moviebase' class="<?php if($thisPage=="moviebase"){print 'active';}?> mvright"><i class="fas fa-film"></i> Movie Base</a>
        <a href='index.php?id=about' class="<?php if($thisPage=="about"){print 'active';}?>">About</a>
        <a href="javascript:void(0);" class="icon" onclick="navResponse()">
          <i class="fa fa-bars"></i>
        </a>
      </div>

      <div class="content">
        <?php 
        switch($_GET['id']) {
        case '': include 'templates/home/home.php';
          break;
        case 'home': include 'templates/home/home.php';
          break;
        case 'mymovies': include 'templates/mymovies/mymovies.php';
          break;
        case 'moviebase': include 'templates/moviebase/moviebase.php';
          break;
        case 'about': include 'templates/about.php';
          break;
        case 'moviebase_filter': include 'templates/moviebase/moviebase_forms/moviebase_filter.php';
          break;
        case 'moviebase_addmovie': include 'templates/moviebase/moviebase_forms/moviebase_addmovie.php';
          break;
        case 'mymovies_filter': include 'templates/mymovies/mymovies_forms/mymovies_filter.php';
          break;
        case 'mymovies_addmovie': include 'templates/mymovies/mymovies_forms/mymovies_addmovie.php';
          break;
        case 'moviebase_result': include 'templates/moviebase/moviebase_result.php';
          break;
        case 'mymovies_result': include 'templates/mymovies/mymovies_result.php';
          break;
        }
        ?>
      </div>
      <button onclick="topFunction()" id="totopbtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
      <footer>© created</footer>
    </div>
  </body>
</html>
